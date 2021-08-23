@extends('teacher.layout')

@section('content')
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-6 p-2">
            <div class="bg-white shadow rounded border border-info p-3">
                <span class="h1 d-block text-info">
                    Total Courses
                </span>
                <span class="h3 d-block text-right">{{ $courses }}</span>
            </div>
        </div>
        {{-- <div class="col-4 p-2">
            <div class="bg-white shadow rounded border border-info p-3">
                <span class="h1 d-block text-info">
                    Enrolnments
                </span>
                <span class="h3 d-block text-right">{{ $totalEnrolments }}</span>
            </div>
        </div> --}}
        <div class="col-6 p-2">
            <div class="bg-white shadow rounded border border-info p-3">
                <span class="h1 d-block text-info">
                    Money Gain
                </span>
                <span class="h3 d-block text-right">{{ $totalGain }}$</span>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12 p-3 bg-white rounded border shadow">
            <h1 class="mb-3">Enrolled Courses by users:</h1>
            <table class="table table-bordered datatable">
                <tr>
                    <th>Course Name</th>
                    <th>Date</th>
                    <th>Price $</th>
                    <th>Detail</th>
                </tr>
                @foreach ($enrolnments as $enroled)
                    @if ($enroled->Course !== null)
                        <tr>
                            <td>{{ $enroled->Course->name }}</td>
                            <td>{{ $enroled->Course->date }}</td>
                            <td>{{ $enroled->Course->price }}</td>
                            <td>{{ $enroled->Course->detail }}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>



@endsection
