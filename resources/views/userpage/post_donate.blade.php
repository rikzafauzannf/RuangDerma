@extends('layouts.main')

@section('content')
<div class="container mt-5 bg-white lengkung p-4">

    <div class="row">
        <div class="col-md-12">
            <h4><span class="text-danger"><b>*</b></span>Tambah Donasi</h4>
            <hr>
            <form>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="judul-input" placeholder="Judul Donasi">
                    <label for="judul-input">Judul Donasi</label>
                </div>

                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Jenis Donasi</option>
                    <option value="pakaian">Pakaian</option>
                    <option value="AlamatRumahTangga">Alat Rumah Tangga</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Lainnya">Lainnya</option>
                </select>


                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Deskripsi" id="deskripsi" style="height: 100px"></textarea>
                    <label for="deskripsi">Deskripsi</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Deskripsi" id="deskripsi" style="height: 100px"></textarea>
                    <label for="deskripsi">alamat lengkap</label>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Kondisi barang</option>
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>cara Pengambilan</option>
                            <option value="Bawa Sendiri">Bawa Sendiri</option>
                            <option value="Kerim dengan ekspedisi">Kerim dengan ekspedisi</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Barang Donasi</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <div class="d-grid mb-3">
                  <button type="submit" name="button" class="btn btn-primary"> Kirim</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
