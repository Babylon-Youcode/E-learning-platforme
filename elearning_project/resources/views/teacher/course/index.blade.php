@extends('teacher.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>All Courses</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('teacher.course.create') }}">Add Courses</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered datatable">
        <tr>
            <th>Course Name</th>
            <th>Date</th>
            <th>Price $</th>
            <th>Detail</th>
            <th>Teacher</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->date }}</td>
                <td>{{ $course->price }}</td>
                <td>{{ $course->detail }}</td>
                <td>{{ $course->User->name }}</td>
                <td>


                        <a class="btn btn-info" href="{{ route('teacher.course.show',$course->id) }}">Show</a>


                        <a class="btn btn-primary" href="{{ route('teacher.course.edit',$course->id ) }}">Edit</a>

                        <a class="btn btn-danger" href="{{ route('teacher.course.destroy',$course->id) }}">Delete</a>



                </td>
            </tr>
        @endforeach
    </table>

    {!! $courses->links() !!}

@endsection