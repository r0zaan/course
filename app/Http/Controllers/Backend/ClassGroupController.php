<?php

namespace App\Http\Controllers\Backend;

use App\ClassGroup;
use App\Classroom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classGroups = ClassGroup::orderBy('name','asc')->get();
        return view('backend.classGroup.index',compact('classGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classroom::orderBy('name','asc')->get()->pluck('name','id');
        return view('backend.classGroup.create',compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $rules = [
            'name'=>'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        $classGroup =  ClassGroup::create($input);
        $classGroup->classes()->attach($input['class_id']);
        session()->flash('success', 'Class Group Created.');
        return [
            'status'=>'success',
            'message'=>'Class Group Created.',
            'return_url' => route('classGroups.index')
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClassGroup  $classGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ClassGroup $classGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassGroup  $classGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassGroup $classGroup)
    {
        $classes = Classroom::orderBy('name','asc')->get()->pluck('name','id');
        $classGroup['class_id'] = $classGroup->classes()->get();
        return view('backend.classGroup.edit', compact('classGroup','classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassGroup  $classGroup
     * @return array|\Illuminate\Http\Response
     */
    public function update(Request $request, ClassGroup $classGroup)
    {
        $input = $request->all();
        $rules = [
            'name' => 'required',
            'status' => 'required'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        $classGroup->update($input);
        $classGroup->classes()->sync($input['class_id']);
        session()->flash('success', 'Class Group Updated.');
        return [
            'status'=>'success',
            'message'=>'Class Group updated.',
            'return_url' => route('classGroups.index')
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassGroup  $classGroup
     * @return array|\Illuminate\Http\Response
     */
    public function destroy(ClassGroup $classGroup)
    {
        $classGroup->delete();
        session()->flash('success', 'Class Group Deleted.');
        return [
            'status'=>'success',
            'message'=>'Deleted.',
            'return_url' => route('classGroups.index')
        ];
    }
}
