<?php

namespace App\Http\Controllers\Frontend;

use App\Classroom;
use App\Http\Controllers\Controller;
use App\Subject;
use App\Unit;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function class($id){
        $class = Classroom::find($id);
        $subjects = Subject::all();
        return view('frontend.class.index',compact('class','subjects'));
    }
    public function unit($classId,$id){
        $class = Classroom::find($classId);
        $unit = Unit::find($id);
        $videos = $unit->videos()->orderBy('title','ASC')->get();

        return view('frontend.class.unit',compact('unit','class','videos'));

    }
}
