@extends('layouts.mainlayout')
@section('title', 'Extracurricular')

@section('content')
<h1>Ini Extracurricular</h1>
<h3>Extra curricular list</h3>
<a href="/extracurricular-add" class="btn btn-primary">ADD DATA</a>

<table class="table">
    <thead>
        <th>Nomor</th>
        <th>Name</th>
        <th>Action</th>
        {{-- <th>Anggota</th> --}}
    </thead>
    <tbody>
        @foreach ($ekskulList as $data )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->name }}</td>
            <td>

                <a href="extracurricular-detail/{{ $data->id }}">Detail</a>
            </td>



            {{-- <td>

                @foreach ($data->students as $item)
                - {{ $item->name }} <br>

                @endforeach
            </td> --}}
        </tr>

        @endforeach

    </tbody>
</table>

@endsection
