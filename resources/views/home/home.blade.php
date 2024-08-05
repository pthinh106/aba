{{-- @extends('home.main') --}}
{{-- @section('content') --}}
{{-- <style> --}}
{{-- /*section#home-introduce {*/ --}}
{{-- /*background: #eee;*/ --}}
{{-- /*}*/ --}}
{{-- .col-12.home-settled { --}}
{{-- padding: 20px; --}}
{{-- } --}}
{{-- .home-category-content { --}}
{{-- text-align: center; --}}
{{-- } --}}
{{-- section#home-news { --}}
{{-- padding: 20px 0; --}}
{{-- } --}}
{{-- @media only screen and  (min-width: 992px){ --}}
{{-- .col-hash-5 { --}}
{{-- -webkit-box-flex: 0; --}}
{{-- -ms-flex: 0 0 20%; --}}
{{-- flex: 0 0 20%; --}}
{{-- max-width: 20%; --}}
{{-- } --}}
{{-- .col-hash-4 { --}}
{{-- -webkit-box-flex: 0; --}}
{{-- -ms-flex: 0 0 25%; --}}
{{-- flex: 0 0 25%; --}}
{{-- max-width: 25%; --}}
{{-- } --}}
{{-- .col-hash-3 { --}}
{{-- -webkit-box-flex: 0; --}}
{{-- -ms-flex: 0 0 33.333%; --}}
{{-- flex: 0 0 33.333%; --}}
{{-- max-width: 33.333%; --}}
{{-- } --}}
{{-- .col-hash-2 { --}}
{{-- -webkit-box-flex: 0; --}}
{{-- -ms-flex: 0 0 50%; --}}
{{-- flex: 0 0 50%; --}}
{{-- max-width: 50%; --}}
{{-- } --}}
{{-- .col-hash-1 { --}}
{{-- -webkit-box-flex: 0; --}}
{{-- -ms-flex: 0 0 50%; --}}
{{-- flex: 0 0 50%; --}}
{{-- max-width: 50%; --}}
{{-- } --}}
{{-- } --}}



{{-- @media (min-width: 768px) { --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item { --}}
{{-- margin-right: inherit; --}}
{{-- } --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item, --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item + .carousel-item { --}}
{{-- display: block; --}}
{{-- } --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left), --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item, --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item { --}}
{{-- transition: none; --}}
{{-- } --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item.active + .carousel-item + .carousel-item + .carousel-item { --}}
{{-- position: absolute; --}}
{{-- top: 0; --}}
{{-- right: -33.33333333%; --}}
{{-- z-index: -1; --}}
{{-- display: block; --}}
{{-- visibility: visible; --}}
{{-- } --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item-next, --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item-prev { --}}
{{-- position: relative; --}}
{{-- transform: translate3d(0, 0, 0); --}}
{{-- } --}}
{{-- .multi-item-carousel .carousel-inner .carousel-item-prev.carousel-item-right { --}}
{{-- position: absolute; --}}
{{-- top: 0; --}}
{{-- left: 0; --}}
{{-- z-index: -1; --}}
{{-- display: block; --}}
{{-- visibility: visible; --}}
{{-- } --}}
{{-- .multi-item-carousel .active.carousel-item-left + .carousel-item-next.carousel-item-left, --}}
{{-- .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item, --}}
{{-- .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item, --}}
{{-- .multi-item-carousel .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item { --}}
{{-- position: relative; --}}
{{-- transform: translate3d(-100%, 0, 0); --}}
{{-- visibility: visible; --}}
{{-- } --}}
{{-- .multi-item-carousel .active.carousel-item-right + .carousel-item-prev.carousel-item-right, --}}
{{-- .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item, --}}
{{-- .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item, --}}
{{-- .multi-item-carousel .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item { --}}
{{-- position: relative; --}}
{{-- transform: translate3d(100%, 0, 0); --}}
{{-- display: block; --}}
{{-- visibility: visible; --}}
{{-- } --}}
{{-- } --}}

{{-- </style> --}}
{{-- @if (isset($detail['banner_pc']) && $detail['banner_pc'] != '' && isset($detail['banner_mb']) && $detail['banner_mb'] != '') --}}
{{-- <section id="banner-news" style="@if (isset($home_banner_news)){{$home_banner_news}} @endif"> --}}
{{-- <div class="container"> --}}
{{-- <div class="row"> --}}
{{-- <div class="col-12"> --}}
{{-- <div class="banner-top"> --}}
{{-- <picture class="picture"> --}}
{{-- <source media="(min-width:650px)" srcset="{{$detail['banner_pc']}}"> --}}
{{-- <source media="(min-width:465px)" srcset="{{$detail['banner_pc']}}"> --}}
{{-- <img src="{{$detail['banner_mb']}}" alt="Flowers" class="picture-img img-picture rounded"> --}}
{{-- </picture> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </section> --}}
{{-- @endif --}}
{{-- @if ($menu_show_home && count($menu_show_home) > 0) --}}
{{-- <section id="home-category" style="@if (isset($home_category)){{$home_category}} @endif"> --}}
{{-- <div class="container" style="position: relative"> --}}
{{-- <div class="swiper"> --}}
{{-- <div class="swiper-wrapper"> --}}
{{-- <?php $total_menu_home = count($menu_show_home); ?> --}}
{{-- @foreach ($menu_show_home as $item) --}}
{{-- <div class="swiper-slide"> --}}
{{-- <a href="/{{$item['slug']}}"> --}}
{{-- <div class="home-category-item"> --}}
{{-- <div class="home-category-image"> --}}
{{-- <img src="{{$item['images']}} " class="img-fluid mx-auto d-block p-2" > --}}
{{-- </div> --}}
{{-- <div class="home-category-content"> --}}
{{-- {{$item['name']}} --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </a> --}}
{{-- </div> --}}
{{-- @endforeach --}}
{{-- </div> --}}

{{-- </div> --}}
{{-- <div class="swiper-button-next"></div> --}}
{{-- <div class="swiper-button-prev"></div> --}}
{{-- <div class="row"> --}}
{{-- <?php $total_menu_home = count($menu_show_home); ?> --}}
{{-- @foreach ($menu_show_home as $item) --}}
{{-- <div class="col-12 col-hash-{{$total_menu_home}}"> --}}

{{-- <a href="/{{$item['slug']}}"> --}}
{{-- <div class="home-category-item"> --}}
{{-- <div class="home-category-image"> --}}
{{-- <img src="{{$item['images']}}"> --}}
{{-- </div> --}}
{{-- <div class="home-category-content"> --}}
{{-- {{$item['name']}} --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </a> --}}

{{-- </div> --}}
{{-- @endforeach --}}

{{-- </div> --}}
{{-- </div> --}}
{{-- </section> --}}
{{-- @endif --}}

{{-- <section id="home-introduce" style="@if (isset($home_introduce)){{$home_introduce}} @endif"> --}}
{{-- <div class="container"> --}}
{{-- <div class="row"> --}}
{{-- <div class="col-12 home-settled"> --}}
{{-- {!! $detail['content'] !!} --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </section> --}}
{{-- @if ($news_home && count($news_home) > 0) --}}
{{-- <section id="home-news" style="@if (isset($home_news_style)){{$home_news_style}} @endif"> --}}
{{-- <div class="container"> --}}
{{-- <div class="row"> --}}

{{-- {!! \App\Helpers\Helper::newsHome($news_home) !!} --}}

{{-- </div> --}}
{{-- </div> --}}
{{-- </section> --}}
{{-- @endif --}}

{{-- @if ($video_home) --}}
{{-- <section id="home-video" style="@if (isset($home_video)){{$home_video}} @endif"> --}}
{{-- <div class="container"> --}}

{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> --}}

{{-- <ol class="carousel-indicators"> --}}
{{-- @foreach ($video_home as $key => $item) --}}
{{-- @if ($item["'id'"]) --}}
{{-- <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if ($key == 0) active @endif"></li> --}}
{{-- @endif --}}
{{-- @endforeach --}}
{{-- </ol> --}}


{{-- <div class="carousel-inner"> --}}
{{-- @if (isset($video_home)) --}}
{{-- @foreach ($video_home as $key => $item) --}}
{{-- @if ($item["'id'"]) --}}
{{-- <div class="carousel-item @if ($key == 0) active @endif"> --}}
{{-- <div class="video" > --}}
{{-- <iframe width="100%" src="https://www.youtube.com/embed/{{$item["'id'"]}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- @endif --}}
{{-- @endforeach --}}
{{-- @endif --}}

{{-- </div> --}}
{{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> --}}
{{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
{{-- <span class="sr-only">Previous</span> --}}
{{-- </a> --}}
{{-- <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> --}}
{{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
{{-- <span class="sr-only">Next</span> --}}
{{-- </a> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </section> --}}
{{-- @endif --}}

{{-- @if ($question_home) --}}
{{-- <section class="home-question" style="@if (isset($home_question)){{$home_question}} @endif"> --}}
{{-- <div class="container"> --}}
{{-- <div class="row"> --}}

{{-- @for ($i = 0; $i < 10; $i++) --}}
{{-- @if (isset($question_home[$i])) --}}


{{-- <div class="col-12"> --}}
{{-- <div class="home-question-item"> --}}
{{-- @foreach ($question_home[$i] as $key => $val) --}}
{{-- @if ($key == "'question'" && $val) --}}
{{-- <div class="home-question-title" onclick="showHomeAnswer('{{$i}}')"><label>{{$i+1}}. {!! $val !!}</label></div> --}}
{{-- @endif --}}
{{-- @if ($key == "'answer'" && $val) --}}
{{-- <div class="home-question-answer" id="home-question-answer-{{$i}}"> {!! $val !!}</div> --}}
{{-- @endif --}}
{{-- @endforeach --}}
{{-- </div> --}}
{{-- </div> --}}

{{-- @endif --}}
{{-- @endfor --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </section> --}}
{{-- @endif --}}
{{-- @endsection --}}
{{-- @section('footer') --}}
{{-- <script> --}}
{{-- var swiper = new Swiper('.swiper', { --}}
{{-- slidesPerView: 3, --}}
{{-- autoplay: { --}}
{{-- delay: 5000, --}}
{{-- }, --}}
{{-- direction: getDirection(), --}}
{{-- navigation: { --}}
{{-- nextEl: '.swiper-button-next', --}}
{{-- prevEl: '.swiper-button-prev', --}}
{{-- }, --}}
{{-- on: { --}}
{{-- resize: function () { --}}
{{-- swiper.changeDirection(getDirection()); --}}
{{-- }, --}}
{{-- }, --}}
{{-- }); --}}

{{-- function getDirection() { --}}
{{-- var windowWidth = window.innerWidth; --}}
{{-- var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal'; --}}

{{-- return direction; --}}
{{-- } --}}
{{-- </script> --}}
{{-- @endsection --}}


@extends('home.main')
@section('content')
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: #438ba3;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            color: #eee;
        }

        p.home-title {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            padding-bottom: 20px;
        }

        textarea.form-control {
            /*border: none;*/
        }

        ::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color: #909;
        }

        :-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: #909;
            opacity: 1;
        }

        ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: #909;
            opacity: 1;
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #909;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #909;
        }

        ::placeholder {
            /* Most modern browsers support this now. */
            color: #909;
        }

        /*section#home-introduce {*/
        /*background: #eee;*/
        /*}*/
        .col-12.home-settled {
            padding: 20px;
        }

        .home-category-content {
            text-align: center;
        }

        section#home-news {
            padding: 20px 0;
        }

        @media only screen and (min-width: 992px) {
            .col-hash-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }

            .col-hash-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-hash-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 33.333%;
                flex: 0 0 33.333%;
                max-width: 33.333%;
            }

            .col-hash-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .col-hash-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }



        @media (min-width: 768px) {
            .multi-item-carousel .carousel-inner .carousel-item {
                margin-right: inherit;
            }

            .multi-item-carousel .carousel-inner .carousel-item.active+.carousel-item,
            .multi-item-carousel .carousel-inner .carousel-item.active+.carousel-item+.carousel-item {
                display: block;
            }

            .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
            .multi-item-carousel .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
                transition: none;
            }

            .multi-item-carousel .carousel-inner .carousel-item.active+.carousel-item+.carousel-item+.carousel-item {
                position: absolute;
                top: 0;
                right: -33.33333333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            .multi-item-carousel .carousel-inner .carousel-item-next,
            .multi-item-carousel .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .multi-item-carousel .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            .multi-item-carousel .active.carousel-item-left+.carousel-item-next.carousel-item-left,
            .multi-item-carousel .carousel-item-next.carousel-item-left+.carousel-item,
            .multi-item-carousel .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
            .multi-item-carousel .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            .multi-item-carousel .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
            .multi-item-carousel .carousel-item-prev.carousel-item-right+.carousel-item,
            .multi-item-carousel .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
            .multi-item-carousel .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                display: block;
                visibility: visible;
            }
        }
    </style>
    @if (isset($detail['seo_title']))
        <h1 style="display: none">{{ $detail['seo_title'] }}</h1>
    @endif
    @if (isset($detail['banner_pc']) &&
            $detail['banner_pc'] != '' &&
            isset($detail['banner_mb']) &&
            $detail['banner_mb'] != '')
        <?php
        $isMob = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
        if ($isMob) {
            $text_image = 'width="360" height="200"';
        } else {
            $text_image = 'width="1900" height="628"';
        }
        ?>
        <div class="swiper mySwiper0">
            <div class="swiper-wrapper">
                <div data-hash="slide1" class="swiper-slide">
                    <picture class="picture">
                        <source media="(min-width:650px)" srcset="{{ $detail['banner_pc'] }}">
                        <source media="(min-width:465px)" srcset="{{ $detail['banner_pc'] }}">
                        <img src="{{ $detail['banner_mb'] }}" alt="Flowers" class="figure-img img-figure rounded auto-size"
                            {!! $text_image !!} loading="lazy">
                    </picture>
                </div>
                {{-- <div data-hash="slide1" class="swiper-slide"> --}}
                {{-- <img src="https://avi.edu.vn/wp-content/uploads/2019/11/london-2393098.jpg" class="img-fluid mx-auto d-block" > --}}
                {{-- </div> --}}
                {{-- <div data-hash="slide1" class="swiper-slide"> --}}
                {{-- <img src="https://avi.edu.vn/wp-content/uploads/2019/11/london-2393098.jpg" class="img-fluid mx-auto d-block " > --}}
                {{-- </div> --}}
                {{-- <div data-hash="slide1" class="swiper-slide"> --}}
                {{-- <img src="https://avi.edu.vn/wp-content/uploads/2019/11/london-2393098.jpg" class="img-fluid mx-auto d-block " > --}}
                {{-- </div> --}}

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    @endif
    @if ($menu_show_home && count($menu_show_home) > 0)
        <section id="home-category" style="@if (isset($home_category)) {{ $home_category }} @endif">
            <div class="container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php $total_menu_home = count($menu_show_home); ?>
                        @foreach ($menu_show_home as $item)
                            <div class="swiper-slide">
                                <a href="/{{ $item['slug'] }}">
                                    <div class="home-category-item">
                                        <div class="home-category-image pb-3">
                                            <img src="{{ $item['images'] }} "
                                                class="img-fluid mx-auto d-block p-2 auto-size" width="336.66"
                                                height="366.91" loading="lazy">
                                        </div>
                                        <div class="home-category-content">
                                            {{ $item['name'] }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>

                </div>
            </div>
        </section>
    @endif
    @if ($news_home && count($news_home) > 0)
        <section id="home-news" style="@if (isset($home_news_style)) {{ $home_news_style }} @endif">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="home-title"> Tin nổi bật</p>
                    </div>

                    {!! \App\Helpers\Helper::newsHome($news_home) !!}
                    <div class="col-12 blog-list-view-more btn-view-more text-center">

                        <a href="/tin-tuc" rel="nofollow" data-page="2" id="btn-view-more">Xem thêm</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section id="home-introduce" style="{{ isset($home_introduce) ? $home_introduce : '' }}">
        <div class="container mb-4 mt-5">
            <div class="row">
                <div class="col-12 home-settled text-center text-justify">
                    @if (isset($detail['content']))
                        {!! $detail['content'] !!}
                    @else
                        <p>No content available.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>


    @if ($video_home)
        <section id="home-video" style="@if (isset($home_video)) {{ $home_video }} @endif">
            <div class="container">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        @foreach ($video_home as $key => $item)
                            @if ($item["'id'"])
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                                    class="@if ($key == 0) active @endif"></li>
                            @endif
                        @endforeach
                    </ol>


                    <div class="carousel-inner">
                        @if (isset($video_home))
                            @foreach ($video_home as $key => $item)
                                @if ($item["'id'"])
                                    <div class="carousel-item @if ($key == 0) active @endif">
                                        <div class="video">
                                            <iframe width="100%" src="https://www.youtube.com/embed/{{ $item["'id'"] }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

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


    @if ($question_home)
        <section class="home-question" style="@if (isset($home_question)) {{ $home_question }} @endif">
            <div class="container">
                <div class="row">

                    @for ($i = 0; $i < 10; $i++)
                        @if (isset($question_home[$i]))
                            <div class="col-12">
                                <div class="home-question-item">
                                    @foreach ($question_home[$i] as $key => $val)
                                        @if ($key == "'question'" && $val)
                                            <div class="home-question-title"
                                                onclick="showHomeAnswer('{{ $i }}')">
                                                <label>{{ $i + 1 }}. {!! $val !!}</label>
                                            </div>
                                        @endif
                                        @if ($key == "'answer'" && $val)
                                            <div class="home-question-answer"
                                                id="home-question-answer-{{ $i }}"> {!! $val !!}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        </section>
    @endif
    <section id="news-form-information" style="@if (isset($news_form_information)) {{ $news_form_information }} @endif">
        <div class="container p-4">
            <div class="info-customer ">
                <div class="row p-2 justify-content-center">
                    <div class="col-12 col-md-8 p-4 ">
                        <h3 class="text-center ">ĐẶT LỊCH HẸN TƯ VẤN MIỄN PHÍ</h3>
                        <div class="information">
                            <form id="contactForm">
                                <div class="form-group">
                                    <div class="row justify-content-around">
                                        <div class="col-12 col-md-6">
                                            <input type="text" class="form-control" placeholder="Họ và Tên"
                                                style="background: none ">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input type="text" class="form-control" placeholder="Số Điện Thoại"
                                                style="background: none ">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="7" placeholder="Nội dung cần tư vấn" style="background: none"></textarea>
                                </div>
                                <div class="btn-advise text-center" style="margin: 20px">
                                    <button type="submit" class="btn btn-primary">Gửi Thông Tin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            autoplay: {
                delay: 5000,
            },
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper0", {
            spaceBetween: 30,
            autoplay: {
                delay: 5000,
            },
            hashNavigation: {
                watchState: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
