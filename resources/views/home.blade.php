@extends('layout.main')

@section('content')
    <div class="container">
        <div class="card">
            <div class="box">
                <img class="show" src="/img/1.webp" v-show="!isHovering">
                <img class="hide" src="/img/1b.webp" v-show="isHovering">
                <div class="cuore">
                    <h4>&#9829;</h4>
                </div>
                <div key="sconto" class="sconto.type"> sconto . value
                </div>
            </div>
            <p class="marca"> product . brand </p>
            <p class="stile"> product . name </p>
            <p class="prezzo"> product . price </p>
        </div>
    </div>
@endsection
