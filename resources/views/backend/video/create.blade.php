{!! Form::open([
    'action' => 'Backend\VideoController@store',
    'method' => 'POST',
    'class' => 'form-horizontal ajax-form-post',
    'files' => true,
]) !!}

@include('backend.video.form')

<div class="box-footer text-right">
    <button type="submit" class="btn btn-warning">Create</button>
</div>




{!! Form::close() !!}

