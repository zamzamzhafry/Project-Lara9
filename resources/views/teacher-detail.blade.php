@extends('layouts.mainlayout')
@section('title', 'Teacher-detail')

@section('content')
<h2>datail extra - {{ $teacher->name }}</h2>
<h3>Wali Kelas :
    @if ($teacher->class)
    {{ $teacher->class->name }}

    @else
    -

    @endif
</h3>
<div class="mt5">
    <h4>List Student</h4>
    @if ($teacher->class)
    <ol>
        @foreach ($teacher->class->students as $item)
        <li>{{ $item->name }}</li>

        @endforeach
    </ol>
    @else
    <p>siswa nihil</p>

    @endif

</div>





@endsection
