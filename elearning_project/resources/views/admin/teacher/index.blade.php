@extends('admin.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>All Teachers</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.teacher.create') }}">Add Teachers</a>
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
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->password }}</td>
                <td>


                        <a class="btn btn-info" href="{{ route('admin.teacher.show',$teacher->id) }}">Show</a>


                        <a class="btn btn-primary" href="{{ route('admin.teacher.edit',$teacher->id) }}">Edit</a>

                        <a class="btn btn-danger" href="{{ route('admin.teacher.destroy',$teacher->id) }}">Delete</a>



                </td>
            </tr>
        @endforeach
    </table>

    {!! $teachers->links() !!}

@endsection