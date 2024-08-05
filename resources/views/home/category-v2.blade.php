
@extends('home.main')

@section('content')
<div class="main">
    {{-- <section class="block " id="blockAdvise">
        <div class="advise pt-2">
            <div class="divider2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-inner text-center">
                            <h2 style="font-size: 2rem; text-transform: uppercase;">Lĩnh vực tư vấn</h2>
                            <div class="is-divider divider clearfix" style="max-width:50px;background-color:rgb(178, 74, 59);height: 3px;display: block; margin: auto; width: 100%;"></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-sm-4 mt-4">
                        <div class="advise-item">
                            <div class="advise-item-image">
                                <picture>
                                    <source srcset="/template/home/images/visa-picture-3.webp" type="image/webp">
                                    <img src="images/visa-picture-3.jpg"  alt="" class="" loading="lazy">
                                </picture>
                            </div>
                            <div class="advise-item-title">
                                <a href="#">DI TRÚ</a>
                            </div>
                            <div class="advise-item-desc">
                                <span>Văn phòng Luật Nguyễn Rogers tư vấn, phát thảo các bước cần thiết phải làm dựa trên tình trạng cụ thể của khách hàng, và hoàn tất hồ sơ xin tất cả các loại visa, giấy tờ cư trú và giấy phép làm việc tại Hoa Kỳ cho người nước ngoài, không phân biệt quốc tịch của người muốn xin đến Mỹ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 mt-4">
                        <div class="advise-item">
                            <div class="advise-item-image">
                                <picture>
                                    <source srcset="/template/home/images/business-establishment-4.webp" type="image/webp">
                                    <img src="images/business-establishment-4.jpg"  alt="" class="" loading="lazy">
                                </picture>
                            </div>
                            <div class="advise-item-title">
                                <a href="#">thẻ xanh</a>
                            </div>
                            <div class="advise-item-desc">
                                <span>Văn phòng Luật Nguyễn Rogers tư vấn, phát thảo các bước cần thiết phải làm dựa trên tình trạng cụ thể của khách hàng, và hoàn tất hồ sơ xin tất cả các loại visa, giấy tờ cư trú và giấy phép làm việc tại Hoa Kỳ cho người nước ngoài, không phân biệt quốc tịch của người muốn xin đến Mỹ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 mt-4">
                        <div class="advise-item">
                            <div class="advise-item-image">
                                <picture>
                                    <source srcset="/template/home/images/Interpretation-4.webp" type="image/webp">
                                    <img src="images/Interpretation-4.jpg"  alt="" class="" loading="lazy">
                                </picture>
                            </div>
                            <div class="advise-item-title">
                                <a href="#">TỔNG QUÁT LUẬT</a>
                            </div>
                            <div class="advise-item-desc">
                                <span>Văn phòng Luật Nguyễn Rogers tư vấn, phát thảo các bước cần thiết phải làm dựa trên tình trạng cụ thể của khách hàng, và hoàn tất hồ sơ xin tất cả các loại visa, giấy tờ cư trú và giấy phép làm việc tại Hoa Kỳ cho người nước ngoài, không phân biệt quốc tịch của người muốn xin đến Mỹ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 mt-4">
                        <div class="advise-item">
                            <div class="advise-item-image">
                                <picture>
                                    <source srcset="/template/home/images/warranty-program-1.webp" type="image/webp">
                                    <img src="images/warranty-program-1.jpg"  alt="" class="" loading="lazy">
                                </picture>
                            </div>
                            <div class="advise-item-title">
                                <a href="#">CHƯƠNG TRÌNH BẢO ĐẢM</a>
                            </div>
                            <div class="advise-item-desc">
                                <span>Văn phòng Luật Nguyễn Rogers tư vấn, phát thảo các bước cần thiết phải làm dựa trên tình trạng cụ thể của khách hàng, và hoàn tất hồ sơ xin tất cả các loại visa, giấy tờ cư trú và giấy phép làm việc tại Hoa Kỳ cho người nước ngoài, không phân biệt quốc tịch của người muốn xin đến Mỹ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 mt-4">
                        <div class="advise-item">
                            <div class="advise-item-image">
                                <picture>
                                    <source srcset="/template/home/images/business-representative.webp" type="image/webp">
                                    <img src="images/business-representative.jpg"  alt="" class="" loading="lazy">
                                </picture>
                            </div>
                            <div class="advise-item-title">
                                <a href="#">ĐẠI DIỆN PHÁP LÝ</a>
                            </div>
                            <div class="advise-item-desc">
                                <span>Văn phòng Luật Nguyễn Rogers tư vấn, phát thảo các bước cần thiết phải làm dựa trên tình trạng cụ thể của khách hàng, và hoàn tất hồ sơ xin tất cả các loại visa, giấy tờ cư trú và giấy phép làm việc tại Hoa Kỳ cho người nước ngoài, không phân biệt quốc tịch của người muốn xin đến Mỹ</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 mt-4">
                        <div class="advise-item">
                            <div class="advise-item-image">
                                <picture>
                                    <source srcset="/template/home/images/other-services.webp" type="image/webp">
                                    <img src="images/other-services.jpg"  alt="" class="" loading="lazy">
                                </picture>
                            </div>
                            <div class="advise-item-title">
                                <a href="#">Việc khác</a>
                            </div>
                            <div class="advise-item-desc">
                                <span>Văn phòng Luật Nguyễn Rogers tư vấn, phát thảo các bước cần thiết phải làm dựa trên tình trạng cụ thể của khách hàng, và hoàn tất hồ sơ xin tất cả các loại visa, giấy tờ cư trú và giấy phép làm việc tại Hoa Kỳ cho người nước ngoài, không phân biệt quốc tịch của người muốn xin đến Mỹ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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