function showHomeAnswer(id) {
    const boxes = document.querySelectorAll('.home-question-answer');
    boxes.forEach(box => {
        box.style.display = 'none';
    });
    // document.getElementById('home-question-answer-'+id).style.display = 'block';
    $('#home-question-answer-'+id).fadeIn("slow");
}
function closeModal(id) {
    document.getElementById(id).style.display = "none";
    document.querySelector('html').style.overflow = "";
}
function openModal(id) {
    document.getElementById(id).style.display = "block";
    document.querySelector('html').style.overflow = "hidden";
}
function closeActionPromotion(id) {
    var cacheName = getPopupPromotionCache();
    if (cacheName) {
        document.getElementById(id).style.display = "none";
        setCookie(cacheName, 1, 1);
    }
}
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getPopupPromotionCache() {
    if (document.getElementById('popup-promotion-cache')) {
        return document.getElementById('popup-promotion-cache').value;
    }
    return '';
}
function closePopupPromotion() {
    if (document.getElementById('popup-promotion')) {
        var cacheName = getPopupPromotionCache();
        closeModal('popup-promotion');
        setCookie(cacheName, 1, 1);
        closeActionPromotion('action-promotion');
    }
}

function select_style() {
    $('select.custom-select').each(function () {
        var $this = $(this);
        if ($this.siblings('.custom-select-options').length <= 0) {
            var numberOfOptions = $(this).children('option').length;
            var val = $(this).val();
            $this.hide();
            $this.wrap('<div class="custom-select-wrapper"></div>');
            $this.after('<div class="custom-select">' + $this.children('option').eq(0).text() + '</div>');
            var $styledSelect = $this.next('div.custom-select');
            var $list = $('<ul />', {'class': 'custom-select-options'}).insertAfter($styledSelect);
            $list.addClass('none-active');
            for (var i = 0; i < numberOfOptions; i++) {
                var active = (val == $this.children('option').eq(i).val()) ? 'active' : '';
                if (val == $this.children('option').eq(i).val()) {
                    $styledSelect.text($this.children('option').eq(i).text());
                }
                $('<li />', {
                    text: $this.children('option').eq(i).text(),
                    rel: $this.children('option').eq(i).val(),
                    class: active,
                }).appendTo($list);
            }
            var $listItems = $list.children('li');
            $styledSelect.click(function (e) {
                $(document).find('.custom-select-options').not($list).addClass('none-active');
                $(document).find('.custom-select').not(this).removeClass('active');
                e.stopPropagation();
                $('div.custom-select-styled.active').not(this).each(function () {
                    $(this).removeClass('active').next('ul.custom-select-options').addClass('none-active');
                })
                $(this).toggleClass('active').next('ul.custom-select-options').toggleClass('none-active');
            });
            $listItems.click(function (e) {
                e.stopPropagation();
                $styledSelect.text($(this).text()).removeClass('active');
                if ((val != $(this).attr('rel') || $(this).attr('rel') == '') && !$(this).hasClass('active')) {
                    val = $(this).attr('rel');
                    $list.children('li').removeClass('active');
                    $(this).addClass('active');
                    $this.val($(this).attr('rel'));
                    $this.trigger('change');
                }
                $list.addClass('none-active');
            });
            $(document).click(function () {
                $styledSelect.removeClass('active');
                $list.addClass('none-active');
            });
        }
    });
}
function change_alias(alias) {
    var str = alias;
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
    str = str.replace(/đ/g,"d");
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
    str = str.replace(/ + /g," ");
    str = str.trim();
    return str;
}
function lazyload() {
    var lazyImages = [].slice.call(document.querySelectorAll(".lazy-image"));
    if (lazyImages.length > 0) {
        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        if (lazyImage.dataset.src !== undefined && lazyImage.dataset.src != '') {
                            lazyImage.src = lazyImage.dataset.src;
                        }
                        if (lazyImage.dataset.srcset !== undefined && lazyImage.dataset.srcset != '') {
                            lazyImage.srcset = lazyImage.dataset.srcset;
                        }
                        lazyImageObserver.unobserve(lazyImage);
                        lazyImage.classList.remove("lazy-image");
                    }
                });
            });

            lazyImages.forEach(function (lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        }
        else {
            lazyImages.forEach(function(lazyImage){
                if (lazyImage.dataset.src !== undefined && lazyImage.dataset.src != '') {
                    lazyImage.src = lazyImage.dataset.src;
                }
                if (lazyImage.dataset.srcset !== undefined && lazyImage.dataset.srcset != '') {
                    lazyImage.srcset = lazyImage.dataset.srcset;
                }
            });
        }
    }
    var lazyPictures = [].slice.call(document.querySelectorAll(".lazy-picture > source"));
    if (lazyPictures.length > 0) {
        if ("IntersectionObserver" in window) {
            let lazyPictureObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        let lazyPicture = entry.target;
                        lazyPicture.srcset = lazyPicture.dataset.srcset;
                        lazyPicture.nextElementSibling.src = lazyPicture.dataset.srcset;
                        lazyPicture.parentElement.classList.remove("lazy-picture");
                        lazyPictureObserver.unobserve(lazyPicture);
                    }
                });
            });

            lazyPictures.forEach(function (lazyPicture) {
                lazyPictureObserver.observe(lazyPicture);
            });
        }
        else {
            lazyPictures.forEach(function(picture){
                picture.srcset = picture.dataset.srcset;
            });
        }
    }
}
document.addEventListener("DOMContentLoaded", lazyload);
document.addEventListener("scroll", lazyload);
window.addEventListener("resize", lazyload);
window.addEventListener("orientationchange", lazyload);
$(document).ajaxComplete(function() {
    lazyload();
});
function heightContent() {
    var height = $(window).height();
    var f_height = $('#footer').outerHeight();
    $('#content').css('min-height',height-f_height);
}
$( window ).resize(function() {
    heightContent();
});
window.fcSettings = {
    token: "8ef955ed-4bca-40f9-afd0-e8617594a9ee",
    host: "https://wchat.freshchat.com",
    config: {
        cssNames: {
            widget: 'custom_fc_frame',
            expanded: 'custom_fc_expanded'
        },
        headerProperty: {
            hideChatButton: true
        }
    },
};

function isFunction(possibleFunction) {
    return typeof(possibleFunction) === typeof(Function);
}
function loadJS(obj) {
    if (obj.src !== undefined && obj.src != '') {
        var newJS;
        newJS = document.createElement('script');
        if (obj.async === true) {
            newJS.async = true;
        }
        if (isFunction(obj.onload)) {
            newJS.onload = obj.onload;
        }
        newJS.src = obj.src;
        document.head.appendChild(newJS);
    }
}
$(document).ready(function(){

    heightContent();
    select_style();

    $(document).on('click','#search-icon',function(){
        $('#search-form').slideToggle();
        $(this).find('i').toggleClass('fa-search');
        $(this).find('i').toggleClass('fa-close');
    });
    $(document).on('click','#menu-icon',function(){
        $('#main-menu > ul').toggleClass('actived');
        $(this).toggleClass('actived');
        $('body').toggleClass('openmenu');
    });
    $(document).on('click','.main-menu-sub-icon',function(){
        $(this).siblings('ul').slideToggle();
        $(this).toggleClass('actived');
    });
    $(document).on('click','.category-description .btn-read-more',function(e){
        e.preventDefault();
        $(this).parents('.btn-view-more').siblings('.category-description-content').css('max-height', 'none');
        $(this).parents('.btn-view-more').remove();
        return false;
    });
    $(document).on('click','.service-grid-view-more #btn-view-more',function(e){
        e.preventDefault();
        var $_this = $(this);
        if (!$_this.hasClass('loading')) {
            var page = $_this.attr('data-page');
            var listCateID = $_this.siblings('#listCateID').val();
            var listProblemID = $_this.siblings('#listProblemID').val();
            var limit = $_this.siblings('#limit').val();
            var count = $_this.siblings('#count').val();
            var current_html = $_this.html();
            $.ajax({
                url: '/ajax/view-more-service',
                type: 'post',
                data: {page: page, listCateID: listCateID, listProblemID: listProblemID, limit: limit},
                beforeSend: function () {
                    $_this.addClass('loading');
                    $_this.css('width', $_this.outerWidth());
                    $_this.html('Đang xử lý');
                },
                success: function (response) {
                    $_this.html(current_html);
                    $_this.css('width','');
                    $_this.removeClass('loading');
                    var obj = JSON.parse(response);
                    $_this.parent().before(obj.html);
                    count = count - limit;
                    if (count <= 0) {
                        $_this.parent().remove();
                    }
                    else {
                        $_this.attr('data-page', (parseInt(page) + 1));
                        $_this.siblings('#count').val(count);
                        $_this.find('span').text('(' + count + ')');
                    }
                }
            });
        }
    });

    $(document).on('click','.popup-close,.popup-overlay',function(e){
        $('.popup').hide();
    });
    $(document).on('click','.open-popup',function(e){
        var popup = $(this).attr('data-popup');
        $('#'+popup+'.popup').show();
    });
    // function getSelect2(){
    //     $('.select2').select2({
    //         width: 'resolve',
    //         scrollAfterSelect: false
    //     });
    //     $('.select2-container').css("width","100%");
    // }

    $(document).scroll(function() {
        var st = $(this).scrollTop();
        if ($(this).scrollTop() >= 300) {
            $('#scrollTopPage').fadeIn(100);
        } else {
            $('#scrollTopPage').fadeOut(100);
        }
    });
    $('#scrollTopPage').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
    $('.quick-link-list a[href^="#"]').on('click', function(event) {
        var target = $( $(this).attr('href') );
        var top = target.offset().top;
        var header = $('#header').outerHeight();
        if( target.length ) {
            $('html, body').animate({
                scrollTop: top - header,
            }, 500);
        }
    });
    $('.quick-link-button').on('click', function(event) {
        event.preventDefault();
        var text = $(this).text();
        var replace = $(this).attr('content');
        $(this).text(replace);
        $(this).attr('content',text);
        if(text == "Ẩn") {
            $('.quick-link-list').hide();
        }
        else {
            $('.quick-link-list').show();
        }
    });
    var view_store = $('.header-store-button').click(function(e) {
        e.preventDefault();
        $(this).siblings('.stores-list').slideToggle();
        $(this).toggleClass('active');
    });
    $(document).click(function (e) {
        if (!$(e.target).parents('.header-store-wrapper').length) {
            if (view_store.hasClass('active')) {
                view_store.siblings('.stores-list').slideToggle();
                view_store.removeClass('active');
            }
        }
        else if (!$(e.target).parents('.main-menu').length) {
            $('.main-menu,#menu-icon').removeClass('actived');
        }
    });
    $(document).on('focus', '.comment-content', function (e) {
        event.preventDefault();
        $(this).parents('form').find('.comment-hidden-group').addClass('opened');
    });
    $(document).on('click', '.comment-item-answer > a', function (e) {
        event.preventDefault();
        $(this).siblings('.comment-form').show().find('.comment-content').trigger('focus');
    });

    $('#btn-service-filter').click(function (e) {
        e.preventDefault();
        $(this).parents('.service-group').toggleClass('opened');
    });
    $('.service-group-search-key').keyup(function (e) {
        e.preventDefault();
        var $this = $(this);
        var val = change_alias($this.val().toLowerCase());
        var list = $this.parent().siblings('.service-group-main-list').find('.service-group-item');
        if (val) {
            $this.siblings('.service-group-search-btn').find('i').removeClass('fa-search').addClass('fa-times');
            list.each(function () {
                var text = change_alias($(this).text().toLowerCase());
                console.log(text);
                if (text.indexOf(val) != -1) {
                    $(this).show();
                }
                else {
                    $(this).hide();
                }
            });
        }
        else {
            $this.siblings('.service-group-search-btn').find('i').addClass('fa-search').removeClass('fa-times');
            list.show();
        }
    });
    $('.service-group-search-btn').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.siblings('.service-group-search-key').val('').trigger('keyup');
    });
    $('.service-group-phone .service-group-main-list').each(function () {
        var $this = $(this);
        if ($this.find('.service-group-item').length > 0) {
            $this.find('.service-group-item').hide();
            $this.find('.service-group-item').each(function () {
                if ($(this).index() < 16) {
                    $(this).show();
                }
            });
            if ($this.find('.service-group-item').length > 16) {
                $this.siblings('.service-group-search').find('.service-group-list-view-all').show();
            }
        }
    });
    $('.service-group-list-view-all a').click(function (e) {
        e.preventDefault();
        var $this = $(this);
        var list = $this.parents('.service-group-list').find('.service-group-main-list');
        if (list.hasClass('showall')){
            list.find('.service-group-item').hide();
            list.find('.service-group-item').each(function () {
                if ($(this).index() < 16) {
                    $(this).show();
                }
            });
            list.removeClass('showall');
            $this.text('Xem tất cả');
        }
        else {
            list.find('.service-group-item').show();
            list.addClass('showall');
            $this.text('Thu gọn');
        }
    });
    var delay = (function(obj){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })();
    $('#search-refresh').on('click',function(){
        $('#search-keyword').val('').trigger('keyup');
        $('#search-result').removeClass('opened');
        $(this).hide();
    });
    $('#search-keyword').keyup(function(e) {
        e.preventDefault();
        var $this = $(this);
        var val = $(this).val();
        if (val) {
            $('#search-refresh').show();
            delay(function () {
                $.post("/ajax/search", {
                    keyword: "" + val + "",
                }, function (data) {
                    $this.parent().siblings('#search-result').addClass('opened').find('.search-result-wrapper').html(data);
                    $this.focus();
                });
            }, 500);
        }
        else {
            $('#search-refresh').hide();
            $this.parent().siblings('#search-result').removeClass('opened').find('.search-result-wrapper').html('');
        }
    });

});

