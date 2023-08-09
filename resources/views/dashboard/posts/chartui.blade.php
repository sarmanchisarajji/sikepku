@extends('dashboard.layouts.main')
@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col">
      <div class="programming-stats">
        <h5 class="card-title">Diagram Kriteria Tata Pamong</h5>
        
        <div class="chart-container">
          <canvas class="my-chart"></canvas>
        </div>
        
        <div class="details">
          <ul></ul>
        </div>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop" name="btn-tambah">
          <i class="bi bi-pie-chart"></i>
          Export
        </button>
      </div>
    </div>
  </div>
</div>




<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col">
      <div class="programming-stats">
        <h5 class="card-title">Diagram Kriteria Penelitian</h5>
        
        <div class="chart-container">
          <canvas class="my-chart1"></canvas>
        </div>
        
        <div class="details">
          <ul class="ul2"></ul>
        </div>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop" name="btn-tambah">
          <i class="bi bi-pie-chart"></i>
          Export
        </button>
      </div>
    </div>
  </div>
</div>


@endsection


