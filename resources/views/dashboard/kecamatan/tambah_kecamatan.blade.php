@extends('dashboard.layouts.main')

@section('content')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Wilayah Kecamatan</h1>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="/kecamatan" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label fw-bold fs-3">Nama Kecamatan</label>
                      <input type="text" name="nama_kecamatan" value="{{ old('kecamatan') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Masukan nama kecamatan di wilayah sumedang.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
  </main>
@endsection