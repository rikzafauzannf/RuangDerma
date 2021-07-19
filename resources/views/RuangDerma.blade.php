@extends("layouts.main")

@section("content")
<div class="jumbotron-welcome mt-2 bg-white p-5">
    {{-- <div class="container"> --}}
    <div class="row py-5">

        <div class="col-md-4">
            <img src="/img/giftbox.svg" alt="gif" class=w-100>
        </div>
        <div class="col-md-8">
            <h2><b>"Mari Donasikan Barang Yang Sudah Tidak Terpakai
                    Menjadi Barang Yang Berguna"</b></h2>
            <hr>
            <div class="d-grid col-4 mx-auto">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-md btn-primary lengkung" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <span class="spinner-grow spinner-grow-sm text-star" role="status" aria-hidden="true"></span> mulai berbagi
                </button>
            </div>

        </div>
    </div>
    {{-- </div> --}}
</div>

<div class="container">
    {{-- upper --}}
    {{-- <div class="row p-4 bg-white mt-5 lengkung">
        <div class="col-md-2">
            <img src="img/Logo-Ruangderma.png" alt="" class="w-100">
        </div>
        <div class="col-md-10">
            <h2><b>"Mari Donasikan Barang Yang Sudah Tidak Terpakai
                    Menjadi Barang Yang Berguna"</b></h2>
            <hr>
            <div class="d-grid gap-1">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm hov" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Bergabung.
                </button>
            </div>
        </div>
    </div> --}}

    {{-- tentang ruang derma --}}
    <div class="row p-4 bg-white mt-4 lengkung">
        <div class="col-md-12 mt-4">
            <h3>Tentang <b>RuangDerma</b></h3>
            <hr>
            <p><b>Ruang Derma</b> Merupakan Sebuah Aplikasi Sosial Yang Menjadi Wadah Untuk Setiap Orang Yang
                Ingin Menyalurkan Barang Yang Sudah Tidak Terpakai Menjadi Barang Yang Bisa Berguna Bagi Orang
                Yang Membutuhkan Untuk Bisa Dimanfaatkan Kembali.</p>
        </div>
    </div>
    {{-- barng yang bisa di donasikan --}}
    <div class="row p-4 bg-white my-4 lengkung">
        <div class="col-md-12 mt-4">
            <h3>Barang yang bisa di bagikan.</h3>

            <div class="row mt-4 text-white fs-1">
                <div class="col-md-3 my-2">
                    <div class="card text-center lengkung">
                        <div class="card-header p-4 shadow-sm welcomecollor">
                            <i class="fas fa-tshirt"></i> | <i class="fas fa-table"></i>
                        </div>
                        <div class="card-body text-dark">
                            <small>Barang</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card text-center lengkung">
                        <div class="card-header p-4 shadow-sm welcomecollor">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="card-body text-dark">
                            <small>Makanan</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card text-center lengkung">
                        <div class="card-header p-4 shadow-sm welcomecollor">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="card-body text-dark">
                            <small>Buku</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card text-center lengkung">
                        <div class="card-header p-4 shadow-sm welcomecollor">
                            <i class="fas fa-at"></i>
                        </div>
                        <div class="card-body text-dark">
                            <small>Lainnya</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir dari barang yang bisa di donasikan --}}
</div>
{{-- end container --}}

{{-- modal --}}
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">RuangDerma | Bergabung.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
