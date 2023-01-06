@extends('layouts.gallery')

@section('scriptheader')
<link rel="stylesheet" href="{{url('')}}/villa/css/custom.css">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <h2 class="heading" data-aos="fade-right">AGA VILLA GALLERY</h2>
    </div>
  </div>
  <div class="row">

    @foreach ( $menugallery as $mg )
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
            <figure class="snip1477">
                <img src="{{url('')}}/villa/agavillaimage/{{ $mg->image }}" alt="sample38" />
                <div class="title">
                    <div><h5 data-aos="fade-right">{{ $mg->title }}</h5></div>
                </div>
                <figcaption>
                    <p>{{ $mg->description }}</p>
                </figcaption>
                <a href="#"></a>
            </figure>
        </div>
    @endforeach

  </div>
@endsection