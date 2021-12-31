@extends('dashboard.layouts.main')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Daftar Wilayah yang Terdata USu</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="container col-md-6">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
            <a href="/kecamatan/create" class="text-decoration-none"><button class="btn btn-primary text-white btn-sm mx-auto"><i class="bi bi-plus"></i> Tambah Kecamatan</button></a>
        </div>
        <table class="table table-striped text-center">
            <thead>
              <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Nama Kecamatan</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($kecamatan as $wilayah)

              @php
                  $jumlah_kecamatan = count($kecamatan);
              @endphp
              
              @if ($jumlah_kecamatan == 0)
              <tr>
                <td scope="row" colspan="2" class="text-center">Belum ada data kecamatan</td>
              </tr> 
              @else
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $wilayah->nama_kecematan }}</td>
              </tr>
              @endif

              @endforeach
            </tbody>
        </table>
    </div>
    
  </main>
@endsection