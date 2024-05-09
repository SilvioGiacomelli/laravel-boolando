@extends('layout.main')

@section('content')
    @php
        $card = config('product-card');
    @endphp

    <div class="container">
        @foreach ($card['products'] as $product)
            <div class="card">
                <div class="box">
                    <img class="show" src="{{ Vite::asset('public/img/' . $product['frontImage']) }}" alt="">
                    <img class="hide" src="{{ Vite::asset('public/img/' . $product['backImage']) }}" alt="">
                    <div class="cuore">
                        <h4>&#9829;</h4>
                    </div>
                    @foreach ($product['badges'] as $badge)
                        <div class="{{ $badge['type'] }}">{{ $badge['value'] }}</div>
                    @endforeach
                </div>
                <p class="marca">{{ $product['brand'] }}</p>
                <p class="title">{{ $product['name'] }}</p>
                <p class="prezzo">{{ $product['price'] }}€</p>
            </div>
        @endforeach
    </div>
@endsection
