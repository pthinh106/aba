@extends('home.main')
@section('content')
    <style>
        section#news-detail {
            padding: 20px;
        }
        .news-title{
            font-size: 30px;
        }
    </style>
    @if(isset($detail->seo_title))
        <h1 style="display: none">{{$detail->seo_title}}</h1>
    @endif
    <section id="news-detail">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <h1 class="news-title">{{$detail->name}}</h1>
                    <div class="content-news">
                        {!! $detail->content !!}
                    </div>
                </div>
                <div class="col-12 col-md-5">

                </div>
            </div>
        </div>
    </section>
@endsection