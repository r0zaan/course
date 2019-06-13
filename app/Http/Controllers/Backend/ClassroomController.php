<?php

namespace App\Http\Controllers\Backend;

use App\Classroom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $classes = Classroom::orderBy('name','asc')->get();
       return view('backend.class.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.class.create');
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
            'name'=>'required|unique:classrooms,name',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        Classroom::create($input);
        session()->flash('success', 'Class Created.');
        return [
            'status'=>'success',
            'message'=>'Class Created.',
            'return_url' => route('classes.index')
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom $class
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $class)
    {
        return view('backend.class.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $class
     * @return array|\Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $class)
    {
        $input = $request->all();
        $rules = [
            'name'=>"required|unique:classrooms,name,$class->id,id",
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        $class->update($input);
        session()->flash('success', 'Class Updated.');
        return [
            'status'=>'success',
            'message'=>'Class updated.',
            'return_url' => route('classes.index')
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $class
     * @return array|\Illuminate\Http\Response
     */
    public function destroy(Classroom $class)
    {
        if (!request()->ajax()) {
            return false;
        }
        $class->delete();
        session()->flash('success', 'Class Deleted.');
        return [
            'status'=>'success',
            'message'=>'Deleted.',
            'return_url' => route('classes.index')
        ];
    }
}
