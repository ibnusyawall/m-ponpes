@extends('layouts.master')
@section('content')
<div class="col-lg-4">
  <div class="card card-chart">
    <div class="card-header">
      <h5 class="card-category">Santri</h5>
      <h4 class="card-title">{{ $cs }} santri</h4>
      <div class="dropdown">
        <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
          <i class="now-ui-icons loader_gear"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="{{ url('/santri') }}">Daftar Santri</a>
          <a class="dropdown-item" href="{{ url('/santri/#tambah') }}">Tambah Santri</a>
        </div>
      </div>
    </div>
    <div class="card-body">

    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="now-ui-icons loader_refresh spin"></i> Just Updated
      </div>
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-6">
  <div class="card card-chart">
    <div class="card-header">
      <h5 class="card-category">Pengajar</h5>
      <h4 class="card-title">{{ $cp }} pengajar</h4>
      <div class="dropdown">
        <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
          <i class="now-ui-icons loader_gear"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="{{ url('/pengajar') }}">Pengajar</a>
          <a class="dropdown-item" href="{{ url('/pengajar/#tambah') }}">Tambah Pengajar</a>
        </div>
      </div>
    </div>
    <div class="card-body">

    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="now-ui-icons loader_refresh spin"></i> Just Updated
      </div>
    </div>
  </div>
</div>
<div class="col-lg-4 col-md-6">
  <div class="card card-chart">
    <div class="card-header">
      <h5 class="card-category">User</h5>
      <h4 class="card-title">1 User</h4>
    </div>
    <div class="card-body">
      
  </div>
  <div class="card-footer">
    <div class="stats">
      <i class="now-ui-icons ui-2_time-alarm"></i> Just Updated
    </div>
  </div>
</div>
</div>

@endsection