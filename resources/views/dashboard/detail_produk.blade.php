@extends('dashboard.layouts.main')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Produk UMKM</h1>
        </div>

        <div class="container px-4 px-lg-5 mt-3 mb-5">
            <div class="text-center">
                <img src="https://source.unsplash.com/359x239/?Product" class="img-fluid border border-4 mb-3" width="50%" alt="">
                <h1 class="fw-bold mb-3">{{ $produks->nama_produk }}</h1>
                <p class="fw-normal mb-5">{{ $produks->deskripsi_produk }}</p>
                <h5><b>Harga :</b> {{ $produks->harga_produk }}</h5>
                <h5><b>Keterangan :</b> {{ $produks->keterangan_produk }}</h5>
                <h5><b>Wilayah :</b> {{ $produks->kecamatan->nama_kecematan }}</h5>
            </div>
        </div>

    </main>
@endsection