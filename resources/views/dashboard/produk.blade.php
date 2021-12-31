@extends('dashboard.layouts.main')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Daftar Produk UMKM yang Terdaftar di USu</h1>
    </div>
    
    <div class="container">

      @if (session()->has('success-edit'))
          <div class="alert alert-success" role="alert">
              {{ session('success-edit') }}
          </div>
      @endif

      @if (session()->has('destroy'))
          <div class="alert alert-danger" role="alert">
              {{ session('destroy') }}
          </div>
      @endif

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
            <a href="/produk/create" class="text-decoration-none"><button class="btn btn-primary text-white btn-sm mx-auto"><i class="bi bi-plus"></i> Tambah Produk</button></a>
        </div>
        <table class="table table-striped text-center">
            <thead>
              <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Asal Wilayah</th>
                <th scope="col">Alat</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($produks as $produk)
                    <tr>
                        <td scope="col">{{ $loop->iteration }}</td>
                        <td>{{ $produk->nama_produk }}</td>
                        <td><span class="badge rounded-pill bg-success">{{ $produk->kecamatan->nama_kecematan }}</span></td>
                        <td>
                          <a href="/produk/{{ $produk->id }}" class="btn btn-info text-white" title="Lihat Detail"><i class="bi bi-search"></i></a>
                          <a href="/produk/{{ $produk->id }}/edit" class="btn btn-warning text-white" title="Edit Data"><i class="bi bi-pencil-square"></i></a>
                          <form action="/produk/{{ $produk->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger text-white" title="Hapus Data" onclick="return confirm('Data ini akan dihapus! Anda yakin untuk menghapus data ini?')"><i class="bi bi-trash"></i></button>
                          </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    
  </main>
@endsection