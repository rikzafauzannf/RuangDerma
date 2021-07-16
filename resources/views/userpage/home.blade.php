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
  <div class="row p-4 bg-white mt-5 lengkung">
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
  </div>
  {{-- akhir cari --}}

  {{-- card --}}
  <div class="row mt-4">

    @for ($i=0; $i < 10; $i++)

      <div class="col-md-3">
        <div class="card my-3 lengkung">
          <div class="card-header  p-0">
            <img src="img/giving-1826706_1920.jpg" alt="" class="w-100 ">
          </div>
          <div class="card-body">

          </div>
        </div>
      </div>


    @endfor

  </div>


</div>
{{-- akhir container --}}

@endsection
