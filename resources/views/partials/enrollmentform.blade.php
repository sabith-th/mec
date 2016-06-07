<div class="form-group{{ $errors->has('roll_no') ? ' has-error' : '' }}">
  {!! Form::label('roll_no', 'Roll No:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('roll_no', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'roll_no'])
  </div>
</div>
<div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
  {!! Form::label('course_id', 'Course code:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('course_id', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'course_id'])
  </div>
</div>
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
  {!! Form::label('status', 'Status:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('status', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'status'])
  </div>
</div>
<div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
  {!! Form::label('grade', 'Grade:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('grade', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'grade'])
  </div>
</div>
<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
  {!! Form::label('type', 'Type:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('type', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'type'])
  </div>
</div>
<div class="form-group">
  <div class="col-md-offset-5 col-md-2">
    {!! Form::submit($submitBtnText, ['class'=>'btn btn-primary form-control']) !!}
  </div>
</div>
