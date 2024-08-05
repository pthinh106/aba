
<header class="">
    <div class="header-main">
        <div class="block banner-home">
            <div class="banner-overlay"></div>
            <div class="fill d-lg-flex align-items-center justify-content-between">
                <div class="container">
                    <div class="wrap d-lg-flex align-items-center justify-content-between">
                        <div class="logoHeader">
                            <picture>
                                <source srcset="/template/home/images/Logo_NRL.webp" type="image/webp">
                                <img src="/template/home/images/Logo_NRL.png" width="100px" alt="" class="imagesLogoHeader" loading="lazy">
                            </picture>
                        </div>
                        <div class="textHeader">
                            <div style="padding: 0 10%">
                                <p class="blog-name" style="color:#fffcff!important">Luật Nguyễn Rogers' Law </p>
                                <p class="blog-desc" style="line-height: 30px; color: #ffffff!important">American Immigration Law and Tax Regulations <br> Luật Xuất Nhập Cảnh, Di Trú, Làm Việc, và Thuế ở Mỹ </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="nav-main" id="nav-main">
    <div class="container">
        <div class="wrap">
            <div class="row align-items-center justify-content-center py-2 py-lg-0">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <button type="button"
                            id="mb-nav-button"
                            class="d-lg-none"
                            onclick="toggleClassElement('nav-mb,bg-overlay')">
                        <img src="/template/home/images/icon-menu.svg" width="18" height="14" class="auto-size" alt="Menu mobile">
                    </button>
                    <div class="mb-nav-main" id="nav-mb">
                        <div class="d-lg-none px-3 mb-2 d-flex align-items-center justify-content-between">
                                <span class="mb-close js-close-nav-mb pt-2 pr-2 pb-2" onclick="toggleClassElement('nav-mb,bg-overlay');">
                                    <img src="/template/home/images/icon-close.svg" width="16" height="16" class="auto-size" alt="close">
                                </span>
                            <div class="mb-logo">
                                <a href="#" class="logo">
                                    <img src="/template/home/images/logo.svg" width="100" height="18" class="auto-size" alt="Hnam Mobile" />
                                </a>
                            </div>

                        </div>
                        <div class="wrap-scroll">
                            <nav class="box box-2">
                                <ul>
                                    <li>
                                        <a href="/">
                                            {{ config('app.locale') == 'vn' ? 'Trang chủ' : 'Home' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/about-us">
                                            {{ config('app.locale') == 'vn' ? 'Hỏi' : 'About Us' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/immigration">
                                            {{ config('app.locale') == 'vn' ? 'Luật di trú' : 'Immigration Law'}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/new-business-establishment-product-promotion">
                                            {{ config('app.locale') == 'vn' ? 'Thành lập doanh nghiệp mới' : 'Business Establishment'}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/translation-and-interpretation">
                                            {{ config('app.locale') == 'vn' ? 'Luật thuế' : 'Tax Law'}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/warranty">
                                            {{ config('app.locale') == 'vn' ? 'Bảo hành' : 'Warranty'}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/representative-broker">
                                            {{ config('app.locale') == 'vn' ? 'Đại diện môi giới' : 'Legal Representative'}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/questions-answers">
                                            {{ config('app.locale') == 'vn' ? 'Hỏi và trả lời' : 'Questions & Answers' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/employment">
                                            {{ config('app.locale') == 'vn' ? 'Tuyển dụng' : 'Employment' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/special">
                                            {{ config('app.locale') == 'vn' ? 'Trả phí' : 'Paying Fees' }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/products">
                                            Books
                                        </a>    
                                    </li>
                                    <li>
                                        <a href="/profile">
                                            {{ config('app.locale') == 'vn' ? 'Luật Sư Cẩm Linh' : 'Camlinh Profile' }}
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-lg-none">
                        <a href="#" title="hotline">
                            <img src="/template/home/images/icon-phone.svg" width="20" height="20" class="auto-size" alt="hotline">
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="translate" id="translate">
    <div class="block ">
        <div class="advise pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-inner text-center">
                            <h2 style="font-size: 2rem; text-transform: uppercase;">Chuyển đổi ngôn ngữ</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-inner text-center">
                            <p style="font-size: 1.2rem; white-space: pre-line;">
                                Để đọc thông tin trên trang Web của Văn Phòng Luật Nguyễn Rogers bằng tiếng Việt Nam, 
                                bấm Tiếng Việt. Sau đó bấm vào trang thông tin Quý Vị muốn đọc trên mục liệt kê tên 
                                trang thông tin nằm bên trên.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="col-inner text-center">
                            <a href="/change-language/vn" class="btn btn-primary btn-lg" style="min-width: 20%; font-size: 1.5rem;">Tiếng Việt</a>
                            <a href="/change-language/en" class="btn btn-primary btn-lg" style="min-width: 20%; font-size: 1.5rem;">English</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>