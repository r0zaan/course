<div class="container" style="margin-top: 20px">
    <h3>{{$class->name}} <span class="label label-default">New</span></h3>
    <div class="row">
        @foreach($subjects as $subject)
            <div class="col-sm-4 mb-3 mb-md-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$subject->name}}</h3>
                    </div>
                    @if(\App\Unit::where('subject_id',$subject->id)
                    ->where('class_id',$class->id)
                    ->orderBy('name','ASC')
                    ->count() > 0)
                    @foreach(\App\Unit::where('subject_id',$subject->id)
                    ->where('class_id',$class->id)
                    ->orderBy('name','ASC')
                    ->get() as $unit)
                        <div class="panel-body">
                            <a href="{{url('/class/'.$class->id.'/unit/'.$unit->id)}}"
                               class="btn btn-grand">{{$unit->name}}</a>
                        </div>
                    @endforeach
                        @else
                        <div class="panel-body">
                            <h4>No Unit Found</h4>
                        </div>
                    @endif
                </div>

            </div>
        @endforeach
    </div>
</div>