@extends('layouts.main')

@section('content')
<div class="container mt-5">

    <div class="row bg-white lengkung p-4">
        <div class="col-md-12">
            <h4><span class="text-danger"><b>*</b></span>Data Donasi </h4>
            <hr>
            <div class="d-grid">
                <a href="/post-donate" class="btn btn-primary btn-sm">Post Donasi</a>
            </div>
        </div>
    </div>

    @for ($i=0; $i < 10; $i++)
      <div class="row bg-white my-2 p-3 lengkung">
        <div class="col-md-2">
            <img src="/img/giving-1826706_1920.jpg" alt="" class="w-100 lengkung">
        </div>
        <div class="col-md-10">
            <h2>Judul Donasi</h2>

            <table class="w-100">
              <tr>
                <td>
                  Jenis deskripsi
                </td>
                <td class="text-end">
                  Pakaian
                </td>
              </tr>
              <tr>
                <td>
                  Status
                </td>
                <td class="text-end">
                  Tersedia
                </td>
              </tr>
            </table>


        </div>
      </div>
@endfor




</div>
@endsection
