{!! Form::open([
    'action' => 'Backend\UnitController@store',
    'method' => 'POST',
    'class' => 'form-horizontal ajax-form-post'
]) !!}

@include('backend.unit.form')

<div class="box-footer text-right">
    <button type="submit" class="btn btn-warning">Create</button>
</div>




{!! Form::close() !!}

