<div class="box-body">

    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">Subject Name:<span class=help-block" style="color:red;">*</span></label>
        <div class="col-sm-6">
            {{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Class Name']) }}
            <span class="error-message"></span>
        </div>

    </div>
    @if(Request::segment(4)== 'edit')
        <div class="form-group">
            <label for="status" class="col-sm-4 control-label">Status:<span class=help-block" style="color:red;">*</span></label>
            <div class="col-sm-6">
                {{ Form::select('status', ['Active' => 'Active','Inactive' => 'Inactive'],null,[ 'required','class'=>'form-control']) }}
                <span class="error-message"></span>
            </div>
        </div>
    @endif
</div>