@extends('layouts.mainLayout')
@section('title', 'Home')

@section('content')
    <h1>Student</h1>
    <h3>Student List</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Class ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->class_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection