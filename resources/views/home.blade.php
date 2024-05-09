@extends('layout.main')

@section('content')
    <div class="container">
        @foreach ($products as $product)
            <div class="card">
                <div class="box">
                    <img class="show" src="{{ asset('img/' . $product['frontImage']) }}" v-show="!isHovering">
                </div>
                <p class="marca">{{ $product['brand'] }}</p>
                <p class="title">{{ $product['name'] }}</p>
                <p class="prezzo">{{ $product['price'] }}€</p>
            </div>
        @endforeach
    </div>
@endsection
