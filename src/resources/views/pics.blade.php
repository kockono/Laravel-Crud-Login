@extends('layouts.app')

@section('content')
<div class="card">
    <div class="float-left">
        <a class="btn btn-primary" href="/"> Back</a>
    </div>
</div>
<h1 class="mt-4 card-header"> Una foto Asombrosa!</h1>
<div class="ml-3 card-body">
    <img src="{{$apiPic}}"  class="card-img-top" style="width: 15rem; border-radius: 4px" alt="">
    <a class="btn btn-primary " href="/fotos" style="text-align: center;"> Nueva Foto</a>
</div>

@endsection
