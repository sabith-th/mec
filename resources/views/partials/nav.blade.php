@if(Auth::guest())

@else
  @if (Auth::user()->type=='Student')
    <ul class="nav navbar-nav">
        <li><a href="{{action('DetailsController@show',[Auth::user()->student()->id])}}">Details</a></li>
    </ul>
    <ul class="nav navbar-nav">
        <li><a href="{{action('StudentsController@edit',[Auth::user()->student()->id])}}">Update Profile</a></li>
    </ul>
  @elseif (Auth::user()->type=='Parent')
    <ul class="nav navbar-nav">
        <li><a href="{{action('DetailsController@show',[Auth::user()->student()->id])}}">Student Details</a></li>
    </ul>
  @elseif (Auth::user()->type=='Faculty')
    <ul class="nav navbar-nav">
      <li class="dropdown" role="presentation">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Add Attendances <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach (Auth::User()->faculty()->courses() as $course)
              <li><a href="{{action('AttendancesController@showStudents', [$course->course_id])}}">{{$course->course_name}}</a></li>
            @endforeach
          </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="dropdown" role="presentation">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Attendance History <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach (Auth::User()->faculty()->courses() as $course)
              <li><a href="{{action('AttendancesController@history', [$course->course_id])}}">{{$course->course_name}}</a></li>
            @endforeach
          </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="dropdown" role="presentation">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Enrolled Students <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach (Auth::User()->faculty()->courses() as $course)
              <li><a href="{{action('CoursesController@showStudents', [$course->course_id])}}">{{$course->course_name}}</a></li>
            @endforeach
          </ul>
      </li>
    </ul>
    @if (Auth::User()->faculty()->batch!=NULL)
      <ul class="nav navbar-nav">
          <li><a href="{{action('FacultiesController@showStudents',[Auth::user()->faculty()->faculty_id])}}">My Students</a></li>
      </ul>
    @endif
  @endif
@endif
