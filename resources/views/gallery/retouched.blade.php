@extends('layouts.gallery-sub')

@section('scriptheader')
<style>
    .row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}
</style>
@endsection

@section('breadcrumb')
<a href="{{url('')}}/" style="color:white">Gallery</a> / <a href="{{url('')}}/gallery/retouched" style="color:white">Retouched Images</a>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="heading" data-aos="fade-right">Retouched Images</h2>
    </div>
</div>

<div class="row">
    <div class="column">
        @foreach ($col1 as $e)
        <img src="{{url('')}}/villa/agavillaimage/{{ $e->filesource }}/{{ $e->filename }}" class="img-fluid" style="width:100%">
        @endforeach
    </div>
    <div class="column">
        @foreach ($col2 as $e)
        <img src="{{url('')}}/villa/agavillaimage/{{ $e->filesource }}/{{ $e->filename }}" class="img-fluid" style="width:100%">
        @endforeach
    </div>
    <div class="column">
        @foreach ($col3 as $e)
        <img src="{{url('')}}/villa/agavillaimage/{{ $e->filesource }}/{{ $e->filename }}" class="img-fluid" style="width:100%">
        @endforeach
    </div>
    <div class="column">
        @foreach ($col4 as $e)
        <img src="{{url('')}}/villa/agavillaimage/{{ $e->filesource }}/{{ $e->filename }}" class="img-fluid" style="width:100%">
        @endforeach
    </div>
</div>
@endsection