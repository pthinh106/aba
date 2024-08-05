@extends('home.main')
@section('content')
    <section id="brand-banner-news" style="@if(isset($brabd_banner_news)){{$brabd_banner_news}} @endif">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-top">
                        <figure class="figure">
                            <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                            <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                            <img src="/template/home/images/banner-home.png" alt="Flowers" class="figure-img img-figure rounded auto-size" width="1110" height="233.67"  loading="lazy">
                        </figure>
                        {{--<picture>--}}
                        {{--<source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">--}}
                        {{--<source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">--}}
                        {{--<img src="/template/home/images/logo-mau.png" alt="Flowers">--}}
                        {{--</picture>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="brand-describe" style="@if(isset($brand_describe)){{$brand_describe}} @endif">
        <div class="container">
            <p class="text-justify mb-4">EB5 viết tắt của Employment based Fifth - là chương trình định cư Mỹ theo hình thức đầu tư thuộc hạng mục Immigrant Investor (Đầu tư định cư). Đây là hình thức cho phép nhà đầu tư được nộp hồ sơ xin thẻ xanh khi đáp ứng đủ các điều kiện đầu tư.</p>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-4">
                    <div class="p-4">
                        <div class="align-content-between">
                            <p class="text-justify">Có hai hạng mục đầu tư định cư Mỹ:</p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-8">
                    <div class="p-4">
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fa fa-circle mt-1" aria-hidden="true" style="font-size: 9px"></i></span>Đầu tư $800,000 trong vùng TEA (Vùng có tỷ lệ thất nghiệp cao hoặc vùng nông thôn được Sở di trú quy định)</li>
                            <li><span class="fa-li"><i class="fa fa-circle mt-1" aria-hidden="true" style="font-size: 9px"></i></span>Đầu tư $1,050,000 ngoài vùng TEA</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="brand-review" style="@if(isset($banner_review)){{$banner_review}} @endif">
        <div class="container">
            <div class="title-review mb-4">
                <p class="text-center font-weight-bold">GIỚI THIỆU VỀ ĐẤT NƯỚC MỸ</p>
            </div>
            <div class="row justify-content-center ">
                <div class="col-10 col-md-2 ">
                    <div class="p-1">
                        <p class="text-center font-weight-bold" style="margin: 0px">Thủ Đô</p>
                        <p class="text-center">Washington DC</p>
                    </div>
                </div>
                <div class="col-10 col-md-2 ">
                    <div class="p-1">
                        <p class="text-center font-weight-bold" style="margin: 0px">Diện tích</p>
                        <p class="text-center">9,834 triệu km2</p>
                    </div>
                </div>
                <div class="col-10 col-md-2 " >
                    <div class="p-1">
                        <p class="text-center font-weight-bold" style="margin: 0px">GDP</p>
                        <p class="text-center">20.94 tỷ đô (2020)</p>
                    </div>
                </div>
                <div class="col-10 col-md-2 ">
                    <div class="p-1">
                        <p class="text-center font-weight-bold" style="margin: 0px">Ngôn ngữ</p>
                        <p class="text-center">Tiếng Anh</p>
                    </div>
                </div>
                <div class="col-10 col-md-2 " >
                    <div class="p-1">
                        <p class="text-center font-weight-bold" style="margin: 0px ">Dân số</p>
                        <p class="text-center">329.5 triệu người</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="brand-benefit" style="@if(isset($banner_benefit)){{$banner_benefit}} @endif">
        <div class="container">
            <div class="title-benefit mb-4">
                <p class="text-center font-weight-bold">QUYỀN LỢI CHƯƠNG TRÌNH EB5  </p>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-4 mb-2">
                    <div class="brand-news-item  p-2">
                        <div class="brand-news-image">
                            <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                            <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                            <img src="/template/home/images/banner-home.png" width="125" height="150" class="auto-size" loading="lazy">
                        </div>
                        <div class="brand-news-content">
                            <p class="brand-news-content-title text-justify">Diện doanh nhân Visa L1A</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-2">
                    <div class="brand-news-item p-2">
                        <div class="brand-news-image">
                            <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                            <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                            <img src="/template/home/images/banner-home.png">
                        </div>
                        <div class="brand-news-content">
                            <p class="brand-news-content-title text-justify">Diện doanh nhân Visa L1A</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="brand-news-item p-2">
                        <div class="brand-news-image">
                            <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                            <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                            <img src="/template/home/images/banner-home.png">
                        </div>
                        <div class="brand-news-content">
                            <p class="brand-news-content-title text-justify">Diện doanh nhân Visa L1A</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-2">
                    <div class="brand-news-item p-2">
                        <div class="brand-news-image">
                            <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                            <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                            <img src="/template/home/images/banner-home.png">
                        </div>
                        <div class="brand-news-content">
                            <p class="brand-news-content-title text-justify">Diện doanh nhân Visa L1A</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-2">
                    <div class="brand-news-item p-2">
                        <div class="brand-news-image">
                            <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                            <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                            <img src="/template/home/images/banner-home.png">
                        </div>
                        <div class="brand-news-content">
                            <p class="brand-news-content-title text-justify">Diện doanh nhân Visa L1A</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-2">
                    <div class="brand-news-item p-2">
                        <div class="brand-news-image ">
                            <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                            <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                            <img src="/template/home/images/banner-home.png">
                        </div>
                        <div class="brand-news-content">
                            <p class="brand-news-content-title text-justify">Diện doanh nhân Visa L1A</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-advise text-center" style="margin-top: 20px">
                <button type="button" class="btn btn-primary">Đăng Kí Tư Vấn Miến Phí</button>
            </div>
        </div>
    </section>
    <section id="brand-information" style="@if(isset($banner_information)){{$banner_information}} @endif">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6 ">
                    <div class="p-4">
                        <div class="title-advantage">
                            <p class="text-center font-weight-bold">Ưu điểm của chương trình eb5</p>
                        </div>
                        <div class="iteam-advantage">
                            <ul clsss="list-advantage">
                                <ol>
                                    <li>
                                        Chương trình chính thức cho phép nhà đầu tư được nộp hồ sơ xin thẻ xanh Mỹ.
                                    </li>
                                    <li>
                                        Nhà đầu tư có thể lựa chọn đầu tư gián tiếp, không cần phải quản lý điều hành công việc kinh doanh tại Mỹ.
                                    </li>
                                    <li>
                                        Được phép sinh sống, làm việc, kinh doanh tại bất kỳ nơi nào ở Mỹ mà không cần thiết phải sinh sống tại nơi đầu tư.
                                    </li>
                                </ol>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 ">
                    <div class="p-4">
                        <div class="title-defect">
                            <p class="text-center font-weight-bold">Ưu điểm của chương trình eb5</p>
                        </div>
                        <div class="iteam-defect">
                            <ol clsss="list-defect">
                                <li>
                                    Quý anh chị cần phải thực hiện đầu tư tiền đầy đủ trước khi nộp hồ sơ vào Sở di trú Mỹ. Đây là hình thức đầu tư trước - chấp thuận sau
                                </li>
                                <li>
                                    Quý anh chị cần phải chờ đợi thời gian khoảng 3 - 4 năm để nhận được visa định cư. Những trường hợp Quý anh chị cần đi định cư gấp thì không thể lựa chọn phương án này được.
                                </li>
                                <li>
                                    Đây là hình thức đầu tư có rủi ro. Quý anh chị sẽ phải chấp nhận rằng số tiền mình đầu tư có thể gặp rủi ro nếu dự án không triển khai tốt.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </section>
    <section id="brand-risk" style="@if(isset($banner_risk)){{$banner_risk}} @endif">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 ">
                    <div class="p-2">
                        <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                        <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                        <img src="/template/home/images/banner-home.png">
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="p-4">
                        <div class="title-risk">
                            <p class="text-left font-weight-bold">Rủi ro chương trình EB5: </p>
                            <div class="risk">
                                <ol clsss="list-risk">
                                    <li>
                                        Rủi ro về chứng minh tài chính.
                                    </li>
                                    <li>
                                        Rủi ro về dự án.
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="title-risk">
                            <p class="text-left font-weight-bold">Biện pháp khắc phục: </p>
                            <div class="overcome">
                                <ol clsss="list-overcome">
                                    <li>
                                        Được hướng dẫn chuẩn bị hồ sơ, và thực hiện chứng minh tài chính từ những đơn vị có kinh nghiệm nhiều năm, những chuyên viên hồ sơ đã thực hiện nhiều hồ sơ chứng minh tài chính khác nhau.
                                    </li>
                                    <li>
                                        Nên tìm hiểu kỹ lưỡng về dự án và đặc biệt là track record - lịch sử thành công của họ. Để đảm bảo rằng dự án và trung tâm vùng có kinh nghiệm xử lý các tình huống có thể phát sinh trong quá trình thực hiện dự án.

                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id ="brand-condition" style="@if(isset($banner_condition)){{$banner_condition}} @endif">
        <div class="container">
            <div class="title-condition mb-4">
                <p class="text-center font-weight-bold">ĐIỀU KIỆN CHƯƠNG TRÌNH EB5</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 ">
                    <div class="p-2">
                        <div class="title-col-1-condition">
                            <p class="text-left">Chương trình định cư Mỹ EB5 là chương trình 5 không dành cho nhà đầu tư:</p>
                        </div>
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fa fa-square-o" aria-hidden="true"></i></span>Không yêu cầu độ tuổi</li>
                            <li><span class="fa-li"><i class="fa fa-square-o" aria-hidden="true"></i></span>Không yêu cầu kinh nghiệm</li>
                            <li><span class="fa-li"><i class="fa fa-square-o" aria-hidden="true"></i></span>Không yêu cầu bằng cấp</li>
                            <li><span class="fa-li"><i class="fa fa-square-o" aria-hidden="true"></i></span>Không yêu cầu ngôn ngữ</li>
                            <li><span class="fa-li"><i class="fa fa-square-o" aria-hidden="true"></i></span>Không yêu cầu sinh sống tại khu vực đầu tư</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="p-2">
                        <div class="title-col-2-condition">
                            <p class="text-left">Nhà đầu tư cần thực hiện đầu tư như sau:</p>
                        </div>
                        <ul class="fa-ul text-justify">
                            <li><span class="fa-li"><i class="fa fa-square-o" aria-hidden="true"></i></span>Đầu tư $800,000 vào một dự án thương mại tại Mỹ và dự án thuộc vùng TEA (tức là khu vực có tỷ lệ thất nghiệp cao hoặc vùng nông thôn do Sở di trú Mỹ quy định), hoặc</li>
                            <li><span class="fa-li"><i class="fa fa-square-o" aria-hidden="true"></i></span>Đầu tư $1,050,000 vào một dự án thương mại tại Mỹ và dự án nằm ngoài khu vực vùng TEA.</li>
                            <li><span class="fa-li"><i class="fa fa-square-o" aria-hidden="true"></i></span>Đồng thời, dự án cần phải tạo được tối thiểu 10 việc làm cho người Mỹ/ nhà đầu tư.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="btn-advise text-center" style="margin: 20px">
                <button type="button" class="btn btn-primary">Đăng Kí Tư Vấn Miến Phí</button>
            </div>
        </div>
    </section>
    <section id="brand-procedure" style="@if(isset($banner_procedure)){{$banner_procedure}} @endif">
        <div class="container">
            <div class="title-procedure mb-4">
                <p class="text-center font-weight-bold">QUY TRÌNH HỒ SƠ ĐỊNH CƯ MỸ EB5</p>
            </div>
            <div class="brand-news-image">
                <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                <img src="/template/home/images/banner-home.png">
            </div>
        </div>
    </section>
    <section class="brand-question" style="@if(isset($banner_question)){{$banner_question}} @endif">
        <div class="container">
            <div class="title-question">
                <P class="text-center font-weight-bold">NHỮNG CÂU HỎI THƯỜNG GẶP</P>
            </div>
            <div class="row">
                @for($i=1;$i<= 10; $i++)
                    <div class="col-12">
                        <div class="home-question-item">
                            <div class="home-question-title" onclick="showHomeAnswer('{{$i}}')"><label>{{$i}}. Câu hỏi</label></div>
                            <div class="home-question-answer" id="home-question-answer-{{$i}}"> Câu trả lời {{$i}}</div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section id="brand-form-information" style="@if(isset($banner_form_information)){{$banner_form_information}} @endif">
        <div class="container p-4">
            <div class="information-customer ">
                <div class="row p-2">
                    <div class="col-12 col-md-4 p-4">
                        <div class="left">
                            <source media="(min-width:650px)" srcset="/template/home/images/banner-home.png">
                            <source media="(min-width:465px)" srcset="/template/home/images/banner-home.png">
                            <img src="/template/home/images/banner-home.png">
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