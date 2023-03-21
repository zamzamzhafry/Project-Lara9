<!-- untuk menyambungkan dengan HTML BODY JS -->
@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Class | EDIT')

@section('content')

<div class="mt-4 col-5 m-auto">
    <form action="class/{{ $class->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div >
            <label for="teacher_id">Teacher</label>
            <select type="text" name="teacher_id" id="teacher_id" class="form-control" required>
                <option value="">Select One</option>
                @foreach ($teacher as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>



        <div class="mb-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
</div>


@endsection
