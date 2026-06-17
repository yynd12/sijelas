@extends('layouts.dashboard')

@section('menu')

<li>
    <a href="#">
        <i class="fa-solid fa-user"></i>
        Manajemen Pengguna
    </a>
</li>

@endsection

@section('content')

<div class="cards">

    <div class="card">

        <h3>TOTAL SISWA :</h3>

       <p>{{ $totalSiswa }}</p>

    </div>

    <div class="card">

        <h3>TOTAL WALI KELAS :</h3>

        <p>{{ $totalWaliKelas }}</p>

    </div>

</div>

@endsection