@extends('home.main')
@section('content')
    <style>
        .pagination{
            justify-content: center;
        }
        h1.title-news {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
        }
        .item-news {
            margin-top: 10px;
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .item-news:hover{
            background: #eee;
        }

        h3.item-news-title {
            font-size: 14px;
            /*color: #000000;*/
            padding: 5px 0;
            margin: 0;
            font-weight: 600;
        }
        p.item-news-description {
            color: #333;
        }
    </style>
    @if(isset($detail['seo_title']))
        <h1 style="display: none">{{$detail['seo_title']}}</h1>
    @endif
    @if(isset($detail->banner_pc) && $detail->banner_pc !=""  && isset($detail->banner_mb) && $detail->banner_mb!="")
    <section id="news_banner" style="@if(isset($news_banner_news)){{$news_banner_news}} @endif">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="banner-top">
                        <figure class="figure">
                            <source media="(min-width:465px)" srcset="{{$detail['banner_pc']}}">
                            <img src="{{$detail['banner_mb']}}" alt="{{$detail['name']}}" class="picture-img img-picture rounded">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    @if(isset($list))
        <section id="news-list-new" style="@if(isset($news_list_new)){{$news_list_new}} @endif">
            <div class="container mt-4">
                <h1 class="title-news">Tin tức</h1>
                <div class="row pb-2">

                        @foreach($list as $item)
                            <div class="col-12 col-lg-4 mb-2 item-news">
                                <a href="/tin-tuc/{{$item->slug}}.{{$item->id}}.html">
                                    <div class="item-news-img">
                                        <picture class="picture">
                                            {{--<source media="(min-width:465px)" srcset="storage/app/public/banner/uploads/2022/05/03/1651575389pcdinh-cu-chau-au-trang-chu.jpg">--}}
                                            <img src="{{$item->thumb}}" alt="{{$item->name}}" class="picture-img img-picture rounded auto-size" width="350" height="233.33" loading="lazy">
                                        </picture>
                                    </div>
                                    <div class="item-news-content">
                                        <h3 class="item-news-title">{{$item->name}}</h3>
                                        <p class="item-news-description">{{$item->description}}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach


                </div>
                {{ $list->links() }}
            </div>
        </section>
    @endif
    <section id="news-form-information" style="@if(isset($news_form_information)){{$news_form_information}} @endif">
        <div class="container p-4">
            <div class="information-customer ">
                <div class="row p-2">
                    <div class="col-12 col-md-4 p-4">
                        <div class="left">
                            <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                            <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                            <img src="/template/home/images/banner-home.png" width="306" height="116.17" class="auto-size" loading="lazy">
                        </div>
                    </div>
                    <div class="col-12 col-md-8 p-4 infor">
                        <div class="right">
                            <h3 class="text-center">Đăng Kí Nhận Thông Tin</h3>
                            <div class="information">
                                <form id="contactForm">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input type="email" class="form-control"  placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <div class="row justify-content-around">
                                            <div class="col-12 col-md-6">
                                                <label for="exampleFormControlInput1">Họ và Tên</label>
                                                <input type="email" class="form-control"  placeholder="Họ và Tên">
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="exampleFormControlInput1">Số Điện Thoại</label>
                                                <input type="email" class="form-control"  placeholder="Số Điện Thoại">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Ghi Chú</label>
                                        <textarea class="form-control"  rows="3"></textarea>
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
        </div>
    </section>
@endsection