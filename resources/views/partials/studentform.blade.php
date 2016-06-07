<div class="form-group{{ $errors->has('roll_no') ? ' has-error' : '' }}">
  {!! Form::label('roll_no', 'Roll No:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('roll_no', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'roll_no'])
  </div>
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  {!! Form::label('name', 'Name:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'name'])
  </div>
</div>
<div class="form-group{{ $errors->has('stream') ? ' has-error' : '' }}">
  {!! Form::label('stream', 'Stream:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::text('stream', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'stream'])
  </div>
</div>
<div class="form-group{{ $errors->has('admission_year') ? ' has-error' : '' }}">
  {!! Form::label('admission_year', 'Admission Year:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::number('admission_year', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'admission_year'])
  </div>
</div>
<div class="form-group{{ $errors->has('photo_url') ? ' has-error' : '' }}">
  {!! Form::label('photo_url', 'Upload photo:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::file('photo_url', null, ['class'=>'form-control']) !!}
    @include ('errors.fielderrors', ['field'=>'photo_url'])
  </div>
</div>
<div class="form-group">
  {!! Form::label('address', 'Address:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-11">
    {!! Form::textarea('address', null, ['class'=>'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-md-offset-5 col-md-2">
    {!! Form::submit($submitBtnText, ['class'=>'btn btn-primary form-control']) !!}
  </div>
</div>
