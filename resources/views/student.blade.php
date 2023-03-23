<!-- untuk menyambungkan dengan HTML BODY JS -->
@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Students')

@section('content')


    <h1>HALAMAN STUDENT</h1>
    <h3>Student List</h3>

    @if (Session::has('status') )
    <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
    </div>
    @endif

        <a href="/student-add" class="btn btn-primary">ADD DATA</a>

   <table class="table ">
    <thead>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>NIS</th>
        <th>Action</th>
    </thead>
    <tbody>

            @foreach ($studentList as $data)
            <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data->name }} </td>
        <td>{{ $data->gender }}</td>
        <td>  {{ $data->nis }} </td>
        <td>
            <a href="students/{{ $data->id }}">Detail</a>
            <a href="student-edit/{{ $data->id }}">Edit</a>
            <a href="student-delete/{{ $data->id }}">Delete</a>
        </td>
    </tr>
        @endforeach
    </tbody>

@endsection
