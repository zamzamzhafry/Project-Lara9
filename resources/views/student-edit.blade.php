@extends('layouts.mainlayout')
<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Students | ADD')

@section('content')

<h2>Edit Data Siswa</h2>

    <div class="mt-4 col-5 m-auto">
        <form action="/student/{{ $student->id }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $student->name }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="NIS">NIS</label>
                <input type="text" id="nis" name="nis" class="form-control" value="{{ $student->nis }}" required>
            </div>

            <div class="mb-3">
                <label for="gender">Gender</label>
                <select type="text" name="gender" id="gender" class="form-control" required>
                    <option value="{{ $student->gender }}">
                        @if ($student->gender == 'L')
                        Laki-Laki
                        @else
                        Perempuan
                        @endif
                    </option>

                    @if ($student->gender == 'L')
                        <option value="P">Perempuan</option>
                    @else
                        <option value="L">Laki-Laki</option>
                    @endif
                </select>
            </div>
            <div class="mb-5" >
                <label for="class_id">Class</label>
                <select type="text" name="class_id" id="class" class="form-control" required>
                    <option value="{{ $student->class->id }}">{{ $student->class->name }}</option>
                    @foreach ($class as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                    {{-- @foreach ($class as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>

                    @endforeach --}}

                </select>
            </div>


            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>


        </form>
    </div>

@endsection

