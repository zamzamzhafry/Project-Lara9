@extends('layouts.mainlayout')
<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Students | ADD')

@section('content')
    <div class="mt-4 col-5 m-auto">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="students" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="NIS">NIS</label>
                <input type="text" id="nis" name="nis" class="form-control">
            </div>

            <div class="mb-3">
                <label for="gender">Gender</label>
                <select type="text" name="gender" id="gender" class="form-control">
                    <option value="">Select One</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="class_id">Class</label>
                <select type="text" name="class_id" id="class" class="form-control">
                    <option value="">Select One</option>
                    @foreach ($class as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>

                    @endforeach
                    {{-- <option value="99">tesvalue</option> --}}

                </select>
            </div>



            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>


        </form>
    </div>

@endsection
