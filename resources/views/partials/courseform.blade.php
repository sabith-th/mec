<div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
  {!! Form::label('course_id', 'Code:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('course_id', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'course_id'])
  </div>
</div>
<div class="form-group{{ $errors->has('course_name') ? ' has-error' : '' }}">
  {!! Form::label('course_name', 'Course:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('course_name', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'course_name'])
  </div>
</div>
<div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
  {!! Form::label('semester', 'Semester:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('semester', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'semester'])
  </div>
</div>
<div class="form-group{{ $errors->has('credits') ? ' has-error' : '' }}">
  {!! Form::label('credits', 'Credits:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::number('credits', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'credits'])
  </div>
</div>
<div class="form-group{{ $errors->has('faculty') ? ' has-error' : '' }}">
  {!! Form::label('faculty', 'Faculty:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('faculty', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'faculty'])
  </div>
</div>
<div class="form-group">
  <div class="col-md-offset-5 col-md-2">
    {!! Form::submit($submitBtnText, ['class'=>'btn btn-primary form-control']) !!}
  </div>
</div>
