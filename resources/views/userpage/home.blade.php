@extends('layouts.main')

@section('content')

  {{-- container --}}
<div class="container">
  {{-- upper --}}
  <div class="row p-4 bg-white mt-5 lengkung">
    <div class="col-md-2">
      <img src="img/Logo-Ruangderma.png" alt="" class="w-100">
    </div>
    <div class="col-md-10">
      <h4><b>Berbagi kebahagiaan dengan orang yang lebih membutuhkan</b></h4>
      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe sed cum magnam magni minus, hic totam animi voluptatum esse. Totam consequuntur, assumenda delectus repudiandae expedita cupiditate qui dolor, illo aut inventore quis. Delectus sunt esse aliquam nihil ea dolorum architecto dolor est. Voluptates ex, quasi, odio tempora cum corporis maxime.</small>
    </div>
  </div>
  {{-- akhir upper --}}

  {{-- cari --}}
  <div class="row p-4 bg-white mt-4 lengkung">
    <div class="col-md-6">
      <h5><b>Donasi Barang</b></h5>
      <hr>
    </div>
    <div class="col-md-6">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>

  {{-- akhir cari --}}

  {{-- card --}}
  <div class="row mt-3">

    @for ($i=0; $i < 12; $i++)

      <div class="col-md-4">
        <div class="card my-3">
          <div class="card-header  p-0">
            <img src="img/giving-1826706_1920.jpg" alt="" class="w-100 ">
          </div>
          <div class="card-body">

            <table class="w-100 text-sm">
              <tr>
                <td><small>Provinsi</small></td>
                <td class="text-end"><small>Jawabarat</small></td>
              </tr>
              <tr>
                <td><small>Kota</small></td>
                <td class="text-end"><small>Tasikmalaya</small></td>
              </tr>
            </table>
            <small>nama donatur</small>
            <hr>
            <div class="d-grid gap-1">
                <button type="button" class="btn btn-sm btn-success">
                    detail
                </button>
            </div>
          </div>
        </div>
      </div>

    @endfor

  </div>
</div>

</div>
{{-- akhir container --}}

@endsection
