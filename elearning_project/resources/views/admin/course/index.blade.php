@extends('admin.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>All Courses</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.course.create') }}">Add Teacher</a>
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
                    <form action="{{ route('admin.course.destroy',$course->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('admin.course.show',$course->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('admin.course.edit',$course->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $courses->links() !!}

@endsection