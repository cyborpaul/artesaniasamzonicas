@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Artesanías Amazónicas')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center">{{ __('Bienvenido a artesanías amazónicas') }}</h1>
      </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col col-12 bg-success mt-3">
    <div class="row">
      <h3>Artesanías amazónicas - Galeria</h3>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img src="{{asset('material/img/examples/paseos_set09-065.jpg')}}" class="rounded" alt="...">
    </div>
    <div class="col">
      <img src="{{asset('material/img/examples/paseos_set09-065.jpg')}}" class="rounded" alt="...">
    </div>
    <div class="col">
      <img src="{{asset('material/img/examples/paseos_set09-065.jpg')}}" class="rounded" alt="...">
    </div>
  </div>
  
  <br>
  <div class="col col-12 bg-success">
    <div class="row bg-success">
      <h3>Artesanías amazónicas - Galeria</h3>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img src="{{asset('material/img/examples/paseos_set09-065.jpg')}}" class="rounded" alt="...">
    </div>
    <div class="col">
      <img src="{{asset('material/img/examples/paseos_set09-065.jpg')}}" class="rounded" alt="...">
    </div>
    <div class="col">
      <img src="{{asset('material/img/examples/paseos_set09-065.jpg')}}" class="rounded" alt="...">
    </div>
  </div>
  
  <br>
  <div class="col col-12 bg-success">
    <div class="row bg-success">
      <h3>Artesanías amazónicas - Galeria</h3>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img src="{{asset('material/img/examples/paseos_set09-065.jpg')}}" class="rounded" alt="...">
    </div>
    <div class="col">
      <img src="{{asset('material/img/examples/paseos_set09-065.jpg')}}" class="rounded" alt="...">
    </div>
    <div class="col">
      <img src="{{asset('material/img/examples/paseos_set09-065.jpg')}}" class="rounded" alt="...">
    </div>
  </div>
</div>
@endsection

