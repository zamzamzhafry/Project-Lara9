@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Class-detail')

@section('content')

    <h1>class detail dari {{ $classList->name }}</h1>
    {{-- {{ $classList->students }} --}}
    <p>guru pengampu</p>{{ $classList->homeroomTeacher->name }} <br>
    <p>daftar murid</p>

    @if ($classList->students)

        @foreach ($classList->students as $item)

        <ol>{{ $loop->iteration }} - {{ $item->name }}</ol>
        @endforeach
    @else
    <p>kelass kosong</p>
    @endif

    @endsection
