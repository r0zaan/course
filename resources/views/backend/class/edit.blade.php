{!! Form::model($class,[
    'action' => ['Backend\ClassroomController@update', $class->id],
    'method' => 'PATCH',
    'class' => 'form-horizontal ajax-form-post'
]) !!}

@include('backend.class.form')

<div class="box-footer text-right">
    <button type="submit" class="btn btn-warning">Update</button>
</div>




{!! Form::close() !!}

