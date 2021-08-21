@extends('user.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>My Courses</h3>
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

                </td>
            </tr>
        @endforeach
    </table>

    {!! $courses->links() !!}

@endsection
