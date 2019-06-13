<div class="box-body">

    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Class Name:<span class=help-block" style="color:red;">*</span></label>
        <div class="col-sm-6">
            {{ Form::select('class_id',$classes,null,['class'=>'form-control','data-url'=> url('admin/videos/class'),'placeholder'=>'Select Class Name','id'=>'class']) }}
            <span class="error-message"></span>
        </div>

    </div>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Subject Name:<span class=help-block" style="color:red;">*</span></label>
        <div class="col-sm-6">
            {{ Form::select('subject_id',$subjects,null,['class'=>'form-control','data-url'=> url('admin/videos/subject'),'placeholder'=>'Select Subject Name','id'=>'subject']) }}
            <span class="error-message"></span>
        </div>

    </div>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Unit Name:<span class=help-block" style="color:red;">*</span></label>
        <div class="col-sm-6">
            {{ Form::select('unit_id',(!empty($storedUnits)) ? $storedUnits : [],null,['class'=>'form-control','placeholder'=>'Select Unit Name','id'=>'unit']) }}
            <span class="error-message"></span>
        </div>

    </div>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Video Title:<span class=help-block" style="color:red;">*</span></label>
        <div class="col-sm-6">
            {{ Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter Video Title']) }}
            <span class="error-message"></span>
        </div>

    </div>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Video Description:<span class=help-block" style="color:red;">*</span></label>
        <div class="col-sm-6">
            {{ Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Enter Video Description']) }}
            <span class="error-message"></span>
        </div>

    </div>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Video(File):<span class=help-block" style="color:red;">*</span></label>
        <div class="col-sm-6">
            {{ Form::file('video',['class'=>'form-control']) }}
            <span class="error-message"></span>
        </div>
    </div>
    <div class="progress">
        <div class="bar"></div >
        <div class="percent">0%</div >
    </div>
</div>

