@extends('home.main')
@section('content')
    <style>
        .advantage-content:hover{
            background-image: linear-gradient( rgba(255,255,255,0), rgba(255,255,255,0.5));
        }
        .advantage-content {
            height: 100%;
            padding: 15px;
            background: #def8f8;
        }
        .advantage-content-item ul
        {
            list-style-type: disc;
            list-style-position: outside;
            padding: 0 0 0 15px;
        }
        #category-prevails{
            background: #dcf0f9;
        }
        .bg-15{
            background: #fff;
            padding: 15px 15px;
        }
        .category-title-why{
            width: 80%;
            margin: auto;
        }
        section#category-advantage {
            padding: 30px 0;
        }
        .advantage {
            text-align: justify;
            border-right: 4px solid #6fa8dc;
        }
        .defect {
            text-align: justify;

        }
        p.category-introduce-title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        section#category-introduce {
            padding: 30px 0;
            background: #9fc5e8;
        }
        .col-introduce-item-5-p{
            width: 20%;
            flex: 0 0 20%;
            text-align: center;
        }
        p.introduce-title {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 0;
        }
        .col-introduce-item-1{
            width: 100%;
            flex: 0 0 100%;
        }
        .col-introduce-item-2{
            width: 50%;
            flex: 0 0 50%;
        }
        .col-introduce-item-3{
            width: 33.33333%;
            flex: 0 0 33.33333%;
        }
        .col-introduce-item-4{
            width: 25%;
            flex: 0 0 25%;
        }
        .col-introduce-item-5{
            width: 20%;
            flex: 0 0 20%;
        }

        .col-introduce-item-6{
            width: 16.6666%;
            flex: 0 0 16.6666%;
        }
        .col-introduce-item-7{
            width: 14.2857%;
            flex: 0 0 14.2857%;
        }
        .introduce-item {
            position: relative;
            width: 20%;
        }
        .introduce-item:before {
            content: "";
            display: block;
            background-image: url(https://minhle.ca/wp-content/uploads/2021/04/img-13.png);
            position: absolute;
            transform: translateX(-50%);
            left: 100%;
            width: 38px;
            height: 45px;
            top: 55px;
        }
        .introduce-item:last-child:before{
            content: "";
            display: none;

        }
        .introduce-content {
            display: flex;
            /*justify-content: space-around;*/
        }
        .introduce-item-process {
            width: 156px;
            height: 156px;
            -mozbox-shadow: inset 0px 0px 0px 3px #fff;
            border-radius: 50%;
            padding: 20px;
            -webkit-box-shadow: inset 0px 0px 0px 3px #fff;
            box-shadow: inset 0px 0px 0px 3px #fff;
            border: 2px dotted #ffffff;
            position: relative;
            background: rgb(238,200,132);
            background: linear-gradient(0deg,rgba(238,200,132,1) 0%,rgba(201,167,105,1) 100%);
            text-align: center;
            margin: 0 auto;
        }

        .introduce-item-process:before{
            content: "";
            display: block;
            position: absolute;
            left: 10px;
            top: 10px;
            right: 10px;
            bottom: 10px;
            background-color: #fff;
            border-radius: 50%;
            transition: 0.3s all ease;
        }
        h3.ntroduce-item-process-title, .introduce-item-process p {
            color: #000;
            position: relative;
        }
        .category-news-image.image-settled{
            position: relative;
            padding: 10px 0;
        }
        .category-news-content.content-settled{
            position: absolute;
            width: 100%;
            bottom: 10px;
            height: 80px;
            line-height: 80px;
            color: #fff;
        }
        .link-category-setteld:hover .category-news-content.content-settled{
            background-image: linear-gradient( rgba(255,255,255,0), rgba(255,255,255,0.5));
        }
        .category-option{
            padding: 15px 0;
        }

        @media screen and (max-width: 770px) {
            .category-title-why{
                width: 100%;
            }
            .col-introduce-item-1, .col-introduce-item-2, .col-introduce-item-3, .col-introduce-item-4, .col-introduce-item-5, .col-introduce-item-6, .col-introduce-item-7{
                width: 50%;
                flex: 0 0 50%;
            }
            .col-introduce-item-5-p{
                width: 100%;
                flex: 0 0 100%;
            }
            .introduce-item:before{
                display: none;
            }
            .advantage{
                border-right: none;
            }
        }



    </style>
    @if($detail['seo_title'])
        <h1 style="display: none">{{$detail['seo_title']}}</h1>
    @endif
    @if(isset($detail['banner_pc']) && $detail['banner_pc'])
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
    @endif
    @if($list_block)
        @foreach($list_block as $key=>$val)
            @if(isset($val['addon_block']) && $val['addon_block']==1 && $val['data'])
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

            @if(isset($val['addon_block']) && $val['addon_block']==2 && isset($val['data']) && $val['data'])
                <section id="category-process">
                    <?php $stt_process = 0; ?>
                    @foreach($val['data'] as $key => $vals)
                        @if( $vals["'name'"]!="")
                            <?php $stt_process++; ?>
                        @endif
                    @endforeach
                    <div class="container">
                        <div class="introduce-content">
                            <?php $process_stt = 1; ?>
                            @foreach($val['data'] as $keys => $vals)
                                    @if( $val["'name'"]!="")
                                    <div class="introduce-item col-introduce-item-<?php echo $stt_process?>">
                                        <div class="introduce-item-process ">
                                            <h3 class="ntroduce-item-process-title">0<?php echo $process_stt ?></h3>
                                            <p>{{$vals["'name'"]}}</p>
                                        </div>
                                        <div class="introduce-item-content">
                                            <p>{!!  $vals["'content'"]!!}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif

            @if(isset($val['addon_block']) && $val['addon_block']==3 && $val['data'])
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
                                            <a class="link-category-setteld" href="@if($item["'link'"]) {{$item["'link'"]}} @else javascript:void(0) @endif">
                                                <div class="category-news-item">
                                                    <div class="category-news-image image-settled">
                                                        <img src="{{$item["'image'"]}}" alt="{{$val['title']}}" width="1200" height="280" class="auto-size" loading="lazy">
                                                        <div class="category-news-content content-settled">
                                                            <p class="category-news-content-title text-center">{{$item["'answer'"]}}</p>
                                                        </div>
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

            @if(isset($val['addon_block']) && $val['addon_block']==4 && $val['data'])
                <section id="category-prevails" style="@if(isset($category_prevails)){{$category_prevails}} @endif">
                    <div class="category-prevails">
                        <div class="category-option">
                            <div class="container ">
                                <div class="bg-15 category-title-why">
                                    <h2 class="text-center font-weight-bold">
                                        {{$val['title']}}
                                    </h2>
                                    <p class="text-center ">
                                        {!! $val['content'] !!}
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="category-option">
                            <div class="container">
                                <div class="row">
                                    @foreach($val['data'] as $key=>$item)
                                        <div class="col-12 col-md-4 bg-15">
                                                <div class="category-news-item">
                                                    <div class="" >
                                                        <img src="{{$item["'image'"]}}" alt="{{$val['title']}}" style="width: 50px; height: 50px; border-radius: 50%" width="1200" height="280" class="auto-size" loading="lazy">
                                                    </div>
                                                    <div class="category-news-content">
                                                        <p class="category-news-content-title text-justify">{!! $item["'content'"] !!}</p>
                                                    </div>
                                                </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if(isset($val['addon_block']) &&  $val['addon_block']==5 && $val['data'])
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

            @if(isset($val['addon_block']) && $val['addon_block']==6 && $val['data'])
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
            {{--giới thiệu đất nước--}}
            @if(isset($val['addon_block']) && $val['addon_block']==13 && $val['data'])
                <section id="category-introduce">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 ">
                                <p class="category-introduce-title">{{$val['title']}}</p>
                            </div>
                            @foreach($val['data'] as $key=>$item)
                                @foreach($item as $keys => $vals)

                                <div class="col-12 col-introduce-item-5-p">
                                    @if($keys=="'capital'")
                                        <p class="introduce-title">Thủ đô</p>
                                    @endif
                                    @if($keys=="'acreage'")
                                        <p class="introduce-title">Diện tích</p>
                                    @endif
                                    @if($keys=="'gdp'")
                                        <p class="introduce-title">GDP</p>
                                    @endif
                                    @if($keys=="'language'")
                                        <p class="introduce-title">Ngôn ngữ</p>
                                    @endif
                                    @if($keys=="'population'")
                                        <p class="introduce-title">Dân số</p>
                                    @endif
                                        <p>{{$vals}}</p>
                                </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
            @if(isset($val['addon_block']) && $val['addon_block']==14 && $val['data'])
                <section id="category-InterestP">
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
                                        @if($item["'image'"] && isset($item["'image'"]))
                                            <div class="col-12 col-md-4">
                                                <a href="@if($item["'link'"]) {{$item["'link'"]}} @else javascript:void(0) @endif">
                                                    <div class="category-news-item">
                                                        <div class="category-news-image">
                                                            <img src="{{$item["'image'"]}}" alt="{{$val['title']}}" class="auto-size" width="350" height="218.75"  loading="lazy">
                                                        </div>
                                                        <div class="category-news-content">
                                                            <p class="category-news-content-title text-center">{{$item["'name'"]}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            @endif
            @if(isset($val['addon_block']) && $val['addon_block']==15 && $val['data'])
                <section id="category-advantage">
                    <div class="container">
                        <div class="col-12">
                            <p class="category-introduce-title">{{$val['title']}}</p>
                        </div>
                        <div class="row">
                            @foreach($val['data'][0] as $keys => $item)

                                @if($keys=="'left'")
                                <div class="col-12 col-md-6 advantage">
                                    {!! $item !!}
                                </div>
                                @endif
                                @if($keys=="'right'")
                                <div class="col-12 col-md-6 defect">
                                    {!! $item !!}
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>

            @endif
            @if(isset($val['addon_block']) && $val['addon_block']==16 && $val['data'])
                <section id="category-condition">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <p class="category-introduce-title">{{$val['title']}}</p>
                            </div>
                            @foreach($val['data'][0] as $keys => $item)

                                @if($keys=="'left'")
                                    <div class="col-12 col-md-6 advantage">
                                        <div class="advantage-content">
                                            <div class="advantage-content-item">
                                                {!! $item !!}
                                            </div>

                                        </div>

                                    </div>
                                @endif
                                @if($keys=="'right'")
                                    <div class="col-12 col-md-6 defect">
                                        <div class="advantage-content">
                                        <div class="advantage-content-item">
                                            {!! $item !!}
                                        </div>
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
    @endif








@endsection