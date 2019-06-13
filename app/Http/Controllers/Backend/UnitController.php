<?php

namespace App\Http\Controllers\Backend;

use App\Classroom;
use App\Http\Controllers\Controller;
use App\Subject;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $classes = Classroom::orderBy('name','asc')->with('units')->get();
        return view('backend.unit.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Classroom::orderBy('name','asc')->get()->pluck('name','id');
        $subjects = Subject::orderBy('name','asc')->get()->pluck('name','id');
        return view('backend.unit.create',compact('classes','subjects'));
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
            'subject_id'=>'required',
            'class_id'=>'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        $unit =  Unit::create($input);
        session()->flash('success', 'Unit Created.');
        return [
            'status'=>'success',
            'message'=>'Unit Created.',
            'return_url' => route('units.index')
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        $classes = Classroom::orderBy('name','asc')->get()->pluck('name','id');
        $subjects = Subject::orderBy('name','asc')->get()->pluck('name','id');
        return view('backend.unit.edit', compact('unit','classes','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return array|\Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        $input = $request->all();
        $rules = [
            'name' => 'required',
            'subject_id'=>'required',
            'class_id'=>'required',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        $unit->update($input);
        session()->flash('success', 'Unit Updated.');
        return [
            'status'=>'success',
            'message'=>'Unit updated.',
            'return_url' => route('units.index')
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return array|\Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        session()->flash('success', 'Unit Deleted.');
        return [
            'status'=>'success',
            'message'=>'Deleted.',
            'return_url' => route('units.index')
        ];
    }
}
