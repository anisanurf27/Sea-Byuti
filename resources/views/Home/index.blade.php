@extends('layouts.app') @section('title', $viewData['title']) @section('content')
<div class="row">
    <div class="col-md-5 col-lg-3 mb-2">
        <img src="{{ asset('/storage/FW.jpg') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-5 col-lg-3 mb-2">
        <img src="{{ asset('/storage/Micelar.jpeg') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-5 col-lg-3 mb-2">
        <img src="{{ asset('/storage/Toner.jpg') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-5 col-lg-3 mb-2">
        <img src="{{ asset('/storage/Toner_2.jpg') }}" class="img-fluid rounded">
    </div>
</div> @endsection
