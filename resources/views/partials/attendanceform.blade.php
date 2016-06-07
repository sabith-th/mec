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
<div class="form-group{{ $errors->has('attended') ? ' has-error' : '' }}">
  {!! Form::label('attended', 'Attended Classes:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::number('attended', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'attended'])
  </div>
</div>
<div class="form-group{{ $errors->has('absent') ? ' has-error' : '' }}">
  {!! Form::label('absent', 'Absent Classes:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::number('absent', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'absent'])
  </div>
</div>
<div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
  {!! Form::label('start_date', 'From:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::date('start_date', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'start_date'])
  </div>
</div>
<div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
  {!! Form::label('end_date', 'To:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::date('end_date', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'end_date'])
  </div>
</div>
<div class="form-group">
  <div class="col-md-offset-5 col-md-2">
    {!! Form::submit($submitBtnText, ['class'=>'btn btn-primary form-control']) !!}
  </div>
</div>
