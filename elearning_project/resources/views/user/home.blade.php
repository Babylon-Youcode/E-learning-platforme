@extends('user.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-4 p-2">
            <div class="bg-white shadow rounded border border-info p-3">
                <span class="h1 d-block text-info">
                    Cources
                </span>
                <span class="h3 d-block text-right">0</span>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-white shadow rounded border border-info p-3">
                <span class="h1 d-block text-info">
                    Enrolnments
                </span>
                <span class="h3 d-block text-right">0</span>
            </div>
        </div>
        <div class="col-4 p-2">
            <div class="bg-white shadow rounded border border-info p-3">
                <span class="h1 d-block text-info">
                    Money spent
                </span>
                <span class="h3 d-block text-right">0$</span>
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
                {{-- @foreach ($enrolenments as $enrole) --}}
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    {{-- <td>{{ $enrole->Course->name }}</td>
                        <td>{{ $enrole->Course->date }}</td>
                        <td>{{ $enrole->Course->price }}</td>
                        <td>{{ $enrole->Course->detail }}</td>
                        <td>
                            <a class="btn btn-danger"
                                href="{{ route('user.enrolenments.delete', $enrole->id) }}">Delete</a>
                        </td> --}}
                </tr>
                {{-- @endforeach --}}
            </table>
        </div>
    </div>



@endsection
