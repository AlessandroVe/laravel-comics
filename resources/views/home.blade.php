@extends('templates.base')

@section('title', 'HomePage')

@section('content')
    <div class="container-fluid content">
        <div class="container ">
            <div class="row">
                @foreach($comics as $comic)
                    <div class="comic col-2">
                        <a href="{{ route('product',[ 'id' => $loop->iteration])}}">
                            <div class="cover">
                                <img src="{{$comic['thumb']}}" alt="">
                            </div>
                            <span>{{$comic['title']}}</span>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center load-more">
                <button>LOAD MORE</button>
            </div>
        </div>
        <div class="row text-white shop-bar">
            <div class="container">
                <div class="items-bar d-flex align-items-center">
                    <div class="item-bar">
                        <img src="/images/buy-comics-digital-comics.png" alt="">
                        <span> DIGITAL COMICS</span>
                </div>
                    <div class="item-bar">
                        <img src="/images/buy-comics-merchandise.png" alt="">
                        <span> DC MERCHANDISE</span>
                </div>
                    <div class="item-bar">
                        <img src="/images/buy-comics-subscriptions.png" alt="">
                        <span> SUBSCRIPTION</span>
                </div>
                    <div class="item-bar">
                        <img src="/images/buy-comics-shop-locator.png" alt="">
                        <span> COMIC SHOP LOCATOR</span>

                </div>
                    <div class="item-bar">
                        <img src="/images/buy-dc-power-visa.svg" alt="">
                        <span> DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection