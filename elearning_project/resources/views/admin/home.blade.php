@extends('admin.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-4 p-2">
            <div class="bg-white shadow rounded border border-info p-3">
                <span class="h1 d-block text-info">
                    Courses
                </span>
                <span class="h3 d-block text-right">{{ $courses }}</span>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-white shadow rounded border border-info p-3">
                <span class="h1 d-block text-info">
                    Teachers
                </span>
                <span class="h3 d-block text-right">{{ $teachers }}</span>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-white shadow rounded border border-info p-3">
                <span class="h1 d-block text-info">
                    Users
                </span>
                <span class="h3 d-block text-right">{{ $users }}</span>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12 p-3 bg-white rounded border shadow">
            <h1 class="mb-3">Enrolnments:</h1>
            <table class="table table-bordered datatable">
                <tr>
                    <th>Course Name</th>
                    <th>Date</th>
                    <th>Price $</th>
                    <th>Detail</th>
                </tr>
                @foreach ($enrolnments as $enrole)
                    <tr>
                        <td>{{ $enrole->Course->name }}</td>
                        <td>{{ $enrole->Course->date }}</td>
                        <td>{{ $enrole->Course->price }}</td>
                        <td>{{ $enrole->Course->detail }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>



@endsection
