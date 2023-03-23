<!-- untuk menyambungkan dengan HTML BODY JS -->
@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Students')

@section('content')

    <div>
        <h1>HALAMAN STUDENT</h1>
        <h3>Student List</h3>

    </div>

    <div class="my-5 d-flex justify-content">
        <a href="/student-add" class="btn btn-primary">ADD DATA</a>
        <a href="/student-deleted" class="btn btn-info">Show Deleted Data</a>
    </div>

    <div class="my-3 col-12 col-sm-8 col-md-5">
            <form class="form-inline">
              <div class="input-group mb-3">
                  <input type="text" class="form-control" name="keyword" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  <button class="input-group-text btn btn-info">Name</button>
              </div>
            </form>
    </div>

    @if (Session::has('status') )
    <div class="alert alert-primary" role="alert">
        {{ Session::get('message') }}
    </div>

    @endif

    <div>
        <table class="table ">
            <thead>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Class</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($studentList as $data)
            <tr>
                <td>{{$loop->iteration}}    </td>
                <td>{{ $data->name }}       </td>
                <td>{{ $data->gender }}     </td>
                <td>{{ $data->nis }}        </td>
                <td>{{ $data->class->name }}</td>
                <td>
                    <a href="students/{{ $data->id }}">Detail</a>
                    <a href="student-edit/{{ $data->id }}">Edit</a>
                    <a href="student-delete/{{ $data->id }}">Delete</a>
                </td>
            </tr>
                @endforeach
            </tbody>
    </div>

    <div class="">
        {{ $studentList->withQueryString()->links() }}
    </div>

@endsection
