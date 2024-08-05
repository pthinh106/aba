
@extends('home.main')

@section('content')
<div class="main">
    <section class="block " id="blockAdvise">
        <div class="advise pt-2">
            <div class="divider2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-inner text-center">
                            <h2 style="font-size: 2rem; text-transform: uppercase;">
                                @if (isset($data['name_vn']) && config('app.locale') == 'vn')
                                    Lĩnh vực tư vấn
                                @elseif (isset($data['name']))
                                    Consulting field
                                @endif
                            </h2>
                            <div class="is-divider divider clearfix" style="max-width:50px;background-color:rgb(178, 74, 59);height: 3px;display: block; margin: auto; width: 100%;"></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    @foreach ($arrHomeBox as $box)
                    <div class="col-12 col-sm-4 mt-4">
                        <div class="advise-item">
                            <div class="advise-item-image">
                                <picture>
                                    <source srcset="{{ isset($box->image) ? asset('storage/' . $box->image) : '' }}" type="image/webp">
                                    <img src="{{ isset($box->image) ? asset('storage/' . $box->image) : '' }}"  alt="" class="" loading="lazy">
                                </picture>
                            </div>
                            <div class="advise-item-title">
                                <a href="#">
                                    @if (config('app.locale') == 'vn' && isset($box->nameBox_VN))
                                        {{$box->nameBox_VN}}
                                    @elseif (isset($box->nameBox_US))
                                        {{$box->nameBox_US}}
                                    @endif
                                </a>
                            </div>
                            <div class="advise-item-desc">
                                <span>
                                    @if (config('app.locale') == 'vn' && isset($box->descriptionBox_VN))
                                        {{$box->descriptionBox_VN}}
                                    @elseif (isset($box->descriptionBox_US))
                                        {{$box->descriptionBox_US}}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="block py-4" id="blockActivities">
        <div class="container">
            <div class="divider2"></div>
            <div class="row">
                <div class="col-12 ">
                    <div class="col-inner text-center">
                        <h2 style="font-size: 2rem; text-transform: uppercase;">
                            @if (isset($data['name_vn']) && config('app.locale') == 'vn')
                                {{$data['name_vn']}}
                            @elseif (isset($data['name']))
                                {{$data['name']}}
                            @endif
                        </h2>
                        <div class="is-divider divider clearfix" style="max-width:50px;background-color:rgb(178, 74, 59);height: 3px;display: block; margin: auto; width: 100%;"></div>
                    </div>
                </div>
                <div class="col-12 mt-4 bg-white">
                    @if (isset($data['content_vn']) && config('app.locale') == 'vn')
                        {!! $data['content_vn'] !!}
                    @elseif (isset($data['content']))
                        {!! $data['content'] !!}
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="block banner-introduce pt-4" id="relativeParent">
        <div class="banner-overlay-50"></div>
        <div class="fill " id="absoluteChild">
            <div class="container h-100">
                <div class="banner-title-introduce py-5" id="animated-box" style="color: #ffffff;min-height: 300px;">
                    <h2 style="font-size: 30px; font-weight: 800;color: #ffffff">Bạn có bất cứ vấn đề nào về pháp lý</h2>
                    <p style="font-size: 18px;">Hãy gọi ngay cho chúng tôi để được giải quyết một cách hiệu quả nhất</p>
                    <a href="tel:(1) 407-760-0200" style="padding: 10px 20px;
                    background: #c10202;
                    color: #fff;
                    border-radius: 5px;
                    font-size: 20px;
                    font-weight: 500;">(1) 407-760-0200</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection