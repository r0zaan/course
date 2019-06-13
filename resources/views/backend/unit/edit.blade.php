{!! Form::model($unit,[
    'action' => ['Backend\UnitController@update', $unit->id],
    'method' => 'PATCH',
    'class' => 'form-horizontal ajax-form-post'
]) !!}

@include('backend.unit.form')

<div class="box-footer text-right">
    <button type="submit" class="btn btn-warning">Update</button>
</div>




{!! Form::close() !!}

