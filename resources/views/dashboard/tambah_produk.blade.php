@extends('dashboard.layouts.main')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Produk UMKM</h1>
    </div>

    <div class="container">

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
              <form action="/produk" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold ">Nama Produk</label>
                            <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" class="form-control @error('nama_produk') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold ">Harga Produk</label>
                            <input type="text" name="harga_produk" value="{{ old('harga_produk') }}" class="form-control @error('harga_produk') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"><b>Contoh value :</b> <font style="color: red">Rp 50.000,00</font> <b>atau</b>  <font style="color: red">Rp 9.000,00 - Rp 19.000,00</font></div>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label fw-bold ">Deskripsi Produk</label>
                          <textarea name="deskripsi_produk" id="" cols="30" rows="10" class="form-control @error('deskripsi_produk') is-invalid @enderror">{{ old('deskripsi_produk') }}</textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold ">Keterangan Produk</label>
                            <input type="text" name="keterangan_produk" value="{{ old('keterangan_produk') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"><b>Contoh value :</b> Tersedia ukuran 41 - 44</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold ">Link Pemesanan Produk</label>
                            <input type="text" name="instagram" value="{{ old('instagram') }}" placeholder="Instagram" class="form-control mb-2">
                            <input type="text" name="toko_online" value="{{ old('toko_online') }}" placeholder="Toko Online" class="form-control mb-2">
                            <input type="text" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="Whatsapp" class="form-control mb-2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold ">Asal Wilayah Produk</label>
                            <select name="id_kecamatan" id="" class="form-control">
                                <option value="">-- Pilih Kecamatan --</option>
                                @foreach ($kecamatans as $kecamatan)
                                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecematan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-bold ">Legalitas Produk</label>
                            <select name="legalitas" id="" class="form-control">
                                <option value="">-- Pilih Keterangan Legalitas --</option>
                                <option value="sudah">Sudah</option>
                                <option value="belum">Belum</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label fw-bold">Upload Foto</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Tambah Produk</button>
                        </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
    
  </main>
@endsection