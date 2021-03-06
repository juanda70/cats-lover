@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
@if(session()->has('msg'))
<div class="alert alert-primary" role="alert">
  {{session('msg')}}
</div>
@endif
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">@lang('Create pet')</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('pet.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="@lang('Enter name')" name="name" value="{{ old('name') }}" />
              <input type="text" class="form-control mb-2" placeholder=" @lang('Enter weight')" name="weight" value="{{ old('weight') }}" />
              <input type="date" class="form-control mb-2" placeholder=" @lang('Enter dateBirth')" name="dateBirth" value="{{ old('dateBirth') }}" />
              <select name="gender"class="form-control mb-2">
                <option value="Masculino"> @lang('Male')</option> 
                <option value="Femenino"> @lang('Femenine')</option> 
              </select>
              <select name="breed_id" class="form-control mb-2">
                @foreach ($viewData["breeds"] as $breed)
                  <option value="{{ $breed->getId() }}">
                    {{ $breed->getName() }}
                  </option>
                @endforeach
              </select>
              <input type="submit" class="btn btn-primary" value=@lang('Send') />
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
