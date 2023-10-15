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
</div>

@endsection





@section('scripts')

<script>

</script>

@endsection