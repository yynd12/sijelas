@extends('layouts.dashboard')

@section('menu')

<li>
    <a href="#">
        <i class="fa-solid fa-bullhorn"></i>
        Pengumuman
    </a>
</li>

<li>
    <a href="#">
        <i class="fa-solid fa-book"></i>
        Tugas
    </a>
</li>

<li>
    <a href="#">
        <i class="fa-solid fa-money-bill"></i>
        Data Kas
    </a>
</li>

<li>
    <a href="#">
        <i class="fa-solid fa-calendar"></i>
        Jadwal Piket
    </a>
</li>

<li>
    <a href="#">
        <i class="fa-solid fa-clipboard"></i>
        Laporan Piket
    </a>
</li>

<li>
    <a href="#">
        <i class="fa-solid fa-book-quran"></i>
        Laporan Tadarus
    </a>
</li>

@endsection

@section('content')

<div class="cards">

    <div class="card">

        <h3>TOTAL PENGUMUMAN :</h3>

        <p>2</p>

    </div>

    <div class="card">

        <h3>TOTAL TUGAS :</h3>

        <p>1</p>

    </div>

    <div class="card besar">

        <h3>DATA PEMBAYARAN KAS :</h3>

    </div>

    <div class="card besar">

        <h3>CATATAN TERAKHIR TADARUS :</h3>

        <p class="ayat">
            Q.S Al-Baqarah ayat 255
        </p>

    </div>

</div>

@endsection