<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Produk UMKM Sumedang</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        @include('layouts.navbar')
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Detail Produk UMKM Sumedang</h1>
                    <p class="lead fw-normal text-white-50 mb-0">kenali produk-produk umkm yang ada disumedang</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-3">
                <div class="text-center">
                    <img src="{{ asset('assets/image/sepatu.jpg') }}" class="img-fluid border border-4 mb-3" width="50%" alt="">
                    <h1 class="fw-bold mb-3">{{ $produk->nama_produk }}</h1>
                    <p class="fw-normal mb-5">{{ $produk->deskripsi_produk }}</p>
                    <h5><b>Harga :</b> {{ $produk->harga_produk }}</h5>
                    <h5><b>Keterangan :</b> {{ $produk->keterangan_produk }}</h5>
                    <h3 class="fw-bold mt-5 mb-3">Pesan Sekarang</h3>
                    <div class="">
                        @if ($produk->instagram == null)
                            <a href="#!" class="text-decoration-none mx-2 disabled"><img src="{{ asset('assets/image/instagram.png') }}" width="50" alt=""></a>
                        @else
                            <a href="{{ $produk->instagram }}" class="text-decoration-none mx-2"><img src="{{ asset('assets/image/instagram.png') }}" width="50" alt=""></a>
                        @endif
                        
                        @if ($produk->toko_online == null)
                            <a href="#!" class="text-decoration-none mx-2 disabled"><img src="{{ asset('assets/image/tiktok.png') }}" width="50" alt=""></a>
                        @else
                            <a href="{{ $produk->toko_online }}" class="text-decoration-none mx-2"><img src="{{ asset('assets/image/tiktok.png') }}" width="50" alt=""></a>
                        @endif
                        
                        @if ($produk->whatsapp == null)
                            <a href="#!" class="text-decoration-none mx-2"><img src="{{ asset('assets/image/whatsapp.png') }}" width="50" alt=""></a>
                        @else
                            <a href="{{ $produk->whatsappp }}" class="text-decoration-none mx-2"><img src="{{ asset('assets/image/whatsapp.png') }}" width="50" alt=""></a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; USu 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
