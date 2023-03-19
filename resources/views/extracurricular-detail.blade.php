@extends('layouts.mainlayout')
@section('title', 'Extracurricular-detail')

@section('content')
<h2>datail extra - {{ $ekskulList->name }}</h2>
<p> peserta ekskul</p>
@foreach ($ekskulList->students as $item)
    {{ $loop->iteration }}
    {{ $item->name }}<br>

@endforeach



@endsection
