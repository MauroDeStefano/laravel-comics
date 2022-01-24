
@extends('layouts.main')

@section('content')

  <div class="mds-jumbotron"></div>
  <main>
    <div class="container mds-current ">
      <span>CURRENT SERIES</span> 
    </div>
    <div class="container mds-cards">
      @foreach(config('product') as $item)
      <div class="mds-product-card">
        <div class="mds-card">
          <img src="{{$item['thumb']}}" :alt="product.series">
          <h3>{{$item['series']}}</h3>
        </div>
      </div>
      @endforeach
    </div>
    <div class="container mds-load">
      <span>LOAD MORE</span> 
    </div>
  </main>

@endsection