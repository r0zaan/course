{!! Form::model($video,[
    'action' => ['Backend\VideoController@update', $video->id],
    'method' => 'PATCH',
    'class' => 'video',
    'files' => true,
]) !!}

@include('backend.video.form')

<div class="box-footer text-right">
    <button type="submit" class="btn btn-warning">Update</button>
</div>




{!! Form::close() !!}

