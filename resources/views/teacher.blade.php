<!-- untuk menyambungkan dengan HTML BODY JS -->
@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Teacher')

@section('content')
    <h1>HALAMAN Teacher</h1>
    <h3>Teacher List</h3>

    <a href="/teacher-add" class="btn btn-primary">ADD DATA</a>

   <table class="table ">
    <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Action</th>
        {{-- <th>Gender</th>
        <th>NIS</th>
        <th>Class</th>
        <th>Extracurricular</th> --}}
    </tr>
    @foreach ($teacherList as $data)
    <tr>
        <th>{{$loop->iteration}}</th>
        <th>  {{ $data->name }} </th>
        <td>
            <a href="/teacher-detail/{{ $data->id }}">Detail</a>
        </td>



        {{-- <th>  {{ $data->gender }} </th>
        <th>  {{ $data->nis }} </th>
        {{-- CARA 1 DI BLADE NYA --}}
        {{-- <th>  {{ $data->class['name'] }} </th> --}}
        {{-- <th>
            @foreach ($data->extracurriculars as $item)
            - {{ $item->name }} <br>
            @endforeach
        </th> --}}
    </tr>
    @endforeach
</table>


    {{-- <ol>
        @foreach ($studentList as $data )
        <li> {{ $data->name }}</li>

        @endforeach
    </ol> --}}
    {{-- <p>{{ $studentList }}</p> --}}
    {{-- <h2>{{ $studentList }}</h2> --}}
@endsection
