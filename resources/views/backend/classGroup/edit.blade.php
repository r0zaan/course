{!! Form::model($classGroup,[
    'action' => ['Backend\ClassGroupController@update', $classGroup->id],
    'method' => 'PATCH',
    'class' => 'form-horizontal ajax-form-post'
]) !!}

@include('backend.classGroup.form')

<div class="box-footer text-right">
    <button type="submit" class="btn btn-warning">Update</button>
</div>




{!! Form::close() !!}

