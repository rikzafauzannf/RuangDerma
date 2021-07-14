@extends("layouts.main")

@section("content")
<div class="container">
    {{-- upper --}}
    <div class="row p-4 bg-white mt-5 lengkung">
        <div class="col-md-2">
            <img src="img/Logo-Ruangderma.png" alt="" class="w-100">
        </div>
        <div class="col-md-10">
            <h2>"Mari Donasikan Barang Yang Sudah Tidak Terpakai
                Menjadi Barang Yang Berguna"</h2>
            <hr>
            <div class="d-grid gap-1">
                <button type="button" name="button" class="btn btn-sm">Bergabung...</button>
            </div>
        </div>
    </div>

    {{-- tentang ruang derma --}}
    <div class="row p-4 bg-white mt-4 lengkung">
        <div class="col-md-12 mt-4">
            <h3>Tentang <b>RaungDerma</b></h3>
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
                    <div class="card text-center">
                        <div class="card-header p-4 shadow-sm">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <div class="card-body text-dark">
                            <small>Pakaian</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card text-center">
                        <div class="card-header p-4 shadow-sm">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="card-body text-dark">
                            <small>Makanan</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card text-center">
                        <div class="card-header p-4 shadow-sm">
                            <i class="fas fa-quran"></i>
                        </div>
                        <div class="card-body text-dark">
                            <small>AL-Quran</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card text-center">
                        <div class="card-header p-4 shadow-sm">
                            <i class="fas fa-mosque"></i>
                        </div>
                        <div class="card-body text-dark">
                            <small>Pembangunan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir dari barang yang bisa di donasikan --}}

    {{-- end container --}}
</div>

<div class="row bg-dark text-white p-5 mt-5">
    <div class="col-md-12">
        <footer>
            <div class="row">
                <div class="col-md-6">
                    <h4><i class="fas fa-hashtag"></i> Berbagi tidak akan membuat kamu miskin</h4>
                    <small>© Copyright 2021 CBC Team STMIK Tasikmalaya. All right reserved.</small>
                </div>
                <div class="col-md-6">
                    <p>Call Support</p>
                    <hr class="bg-white">
                    <p><i class="fas fa-envelope"></i> ruangderma
                        @gmail.com</p>
                        <p><i class="fab fa-instagram"></i> ruangderma.official</p>
                        <p><i class="fab fa-whatsapp"></i> +62 85695958647</p>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection
