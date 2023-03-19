@extends('layouts.mainlayout')


@section('title', 'Students')

@section('content')

<table class="table">
    <thead>detail siswa
        <th>nama</th>
        <th>NIS</th>
        <th>Kelas</th>
        <th>Guru Wali</th>
    </thead>
    <tbody>
        <th>{{ $student->name }}</th>
        <th>{{ $student->nis }}</th>
        <th>{{ $student->class->name }}</th>
        <th>{{ $student->class->HomeroomTeacher->name }}</th>
    </tbody>
</table>

<h3>Extracurricular</h3>
@foreach ($student->extracurriculars as $item)
<ol>
    {{ $loop->iteration }}. {{ $item->name }}
</ol>

@endforeach
{{--
<h1>hal siswa</h1>
<p>deetail siswa</p>{{ $student->class }}
{{ $student->extracurriculars }} --}}
@endsection
