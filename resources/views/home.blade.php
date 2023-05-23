@extends('layout.app')

@section('content')
<section class="main">
    <h3 class="main-title">CURRENT LIST</h3>
    <div class="main-container">
        <div class="row row-cols-6">
            @foreach ($db as $item)                
            <div class="col">
                <div class="img-container">
                    <img src="{{$item['thumb']}}" alt="">
                </div>
                <h4>{{$item['series']}}</h4>
            </div>
            @endforeach
        </div>
        <a href="#">Load More</a>
    </div>
</section>
@endsection