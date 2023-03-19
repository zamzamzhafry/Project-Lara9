<!-- untuk menyambungkan dengan HTML BODY JS -->
@extends('layouts.mainlayout')

<!-- UNTUK TITLE JUDUL PAGE -->
@section('title', 'Home')

@section('content')


<h1>HALAMAN HOME</h1>
<h2> selamat datang, {{ $name }}. Anda adalah {{ $role }}</h2>
<br>

{{-- <table class="table ">
    <tr>
        <th>Nomor</th>
        <th>Nama</th>
    </tr>
    @foreach ($buah as $data)
    <tr>
        <th>{{$loop->iteration}}</th>
        <th>  {{ $data }} </th>
    </tr>
    @endforeach
</table> --}}

<br>
<button type="button" class="btn btn-primary">Primary</button>
<br>
<!-- elsif -->
@if ($role == 'admin')
<a href="#">Ke Halaman Admin</a>
@elseif($role == 'staff')
    <a href="#">Ke Halaman Staff</a>
@else
    <a href="#">Ke halaman Whaetfer</a>
@endif
<br>
@endsection

<!-- @for ($i = 0; $i < 10; $i++)
    {{ $i }} <br>
@endfor -->

