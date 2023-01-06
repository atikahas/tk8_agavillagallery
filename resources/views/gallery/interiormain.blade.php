@extends('layouts.gallery-sub')

@section('scriptheader')
<link rel="stylesheet" href="{{url('')}}/villa/css/custom.css">
@endsection

@section('breadcrumb')
<a href="{{url('')}}/" style="color:white">Gallery</a> / <a href="{{url('')}}/gallery/interior-main" style="color:white">Interior Main House</a>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h2 class="heading" data-aos="fade-right">Interior Main House</h2>
    </div>
</div>

<div class="row">
    @foreach ($villa1 as $v1)
        <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right">
            <img style="height: 280px; width:100%" src="{{url('')}}/villa/agavillaimage/{{ $v1->filesource }}/{{ $v1->filename }}" alt="Image placeholder" class="img-fluid">
        </div>
    @endforeach 
</div>
@endsection