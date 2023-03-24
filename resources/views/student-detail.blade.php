@extends('layouts.mainlayout')


@section('title', 'Students')

@section('content')

<div class="my-3 d-flex justify-content-center">
    @if($student->image != '')
        <img src="{{ asset('storage/photo/' .$student->image) }}" alt="" width="500px">
    @else
        <img src="{{ asset('images/pngwing.com.png') }}" alt="" width="500px">

    @endif


</div>
{{-- {{ asset('storage/' .$student->image) }} --}}

<div class="table">
    <table class="table">
        <thead>
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

</div>

<div>
    <h3>Extracurricular</h3>
    @foreach ($student->extracurriculars as $item)
    <ol>
        {{ $loop->iteration }}. {{ $item->name }}
    </ol>

    @endforeach
</div>

{{--
<h1>hal siswa</h1>
<p>deetail siswa</p>{{ $student->class }}
{{ $student->extracurriculars }} --}}
@endsection
