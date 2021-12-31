@extends('dashboard.layouts.main')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard Admin USu</h1>
    </div>

    @php
        $total_produk = count($produk);
        $total_kecamatan = count($kecamatan);
        $total_sudah  = count($sudah_legalitas);
        $total_belum  = count($belum_legalitas);
    @endphp

    <div class="row">
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <img src="{{ asset('dashboard/image/delivery-box.png') }}" class="img-fluid" alt="">
              </div>
              <div class="col-md-6">
                <h5>Total Product</h5>
                <h3 class="fw-bold">{{ $total_produk }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <img src="{{ asset('dashboard/image/certificate.png') }}" class="img-fluid" alt="">
              </div>
              <div class="col-md-6">
                <h5>Produk Terlegalitas</h5>
                <h3 class="fw-bold">{{ $total_sudah }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <img src="{{ asset('dashboard/image/failed.png') }}" class="img-fluid" alt="">
              </div>
              <div class="col-md-6">
                <h5>Produk Belum Terlegalitas</h5>
                <h3 class="fw-bold">{{ $total_belum }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <img src="{{ asset('dashboard/image/map.png') }}" class="img-fluid" alt="">
              </div>
              <div class="col-md-6">
                <h5>Wilayah Tercangkup</h5>
                <h3 class="fw-bold">{{ $total_kecamatan }}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <h1 class="fw-bold mb-3">Pencetus USu</h1>
      <img src="assets/image/dj.jpg" width="200" class="rounded-circle img-thumbnail"  alt="">
      <h5 class="mt-3">Muhammad Dikjaya</h5>
      <p class="fw-light">Mahasiswa FTI UNSAP</p>
      <p class="fw-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur ad consequuntur quas. Quos doloremque tempora ipsum mollitia vel nulla voluptate nisi sed, aut officia nesciunt voluptas voluptates adipisci nam error provident magni deserunt rerum neque animi ex, facere numquam! A cupiditate quis facilis necessitatibus, illum repellendus veritatis! Dolores consequuntur aperiam repellat adipisci aut labore, dicta corrupti, tenetur nulla, iusto odio perspiciatis amet cum vitae facilis voluptate iste quaerat odit libero. Pariatur adipisci exercitationem rerum fugit in recusandae quibusdam saepe porro placeat, libero perspiciatis. Sint quo veniam vitae voluptate mollitia dolores sapiente, obcaecati ab enim ea cumque, praesentium nihil, delectus maiores.</p>
    </div>
  </main>
@endsection