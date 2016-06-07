@extends('layouts.app')

@section('content')
<h2>Enroll students for {{ $course_id }}</h2>



{!! Form::open(['method' => 'POST', 'url' => 'enrollments/insert']) !!}
{!! Form::hidden('course_id', $course_id, ['class'=>'form-control']) !!}
<div class="form-group">
  {!! Form::label('status', 'Status:', ['class'=>'col-md-1 control-label']) !!}
  <div class="col-md-5">
    {!! Form::select('status', $status, ['class'=>'form-control']) !!}
  </div>
</div>
  <table class="table table-bordered" id="formTable">
    <th>Roll No</th>
    <th>Grade</th>
    <th>Type</th>
    <th>Supplementary</th>
    <tr>
      <td class="form-group">
          {!! Form::text('roll_no[]', null, ['class'=>'form-control','required']) !!}
      </td>
      <td class="form-group">
          {!! Form::select('grade[]', $grades, ['class'=>'form-control']) !!}
      </td>
      <td class="form-group">
          {!! Form::select('type[]', $types, ['class'=>'form-control']) !!}
      </td>
      <td class="form-group">
          {!! Form::select('supplementary[]', $supplementary, ['class'=>'form-control']) !!}
      </td>
    </tr>
  </table>
  <div class="row">
    <div class="form-group">
      <div class="col-md-2">
        <input type="button" value="Add Row" onClick="addRow('formTable')" class="btn btn-primary"/>
      </div>
      <div class="col-md-2">
        {!! Form::submit('Submit', ['class'=>'btn btn-primary form-control']) !!}
      </div>
      <div class=" col-md-2">
        <input type="button" value="Delete Row" onClick="deleteRow('formTable')" class="btn btn-primary" />
      </div>
    </div>
  </div>
{!! Form::close() !!}
@endsection
@section('footer')
  <script language="javascript">
        function addRow(tableID) {
            try {
              var table = document.getElementById(tableID);
              var rowCount = table.rows.length;
              var row = table.insertRow(rowCount);
    	        var colCount = table.rows[0].cells.length;
          		for(var i=0; i <colCount; i++) {
          			var newcell = row.insertCell(i);
          			newcell.innerHTML = table.rows[1].cells[i].innerHTML;
          		}
            }
            catch(e) {
              alert(e);
            }
        }

        function deleteRow(tableID) {
            try {
              var table = document.getElementById(tableID);
            	var rowCount = table.rows.length;
              if(rowCount <= 2){
                alert("Cannot remove all the rows!");
              }
              else{
                table.deleteRow(rowCount-1);
              }
            }
            catch(e) {
                alert(e);
            }
        }

    </script>
@endsection
