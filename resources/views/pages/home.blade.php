@extends("layouts.template",['titre'=>"Accueil"])

@section("style")
@endsection

@section("content")
<!-- banner-section -->
<section class="banner-section">
    <div class="banner-carousel">
        <div class="swiper-container banner-content">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/banner/slides/s1.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>@lang('info.slide.s5.t1')</h2>
                            <span>@lang('info.slide.s5.t2')</span>
                            <h2>@lang('info.slide.s5.t3') </h2>
                            <p>
                                @lang('info.slide.s5.desc')
                            </p>
                            <div class="btn-box">
                                <a href="#" class="banner-btn">@lang('info.view_more') </a>
                            </div>
                        </div>
                    </div>
                    <div class="othre-text centred">
                        <span class="animation_text_word">@lang('info.slogant')</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/banner/slides/s8.png);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>@lang('info.slide.s4.t1')</h2>
                            <span>@lang('info.slide.s4.t2')</span>
                            <h2>@lang('info.slide.s4.t3')</h2>
                            <p>@lang('info.slide.s4.desc')</p>
                            <div class="btn-box">
                                <a href="index.html" class="banner-btn">@lang('info.view_more')</a>
                            </div>
                        </div>
                    </div>
                    <div class="othre-text centred">
                        <span class="animation_text_word"></span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/banner/slides/s10.png);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>@lang('info.slide.s3.t1')</h2>
                            <span>@lang('info.slide.s3.t2')</span>
                            <h2>@lang('info.slide.s3.t3')</h2>
                            <p>@lang('info.slide.s3.desc')</p>
                            <div class="btn-box">
                                <a href="" class="banner-btn">@lang('info.view_more')</a>
                            </div>
                        </div>
                    </div>
                    <div class="othre-text centred">
                        <span class="animation_text_word"></span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/banner/slides/s3.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>@lang('info.slide.s1.t1')</h2>
                            <span>@lang('info.slide.s1.t2')</span>
                            <h2>@lang('info.slide.s1.t3')</h2>
                            <p>@lang('info.slide.s1.desc')</p>
                            <div class="btn-box">
                                <a href="index.html" class="banner-btn">@lang('info.view_more')</a>
                            </div>
                        </div>
                    </div>
                    <div class="othre-text centred">
                        <span class="animation_text_word"></span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/banner/slides/s5.png);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h2>@lang('info.slide.s2.t1')</h2>
                            <span>@lang('info.slide.s2.t2')</span>
                            <h2>@lang('info.slide.s2.t3')</h2>
                            <p>@lang('info.slide.s2.desc')</p>
                            <div class="btn-box">
                                <a href="" class="banner-btn">@lang('info.view_more')</a>
                            </div>
                        </div>
                    </div>
                    <div class="othre-text centred">
                        <span class="animation_text_word"></span>
                    </div>
                </div>
            </div>
            <div class="swiper-nav-button">
                <!-- Add Arrows -->
                <div class="swiper-button-next"><i class="far fa-arrow-right"></i></div>
                <div class="swiper-button-prev"><i class="far fa-arrow-left"></i></div>
            </div>
        </div>
    </div>
    <div class="banner-thumbs-carousel">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-10.png);"></div>
        <div class="swiper-container banner-thumbs">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-item">
                        <div class="icon-box">
                            <div class="icon"><i class="icon-childrens-book"></i></div>
                            <span>01</span>
                        </div>
                        <div class="text">
                            <span class="top-text">Faire un don pour :</span>
                            <h3>L'education</h3>
                            <a href="index.html">@lang('info.view_more')</a>
                        </div>
                        <figure class="image-box"><img src="assets/images/banner/ban2.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-item">
                        <div class="icon-box">
                            <div class="icon"><i class="icon-first-aid-kit"></i></div>
                            <span>02</span>
                        </div>
                        <div class="text">
                            <span class="top-text">Faire un don pou :</span>
                            <h3>La non violence</h3>
                            <a href="">@lang('info.view_more')</a>
                        </div>
                        <figure class="image-box"><img src="assets/images/banner/ban1.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-item">
                        <div class="icon-box">
                            <div class="icon"><i class="icon-save"></i></div>
                            <span>03</span>
                        </div>
                        <div class="text">
                            <span class="top-text">Faire un don pour :</span>
                            <h3>L'Environemet</h3>
                            <a href="">@lang('info.view_more')</a>
                        </div>
                        <figure class="image-box"><img src="assets/images/banner/ban3.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="swiper-nav-button">
                <!-- Add Arrows -->
                <div class="swiper-button-next"><i class="fas fa-arrow-left"></i></div>
                <div class="swiper-button-prev"><i class="fas fa-arrow-right"></i></div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->


<!-- about-section -->
<section class="about-section sec-pad">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_1">
                    <div class="image-box">
                        <figure class="image image-1"><img src="assets/images/resource/about-1.png" alt=""></figure>
                        <figure class="image image-2"><img src="assets/images/resource/about-2.png" alt=""></figure>
                        <figure class="image image-3"><img src="assets/images/icons/heart-2.png" alt=""></figure>
                        <figure class="image image-4"><img src="assets/images/icons/heart-3.png" alt=""></figure>
                        <figure class="image image-5"><img src="assets/images/icons/imoji-1.png" alt=""></figure>
                        <div class="text">
                            <h4><i class="icon-donation"></i>Nous avons financé 10K dollars</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <div class="inner">
                            <div class="sec-title">
                                <span class="top-text">Apropos de FIK</span>
                                <h2>Fondation Ilunga Kabuyi</h2>
                            </div>
                            <div class="text">
                                <p>la fondation ILUNGA KABUYI en sigle F.I.K est 
                                    une organisation non gouvernemental panafricaine 
                                    a pour un but non lucratif et d origine congolaise</p>
                                <p></p>
                            </div>
                            <div class="btn-box">
                                <a href="about.html" class="theme-btn btn-one">@lang('info.view_more')</a>
                            </div>
                        </div>
                        <div class="funfact-inner">
                            <div class="counter-block-one wow fadeInRight animated animated" data-wow-delay="00ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-charity"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="1278">0</span>
                                    </div>
                                    <h4>Volontaire</h4>
                                </div>
                            </div>
                            <div class="counter-block-one wow fadeInRight animated animated" data-wow-delay="100ms"
                                data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-donation-1"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500"
                                            data-stop="1.100">0</span><span>k</span>
                                    </div>
                                    <h4>Bénéficiaires</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- case-section -->
<section class="case-section">
    <div class="auto-container">
        <div class="tabs-box">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="title-inner text-right">
                        <div class="sec-title">
                            <span class="top-text">@lang('info.cause.section')</span>
                            <h2>@lang('info.cause.gtitre')</h2>
                        </div>
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">
                                    <h5>Toutes Categories</h5>
                                    <div class="icon"><i class="fal fa-angle-left"></i></div>
                                </li>
                                <li class="tab-btn" data-tab="#tab-2">
                                    <h5>Education</h5>
                                    <div class="icon"><i class="fal fa-angle-left"></i></div>
                                </li>
                                <li class="tab-btn" data-tab="#tab-3">
                                    <h5>Droits humains</h5>
                                    <div class="icon"><i class="fal fa-angle-left"></i></div>
                                </li>
                                <li class="tab-btn" data-tab="#tab-4">
                                    <h5>Agriculture</h5>
                                    <div class="icon"><i class="fal fa-angle-left"></i></div>
                                </li>
                                <li class="tab-btn" data-tab="#tab-5">
                                    <h5>Santé</h5>
                                    <div class="icon"><i class="fal fa-angle-left"></i></div>
                                </li>
                                <li class="tab-btn" data-tab="#tab-6">
                                    <h5>Environment</h5>
                                    <div class="icon"><i class="fal fa-angle-left"></i></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c3.png" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$42,000 <span>/ $80,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="53%"></div>
                                                    </div>
                                                    <div class="count-text">53%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Health &
                                                            Food</a></div>
                                                    <h3><a href="donation-details.html">Potable Water for Villages In
                                                            Mozambique</a></h3>
                                                    <p>Indignation and dislike men who are like most beguiled
                                                        demoralized.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>28 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>40+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/case-2.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$15,000 <span>/ $65,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="24%"></div>
                                                    </div>
                                                    <div class="count-text">24%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Hunger &
                                                            Nutrition</a></div>
                                                    <h3><a href="donation-details.html">Feed Nutritious Meals to a Poor
                                                            Rural Child</a></h3>
                                                    <p>Blinded by desire that they cannot foresee the pain and trouble
                                                        bound too.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>45 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>08+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/case-3.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$38,000 <span>/ $50,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="76%"></div>
                                                    </div>
                                                    <div class="count-text">76%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html">#
                                                            Treatment</a></div>
                                                    <h3><a href="donation-details.html">Help Differently Abled Person to
                                                            Feel Confident</a></h3>
                                                    <p>Equal blame belongs to those who fail in their duty through
                                                        weakness.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>60 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>67+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c3.png" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$42,000 <span>/ $80,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="53%"></div>
                                                    </div>
                                                    <div class="count-text">53%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html">#
                                                            Education</a></div>
                                                    <h3><a href="donation-details.html">Potable Water for Villages In
                                                            Mozambique</a></h3>
                                                    <p>Indignation and dislike men who are like most beguiled
                                                        demoralized.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>28 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>40+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c4.png" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$15,000 <span>/ $65,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="24%"></div>
                                                    </div>
                                                    <div class="count-text">24%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html">#
                                                            Education</a></div>
                                                    <h3><a href="donation-details.html">Feed Nutritious Meals to a Poor
                                                            Rural Child</a></h3>
                                                    <p>Blinded by desire that they cannot foresee the pain and trouble
                                                        bound too.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>45 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>08+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/case-3.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$38,000 <span>/ $50,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="76%"></div>
                                                    </div>
                                                    <div class="count-text">76%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html">#
                                                            Education</a></div>
                                                    <h3><a href="donation-details.html">Help Differently Abled Person to
                                                            Feel Confident</a></h3>
                                                    <p>Equal blame belongs to those who fail in their duty through
                                                        weakness.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>60 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>67+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c1.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$42,000 <span>/ $80,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="53%"></div>
                                                    </div>
                                                    <div class="count-text">53%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Health &
                                                            Food</a></div>
                                                    <h3><a href="donation-details.html">Potable Water for Villages In
                                                            Mozambique</a></h3>
                                                    <p>Indignation and dislike men who are like most beguiled
                                                        demoralized.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>28 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>40+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c2.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$15,000 <span>/ $65,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="24%"></div>
                                                    </div>
                                                    <div class="count-text">24%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Health &
                                                            Food</a></div>
                                                    <h3><a href="donation-details.html">Feed Nutritious Meals to a Poor
                                                            Rural Child</a></h3>
                                                    <p>Blinded by desire that they cannot foresee the pain and trouble
                                                        bound too.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>45 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>08+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c3.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$38,000 <span>/ $50,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="76%"></div>
                                                    </div>
                                                    <div class="count-text">76%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Health &
                                                            Food</a></div>
                                                    <h3><a href="donation-details.html">Help Differently Abled Person to
                                                            Feel Confident</a></h3>
                                                    <p>Equal blame belongs to those who fail in their duty through
                                                        weakness.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>60 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>67+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-4">
                            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c8.png" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$42,000 <span>/ $80,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="53%"></div>
                                                    </div>
                                                    <div class="count-text">53%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Hunger &
                                                            Nutrition</a></div>
                                                    <h3><a href="donation-details.html">Potable Water for Villages In
                                                            Mozambique</a></h3>
                                                    <p>Indignation and dislike men who are like most beguiled
                                                        demoralized.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>28 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>40+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c8.png" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$15,000 <span>/ $65,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="24%"></div>
                                                    </div>
                                                    <div class="count-text">24%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Hunger &
                                                            Nutrition</a></div>
                                                    <h3><a href="donation-details.html">Feed Nutritious Meals to a Poor
                                                            Rural Child</a></h3>
                                                    <p>Blinded by desire that they cannot foresee the pain and trouble
                                                        bound too.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>45 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>08+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/case-3.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$38,000 <span>/ $50,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="76%"></div>
                                                    </div>
                                                    <div class="count-text">76%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Hunger &
                                                            Nutrition</a></div>
                                                    <h3><a href="donation-details.html">Help Differently Abled Person to
                                                            Feel Confident</a></h3>
                                                    <p>Equal blame belongs to those who fail in their duty through
                                                        weakness.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>60 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>67+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="tab" id="tab-5">
                            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c7.png" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$42,000 <span>/ $80,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="53%"></div>
                                                    </div>
                                                    <div class="count-text">53%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html">#
                                                            Treatment</a></div>
                                                    <h3><a href="donation-details.html">Potable Water for Villages In
                                                            Mozambique</a></h3>
                                                    <p>Indignation and dislike men who are like most beguiled
                                                        demoralized.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>28 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>40+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/case-2.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$15,000 <span>/ $65,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="24%"></div>
                                                    </div>
                                                    <div class="count-text">24%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html">#
                                                            Treatment</a></div>
                                                    <h3><a href="donation-details.html">Feed Nutritious Meals to a Poor
                                                            Rural Child</a></h3>
                                                    <p>Blinded by desire that they cannot foresee the pain and trouble
                                                        bound too.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>45 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>08+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/case-3.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$38,000 <span>/ $50,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="76%"></div>
                                                    </div>
                                                    <div class="count-text">76%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html">#
                                                            Treatment</a></div>
                                                    <h3><a href="donation-details.html">Help Differently Abled Person to
                                                            Feel Confident</a></h3>
                                                    <p>Equal blame belongs to those who fail in their duty through
                                                        weakness.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>60 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>67+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="tab" id="tab-6">
                            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/c9.png" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$42,000 <span>/ $80,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="53%"></div>
                                                    </div>
                                                    <div class="count-text">53%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Water &
                                                            Environment</a></div>
                                                    <h3><a href="donation-details.html">Potable Water for Villages In
                                                            Mozambique</a></h3>
                                                    <p>Indignation and dislike men who are like most beguiled
                                                        demoralized.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>28 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>40+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/case-2.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$15,000 <span>/ $65,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="24%"></div>
                                                    </div>
                                                    <div class="count-text">24%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Water &
                                                            Environment</a></div>
                                                    <h3><a href="donation-details.html">Feed Nutritious Meals to a Poor
                                                            Rural Child</a></h3>
                                                    <p>Blinded by desire that they cannot foresee the pain and trouble
                                                        bound too.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>45 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>08+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="case-block-one">
                                    <div class="inner-box">
                                        <figure class="image-box"><img src="assets/images/case/case-3.jpg" alt="">
                                        </figure>
                                        <div class="lower-content">
                                            <div class="shape"
                                                style="background-image: url(assets/images/shape/shape-11.png);"></div>
                                            <div class="donate-amount clearfix">
                                                <div class="amount-box">
                                                    <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                                    <h5>Charity Raised</h5>
                                                    <div class="price">$38,000 <span>/ $50,000</span></div>
                                                </div>
                                                <div class="percentage-box">
                                                    <div class="bar">
                                                        <div class="bar-inner count-bar" data-percent="76%"></div>
                                                    </div>
                                                    <div class="count-text">76%</div>
                                                </div>
                                            </div>
                                            <div class="inner">
                                                <div class="text">
                                                    <div class="category"><a href="donation-details.html"># Water &
                                                            Environment</a></div>
                                                    <h3><a href="donation-details.html">Help Differently Abled Person to
                                                            Feel Confident</a></h3>
                                                    <p>Equal blame belongs to those who fail in their duty through
                                                        weakness.</p>
                                                </div>
                                                <ul class="info-box clearfix">
                                                    <li>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <h5>Days</h5>
                                                        <p>60 Days Left</p>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-users"></i>
                                                        <h5>67+</h5>
                                                        <p>Suppoters</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- case-section end -->


<!-- recent-case-section -->
{{-- <section class="recent-case-section">
    <div class="bg-layer" style="background-image: url(assets/images/background/5.jpg);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
    <div class="auto-container">
        <div class="inner-box">
            <div class="shape" style="background-image: url(assets/images/shape/shape-21.png);"></div>
            <div class="inner">
                <div class="sec-title centred light">
                    <span class="top-text">Les recents donneurs</span>
                    <h2>Des milliers de donateurs choisissent FIK <br />
                        pour des causes à fort impact</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                    <div class="single-item">
                        <figure class="image-box"><img src="assets/images/resource/thumb-1.png" alt=""></figure>
                        <div class="text">
                            <h3>Jasper Flelix, <span>Liverpool</span></h3>
                            <h6>Donated $250</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- recent-case-section end -->


<!-- benefits-section -->
<section class="benefits-section">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-15.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                <div class="title-inner">
                    <div class="sec-title">
                        <span class="top-text">@lang('info.avantage.section')</span>
                        <h2>@lang('info.avantage.grandtitre')</h2>
                    </div>
                    <div class="text">
                        <p>@lang('info.avantage.stitre')</p>
                        <a href="index.html" class="theme-btn btn-one">@lang('info.view_more')</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                <div class="inner-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <span>01</span>
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);">
                                    </div>
                                    <div class="shape-2"
                                        style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <div class="icon"><i class="icon-stop-hand-drawn-signal-rhomb"></i></div>
                                </div>
                                <h3>@lang('info.avantage.s1.t1')</h3>
                                <p>@lang('info.avantage.s1.desc')</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <span>02</span>
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);">
                                    </div>
                                    <div class="shape-2"
                                        style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <div class="icon"><i class="icon-puzzle-piece-shape-handmade-draw"></i></div>
                                </div>
                                <h3>@lang('info.avantage.s2.t1')</h3>
                                <p>@lang('info.avantage.s2.desc')</p>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <span>03</span>
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);">
                                    </div>
                                    <div class="shape-2"
                                        style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <div class="icon"><i class="icon-financial-bar-chart"></i></div>
                                </div>
                                <h3>@lang('info.avantage.s3.t1')</h3>
                                <p>@lang('info.avantage.s3.desc')</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <span>04</span>
                                <div class="icon-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);">
                                    </div>
                                    <div class="shape-2"
                                        style="background-image: url(assets/images/shape/shape-14.png);"></div>
                                    <div class="icon"><i class="icon-house-with-heart-hand-drawn-building"></i></div>
                                </div>
                                <h3>@lang('info.avantage.s4.t1')</h3>
                                <p>@lang('info.avantage.s4.desc')</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- benefits-section -->


<!-- video-section -->
<section class="video-section" style="background-image: url(assets/images/background/6.jpg);">
    <div class="auto-container">
        <div class="video-carousel owl-carousel owl-theme owl-dots-none">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure class="image-box"><img src="assets/images/resource/video-1.jpg" alt=""></figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title light">
                            <span class="top-text">Charity VideoTour</span>
                            <h2>Social Art for Behaviour Change Approach</h2>
                        </div>
                        <div class="text">
                            <p>Laborious physical exercise, except to obtain advantages from it but who has any right.
                            </p>
                        </div>
                        <div class="video-btn">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-16.png);"></div>
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                                data-caption=""><i class="icon-play-arrow"></i>Play Video</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure class="image-box"><img src="assets/images/resource/video-2.jpg" alt=""></figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title light">
                            <span class="top-text">Charity VideoTour</span>
                            <h2>What Has Aid <br />Ever Done For Anyone?</h2>
                        </div>
                        <div class="text">
                            <p>Find fault with a man who chooses to enjoy pleasure that has no annoying consequences.
                            </p>
                        </div>
                        <div class="video-btn">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-16.png);"></div>
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                                data-caption=""><i class="icon-play-arrow"></i>Play Video</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <figure class="image-box"><img src="assets/images/resource/video-3.jpg" alt=""></figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title light">
                            <span class="top-text">Charity VideoTour</span>
                            <h2>Social Art for Behaviour Change Approach</h2>
                        </div>
                        <div class="text">
                            <p>Laborious physical exercise, except to obtain advantages from it but who has any right.
                            </p>
                        </div>
                        <div class="video-btn">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-16.png);"></div>
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                                data-caption=""><i class="icon-play-arrow"></i>Play Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video-section end -->




@include("parties.team")



<!-- news-section -->
{{-- <section class="news-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <span class="top-text">@lang('info.blog.section')</span>
            <h2>@lang('info.blog.stitreBlog')</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news.png"
                                    alt=""></a></figure>
                        <div class="content-box">
                            <div class="text">
                                <span class="post-date">03.03.2021</span>
                                <div class="category"><a href="blog-details.html"># National Day</a></div>
                                <h3><a href="blog-details.html">This is World Cancer Day, We Provide Care</a></h3>
                                <p>Our being able do what we like best pleasure is to welcomed. . .</p>
                            </div>
                            <div class="info clearfix">
                                <div class="link-box pull-left"><a href="blog-details.html">More Details</a></div>
                                <div class="comment-box pull-right"><a href="blog-details.html"><i
                                            class="far fa-comment"></i>08 Cmts</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news.png"
                                    alt=""></a></figure>
                        <div class="content-box">
                            <div class="text">
                                <span class="post-date">24.02.2021</span>
                                <div class="category"><a href="blog-details.html"># Treatment</a></div>
                                <h3><a href="blog-details.html">I Want to Get Every People Volunteering</a></h3>
                                <p>Our being able do what we like best pleasure is to welcomed. . .</p>
                            </div>
                            <div class="info clearfix">
                                <div class="link-box pull-left"><a href="blog-details.html">More Details</a></div>
                                <div class="comment-box pull-right"><a href="blog-details.html"><i
                                            class="far fa-comment"></i>03 Cmts</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/news.png"
                                    alt=""></a></figure>
                        <div class="content-box">
                            <div class="text">
                                <span class="post-date">08.01.2021</span>
                                <div class="category"><a href="blog-details.html"># Health & Food</a></div>
                                <h3><a href="blog-details.html">The Last Day of World Hunger Month</a></h3>
                                <p>Our being able do what we like best pleasure is to welcomed. . .</p>
                            </div>
                            <div class="info clearfix">
                                <div class="link-box pull-left"><a href="blog-details.html">More Details</a></div>
                                <div class="comment-box pull-right"><a href="blog-details.html"><i
                                            class="far fa-comment"></i>08 Cmts</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- news-section end -->





@endsection

@section("script")


@endsection
