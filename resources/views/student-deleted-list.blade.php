<!-- untuk menyambungkan dengan HTML BODY JS -->
@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Students Deleted')

@section('content')
<h1>Deleted Student List</h1>

<div>
    <a href="students/">back</a>
</div>
<div class="mt-5">

    <table class="table ">
        <thead>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>NIS</th>
            <th>Action</th>
        </thead>
    <tbody>
        @foreach ($student as $data)
            <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data->name }} </td>
        <td>{{ $data->gender }}</td>
        <td>  {{ $data->nis }} </td>
        <td>
            <a href="/student/{{ $data->id }}/restore">Restore</a>
        </td>
    </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection
