@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Students | delete')

@section('content')

    <div class="mt-5">

        <h2>Are you sure to delete data : {{ $student->name }} - {{ $student->nis }}</h2>
        <br>
        <form method="post" style="display: inline-block" action="/student-destroy/{{ $student -> id }}">
            @csrf
            @method('delete')
            <button class="btn btn-danger" >DELETE</button>
        </form>

        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>

@endsection
