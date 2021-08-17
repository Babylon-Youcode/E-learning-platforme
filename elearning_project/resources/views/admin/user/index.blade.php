@extends('admin.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>All Users</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.user.create') }}">Add Users</a>
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
            <th>role</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->role }}</td>
                <td>


                        <a class="btn btn-info" href="{{ route('admin.user.show',$user->id) }}">Show</a>


                        <a class="btn btn-primary" href="{{ route('admin.user.edit',$user->id) }}">Edit</a>

                        <a class="btn btn-danger" href="{{ route('admin.user.destroy',$user->id) }}">Delete</a>



                </td>
            </tr>
        @endforeach
    </table>

    {!! $users->links() !!}

@endsection