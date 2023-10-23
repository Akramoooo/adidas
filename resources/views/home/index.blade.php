@extends('layouts.mainLayout')


@section('links')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

@endsection




@section('title', 'Главная')




@section('content')

<div class="home-container">
    <div class="fon-img-container">
        <div class="info-in-fon">
            <h3>What your Originals?</h3>
            <h2>SHOP MEN</h2>
            <h2>SHOP WOMEN</h2>
        </div>
    </div>
</div>
<h1 class="steel-interested">Steel Interested?</h1>
<div class="foot-cards">
    <div class="one-foot-card">
        <img src="{{ asset('/logos/foot.avif')}}" alt="">
        <div class="foot-info">
            <p>adidas</p>
            <p>1200$</p>
        </div>
    </div>
    <div class="one-foot-card">
        <img src="{{ asset('/logos/foot.avif')}}" alt="">
        <div class="foot-info">
            <p>adidas</p>
            <p>1200$</p>
        </div>
    </div>
    <div class="one-foot-card">
        <img src="{{ asset('/logos/foot.avif')}}" alt="">
        <div class="foot-info">
            <p>adidas</p>
            <p>1200$</p>
        </div>
    </div>
    <div class="one-foot-card">
        <img src="{{ asset('/logos/foot.avif')}}" alt="">
        <div class="foot-info">
            <p>adidas</p>
            <p>1200$</p>
        </div>
    </div>
</div>
<div class="additional">
    <div class="add-two-btn">
        <button class="first-add-btn">New Arrivals</button>
        <button class="second-add-btn">What's Trending</button>
    </div>
    <div class="add-one-btn">
        <a href="#">VIEW ALL</a>
    </div>
</div>
<div class="product-cards">
    <div class="one-product-card">
        <img src="{{ asset('/logos/product.avif') }}" alt="">
        <p>Name</p>
        <p>Price</p>
        <p>Type</p>
    </div>
    <div class="one-product-card">
        <img src="{{ asset('/logos/product.avif') }}" alt="">
        <p>Name</p>
        <p>Price</p>
        <p>Type</p>
    </div>
    <div class="one-product-card">
        <img src="{{ asset('/logos/product.avif') }}" alt="">
        <p>Name</p>
        <p>Price</p>
        <p>Type</p>
    </div>
    <div class="one-product-card">
        <img src="{{ asset('/logos/product.avif') }}" alt="">
        <p>Name</p>
        <p>Price</p>
        <p>Type</p>
    </div>
</div>

<div class="four-card-images">
    <div class="image-container">
        <img src="{{ asset('/logos/image1.avif') }}" alt="">
        <h5>Title</h5>
        <p>description</p>
        <h4>SHOP NOW</h4>
    </div>
    <div class="image-container">
        <img src="{{ asset('/logos/image2.avif') }}" alt="">
        <h5>Title</h5>
        <p>description</p>
        <h4>SHOP NOW</h4>
    </div>
    <div class="image-container">
        <img src="{{ asset('/logos/image3.avif') }}" alt="">
        <h5>Title</h5>
        <p>descrption</p>
        <h4>SHOP NOW</h4>
    </div>
    <div class="image-container">
        <img src="{{ asset('/logos/image4.avif') }}" alt="">
        <h5>Title</h5>
        <p>description</p>
        <h4>SHOP NOW</h4>
    </div>
</div>

<h1 style="width: 90%; margin-left: 5%; margin-top: 10px;">Popular right now</h1>

@endsection





@section('scripts')

<script>

</script>

@endsection