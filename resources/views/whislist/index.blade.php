@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">

  @foreach ($viewData["whislists"] as $product)
  
  
    <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="{{ asset('/img/pet.jpg') }}">
      <div class="card-body text-center">
        
      <a 
        class="btn bg-primary text-white">{{ $product->getName()}}</a>
        <br>{{__('message.Gender')}}: {{ $product->getPrice()}} </br>
          
      </div>
    </div>
  </div>
    
  @endforeach
</div>
@endsection