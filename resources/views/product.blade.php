@extends('templates.base')

@section('title', 'product')

@section('content')
    <div class="container-fluid cover-bar">
        <div class="container">
            <div class="cover-comic">
                <img src="{{$comics[$arrayIndex]['thumb']}}" alt="">
            </div>            
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-8 description-comic">
                <h2>{{$comics[$arrayIndex]['title']}}</h2>
                <div class="status-comic d-flex justify-content-between align-items-center ">
                    <div>U.S.Price: <span class="text-white">{{$comics[$arrayIndex]['price']}}</span></div>
                    <div>
                        <span>AVAILABLE</span>
                        <span>Check Available</span>
                    </div>
                </div>
                <p>{{$comics[$arrayIndex]['description']}}</p>
            </div>
            <div class="col-4 advertisement">
                ADVERTISEMENT
                <img src="/images/adv.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid general-information">
        <div class="container">
            <div class="row">
                <div class="col-6 comic-talent">
                    <h3>Talent</h3>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            Art by:
                        </div>
                        <div class="col-4">
                            @foreach($comics[$arrayIndex]['artists'] as $artist )
                                {{$artist}}
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            Written by:
                        </div>
                        <div class="col-4">
                            @foreach($comics[$arrayIndex]['writers'] as $writer )
                                {{$writer}}
                            @endforeach
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6 comic-specs">
                <h3>Specs</h3>
                <hr>
                    <div class="row">
                        <div class="col-4">
                            Series:
                        </div>
                        <div class="col-4">
                            {{$comics[$arrayIndex]['series']}}
                        </div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-4">
                            U.S. Price: 
                        </div>
                        <div class="col-4">
                            {{$comics[$arrayIndex]['price']}}
                        </div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-4">
                            On Sale Date:
                        </div>
                        <div class="col-4">
                            {{$comics[$arrayIndex]['sale_date']}}
                        </div>
                    </div>
                <hr>
                </div>
            </div>
        </div>
    </div>


@endsection

