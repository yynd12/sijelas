@extends('layout.app')

@section('title', 'Management Pengguna')

@section('content')

<div class="card">
  <h3>MANAGEMENT PENGGUNA</h3>

  <table>
    <tr>
      <th>ID</th>
      <th>NAMA</th>
      <th>NIP</th>
      <th>KELAS</th>
      <th>OPSI</th>
    </tr>

    <tr>
      <td>001</td>
      <td>HELIA</td>
      <td>123456789</td>
      <td>XI RPL B</td>
      <td class="aksi">
    <button class="btn btn-edit">Edit</button>
    <button class="btn btn-detail">Detail</button>
    <button class="btn btn-hapus">Hapus</button>
</td>
    </tr>

  </table>
</div>

@endsection