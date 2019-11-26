@extends('layouts.dashboard.app')
@section('title','Setting')
@section('content')
<div class="content">
  {{-- header --}}
  <dash-head title="Settings"></dash-head>
  {{-- content --}}
  <div class="main">
    <div class="p-4">
      <span class="px-1 text-gray-600 text-sm"><i class="fas fa-info-circle"  data-toggle="tooltip" data-placement="bottom" title="By clicking this button you Erase All data from Site"></i></span>
      <button class="btn btn-danger">Reset Site</button>
    </div>
  </div>
</div>
@endsection