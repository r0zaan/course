@extends('frontend.layout')

@section('content')

    <div class="container" style="margin-top: 20px">
        <h3>{{$class->name}} <span class="label label-default">New</span></h3>
        <div class="row">
                <div class="col-sm-4 mb-3 mb-md-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$unit->subject->name}}</h3>
                        </div>
                        @foreach(\App\Unit::where('subject_id',$unit->subject->id)
                        ->where('class_id',$class->id)
                        ->orderBy('name','ASC')
                        ->get() as $unit)
                            <div class="panel-body">
                                <a href="{{url('/class/'.$class->id.'/unit/'.$unit->id)}}"
                                   class="btn btn-grand">{{$unit->name}}</a>
                                @if( Request::segment(4) == $unit->id)
                                    <i class="fa fa-arrow-left"></i>

                                @endif
                            </div>
                        @endforeach
                    </div>

                </div>
            <div class="col-sm-8 mb-3 mb-md-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$unit->name}}</h3>
                    </div>
                    <div class="panel-body">
                    @foreach($videos as $video)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">{{$video->title}}</h3>
                                </div>
                                <div class="panel-body">
                            <video width="100%" controls src="{{asset($video->video_link)}}" type="video/mp4" controlsList="nodownload" preload="none">
                                {{--<source >--}}
                                Your browser does not support HTML5 video.
                            </video>
                                    <div class="description" style="margin-top:30px">
                                        {{$video->description}}
                                    </div>

                                </div>

                            </div>
                    @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection