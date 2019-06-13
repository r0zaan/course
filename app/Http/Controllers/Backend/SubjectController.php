<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::orderBy('name','asc')->get();
        return view('backend.subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.subject.create');
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
            'name'=>'required|unique:subjects,name',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        Subject::create($input);

        session()->flash('success', 'Subject Created.');
        return [
            'status'=>'success',
            'message'=>'Subject Created.',
            'return_url' => route('subjects.index')
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('backend.subject.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return array|\Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $input = $request->all();
        $rules = [
            'name' => "required|unique:subjects,name,$subject->id,id",
            'status' => 'required'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        $subject->update($input);

        session()->flash('success', 'Subject Updated.');
        return [
            'status'=>'success',
            'message'=>'Subject updated.',
            'return_url' => route('subjects.index')
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return array|\Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        session()->flash('success', 'Subject Deleted.');
        return [
            'status'=>'success',
            'message'=>'Deleted.',
            'return_url' => route('subjects.index')
        ];
    }
}
