@extends('layouts.main')

@section('content')
{{-- container --}}
<div class="container">

    <div class="row bg-white p-4 mt-5 lengkung">
        <div class="col-md-12">
            <h4><span class="text-danger"><b>*</b></span>Details</h4>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/giving-1826706_1920.jpg" alt="" class="w-100 lengkung">


                </div>
                <div class="col-md-8">
                    <h2>Judul Donasi</h2>
                    <small>- nama donatur</small>
                    <hr class="w-50">
                    <table class="w-100 my-2">
                        <tr>
                            <td>Kondisi</td>
                            <td class="text-end">Baru</td>
                        </tr>
                        <tr>
                            <td>status</td>
                            <td class="text-end">Tersedia</td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td class="text-end">JawaBarat</td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td class="text-end">Tasikmalaya</td>
                        </tr>
                        <tr>
                            <td>alamat Lengkap</td>
                            <td class="text-end">JL.A.H.Nasution Mangkubumi</td>
                        </tr>
                    </table>
                    <hr>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <hr>


                    <div class="d-grid gap-2">
                        <a href="/home" class="btn btn-sm btn-primary">Minat</a>
                        <a href="/home" class="btn btn-sm btn-danger">Kembali</a>
                    </div> --}}
                </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <small>Deskripsi</small>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <hr>

                <div class="d-grid gap-2">
                    <a href="/home" class="btn btn-sm btn-primary">Minat</a>
                    <a href="/home" class="btn btn-sm btn-danger">Kembali</a>
                </div>

              </div>
            </div>

        </div>
    </div>


</div>
{{-- akhir container --}}
@endsection
