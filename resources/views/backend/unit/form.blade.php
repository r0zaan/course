<div class="box-body">
    <div class="form-group">
        <label for="status" class="col-sm-4 control-label">Class:</label>
        <div class="col-sm-6">
            {{ Form::select('class_id', $classes,null,['class'=>'form-control','placeholder'=>'Select Any Class']) }}
            <span class="error-message"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="status" class="col-sm-4 control-label">Subject:</label>
        <div class="col-sm-6">
            {{ Form::select('subject_id', $subjects,null,['class'=>'form-control','placeholder'=>'Select Any Subject']) }}
            <span class="error-message"></span>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Unit Name:<span class=help-block" style="color:red;">*</span></label>
        <div class="col-sm-6">
            {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Unit Name']) }}
            <span class="error-message"></span>
        </div>

    </div>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Unit Description</label>
        <div class="col-sm-6">
            {{ Form::text('description',null,['class'=>'form-control','placeholder'=>'Enter Unit Description']) }}
        </div>

    </div>
</div>