<?php

namespace App\Http\Controllers\Backend;

use App\Classroom;
use App\Http\Controllers\Controller;
use App\Subject;
use App\Unit;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('class_id','asc')->get();
        return view('backend.video.index',compact('videos'));
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
        return view('backend.video.create',compact('classes','subjects'));
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
            'video' => 'required',
            'title' => 'required',
            'unit_id'=>'required',
            'subject_id'=>'required',
            'class_id'=>'required',
        ];
        $response = [
            'class_id.required' => 'Class Name Required.',
            'subject_id.required' => 'Subject Name Required.',
            'unit_id.required' => 'Unit Name Required.'
        ];
        $validator = Validator::make($input, $rules, $response);
        if ($validator->fails()) {
            return [
                'status'=>'fail',
                'errors'=>$validator->getMessageBag()->toArray()
            ];
        }
        $fileName = time().'.'.$request->file('video')->getClientOriginalExtension();
        $request->file('video')->move(public_path('video'), $fileName);
        $input['video_name'] = $request->file('video')->getClientOriginalName();
        $input['video_link'] = 'videos/'.$fileName;
        Video::create($input);
        return [
            'status' => 'success',
            'message' => 'You have successfully upload file.',
            'return_url' => route('videos.index')
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $classes = Classroom::orderBy('name','asc')->get()->pluck('name','id');
        $subjects = Subject::orderBy('name','asc')->get()->pluck('name','id');
        return view('backend.unit.edit', compact('unit','classes','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return array|\Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
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
        $video->update($input);
        session()->flash('success', 'Video Updated.');
        return [
            'status'=>'success',
            'message'=>'Unit updated.',
            'return_url' => route('units.index')
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return array|\Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        session()->flash('success', 'Video Deleted.');
        return [
            'status'=>'success',
            'message'=>'Deleted.',
            'return_url' => route('units.index')
        ];
    }
    public function getUnitFormClass(Request $request)
    {
        if($request->class_id){
            $units = Unit::where('class_id',$request->class_id)
                ->get();
            return $units;
        }else{
            return '';
        }
    }
    public function getUnitFormSubject(Request $request)
    {
        if($request->class_id){
            if($request->subject_id) {
                $units = Unit::where('class_id',$request->class_id)
                    ->where('subject_id',$request->subject_id)
                    ->get();
                return $units;
            }else{
                return '';
            }
        }else{
            return '';
        }
    }
    public function showVideo($id)
    {
        $video = Video::find($id);
        return view('backend.video.video',compact('video'));
    }
}
