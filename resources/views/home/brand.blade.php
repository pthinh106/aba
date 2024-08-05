@extends('home.main')
@section('content')
    <section id="category_banner-news" style="@if(isset($category_banner_news)){{$category_banner_news}} @endif">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-top">
                        <picture class="picture">
                            <source media="(min-width:465px)" srcset="/{{$detail['banner_pc']}}">
                            <img src="/{{$detail['banner_mb']}}" alt="{{$detail['name']}}" class="picture-img img-picture rounded auto-size" width="1110" height="233.67" loading="lazy">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($list_block)
        @foreach($list_block as $key=>$val)
            @if(isset($val['addon_block']) && $val['addon_block']==1)
                <section class="category-question-answer" style="@if(isset($category_question_answer)){{$category_question_answer}} @endif">
                    <div class="container">
                        <div class="row">
                                    <div class="col-12">
                                        @foreach($val['data'] as $key => $val)
                                            @if($val["'question'"])
                                                <div class="home-question-item">
                                                    <div class="home-question-title" onclick="showHomeAnswer('{{$key}}')"><label>{{$key+1}}. {!! $val["'question'"] !!}</label></div>
                                                    <div class="home-question-answer" id="home-question-answer-{{$key}}"> {!! $val["'answer'"] !!}</div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                        </div>
                    </div>
                </section>
            @endif

            @if(isset($val['addon_block']) && $val['addon_block']==3)
                <section id="category-index" style="@if(isset($category_index)){{$category_index}} @endif">
                    <div class="category-index">
                        <div class="category-option">
                            <div class="container">
                                <h2 class="text-center font-weight-bold">
                                    {{$val['title']}}
                                </h2>
                                <p class="text-center ">
                                    {!! $val['content'] !!}
                                </p>
                            </div>
                        </div>
                        <div class="category-option">
                            <div class="container">
                                <div class="row">
                                    @foreach($val['data'] as $key=>$item)
                                        <div class="col-12 col-md-4">
                                            <a href="@if($item["'link'"]) {{$item["'link'"]}} @else javascript:void(0) @endif">
                                                <div class="category-news-item">
                                                    <div class="category-news-image">
                                                        <img src="{{$item["'image'"]}}" alt="{{$val['title']}}" width="350" height="350" class="auto-size" loading="lazy">
                                                    </div>
                                                    <div class="category-news-content">
                                                        <p class="category-news-content-title text-center">{{$item["'answer'"]}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if(isset($val['addon_block']) && $val['addon_block']==4)
                <section id="category-prevails" style="@if(isset($category_prevails)){{$category_prevails}} @endif">
                    <div class="category-prevails">
                        <div class="category-option">
                            <div class="container">
                                <h2 class="text-center font-weight-bold">
                                    {{$val['title']}}
                                </h2>
                                <p class="text-center ">
                                    {!! $val['content'] !!}
                                </p>
                            </div>
                        </div>
                        <div class="category-option">
                            <div class="container">
                                <div class="row">
                                    @foreach($val['data'] as $key=>$item)
                                        <div class="col-12 col-md-4">
                                            <a class="">
                                                <div class="category-news-item">
                                                    <div class="text-center" >
                                                        <img src="{{$item["'image'"]}}" alt="{{$val['title']}}" style="width: 50px; height: 50px; border-radius: 50%">
                                                    </div>
                                                    <div class="category-news-content">
                                                        <p class="category-news-content-title text-justify">{{$item["'content'"]}}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if(isset($val['addon_block']) &&  $val['addon_block']==5)
                <section id="category-benefit" style="@if(isset($category_benefit)){{$category_benefit}} @endif">
                    <div class="category-benefit">
                        <div class="category-benefit">
                            <div class="container">
                                <h2 class="text-center ">
                                    {{$val['title']}}
                                </h2>
                            </div>
                        </div>
                        <div class="category-benefit">
                            <div class="container">
                                <div class="row">
                                    @foreach($val['data'] as $key=>$item)
                                        <div class="col-12 col-md-4">
                                            <img src="{{$item["'image'"]}}" alt="{{$val['title']}}" class="figure-img img-figure rounded auto-size" width="350" height="318.17"  loading="lazy">
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <div class="item-benefit">
                                                {!! $item["'content'"] !!}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if(isset($val['addon_block']) && $val['addon_block']==6)
                <section id="category-slide" style="@if(isset($category_slide)){{$category_slide}} @endif">
                    <div class="container">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($val['data'] as $key=>$item)
                                    @if($item["'id'"])
                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if($key==0) active @endif"></li>
                                    @endif
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach($val['data'] as $key=>$item)
                                    <div class="carousel-item @if($key==0) active @endif">
                                        <div class="video" >
                                            <iframe width="100%" src="https://www.youtube.com/embed/lxFmeBhoA1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </section>
            @endif

            @if(isset($val['addon_block']) && $val['addon_block']==7)

            @endif
        @endforeach
    @endif






@endsection