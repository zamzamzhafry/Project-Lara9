<!-- untuk menyambungkan dengan HTML BODY JS -->
@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Class')

@section('content')
    <h1>HALAMAN CLASS</h1>
    <h3>CLASS List</h3>
    <a href="/class-add" class="btn btn-primary">ADD DATA</a>
   <table class="table ">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nama Kelas</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classList as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <th>
                <a href="class-detail/{{ $data->id }}">Detail</a>
                <a href="class-edit/{{ $data->id }}">Edit</a>
            </th>



            {{-- <td>
                @foreach ($data->students as $student )
                - {{ $student['name']}} <br>

                @endforeach
            </td>
            <td>
                {{ $data->HomeroomTeacher->name }}
            </td> --}}
        </tr>
        @endforeach

    </tbody>
</table>


    {{-- <ol>
        @foreach ($studentList as $data )
        <li> {{ $data->name }}</li>

        @endforeach
    </ol> --}}
    {{-- <p>{{ $studentList }}</p> --}}
    {{-- <h2>{{ $studentList }}</h2> --}}
@endsection
