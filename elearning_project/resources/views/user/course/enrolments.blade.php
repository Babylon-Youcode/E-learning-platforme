@extends('user.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3 class="text-white">All Courses</h3>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="bg-white rounded border shadow p-3">
        <table class="table table-bordered datatable">
            <tr>
                <th>Course Name</th>
                <th>Date</th>
                <th>Price $</th>
                <th>Detail</th>
            </tr>
            @foreach ($enrolenments as $enrole)
                @if ($enrole->Course !== null)
                    <tr>
                        <td>{{ $enrole->Course->name }}</td>
                        <td>{{ $enrole->Course->date }}</td>
                        <td>{{ $enrole->Course->price }}</td>
                        <td>{{ $enrole->Course->detail }}</td>
                        <td>
                            <a class="btn btn-danger"
                                href="{{ route('user.enrolenments.delete', $enrole->id) }}">Delete</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
    {{-- {!! $courses->links() !!} --}}

@endsection
