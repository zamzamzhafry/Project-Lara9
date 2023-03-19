<!-- untuk menyambungkan dengan HTML BODY JS -->
@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Extracurricular | ADD')

@section('content')

<div class="mt-4 col-5 m-auto">
    <form action="extracurricular" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
</div>

@endsection
