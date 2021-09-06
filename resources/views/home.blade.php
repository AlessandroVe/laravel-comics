@extends('templates.base')

@section('title', 'HomePage')

@section('content')
    <div class="row">
        @foreach($comics as $comic)
            <div class="comic col-2">
                <div class="cover">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <span>{{$comic['title']}}</span>
            </div>
        @endforeach
    </div>
    <div class="text-center load-more">
        <button>LOAD MORE</button>
    </div>
@endsection