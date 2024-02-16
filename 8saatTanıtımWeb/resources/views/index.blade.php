@extends('template.main')
@section('content')
    <section class="indexBannersLine">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="leftBannerText">
                        <img src="{{ asset('images/system/circle4.svg') }}" alt="">
                        <img class="absLeftImagesCircle" src="{{ asset('images/system/circle3.svg') }}" alt="">
                        <h1>Scan, order & pay. </h1>
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla suscipit odio eum, sint nam
                            quas quod nisi voluptates. Voluptate commodi quos quis dicta ipsa quam ex! Voluptates harum
                            debitis suscipit.</span>
                        <div class="spaceGenerateButtons">
                            <button class="dowlandApp">Uygulamayı İndir</button>
                            <a href="{{ route('invite') }}" class="registerRestorant">İşyeri Başvuru</a>
                        </div>
                        <div class="borderTopsRaateBanneLeft">
                            <div class="oneFlexibleRate">
                                <div class="textBottomHeader">15M <i class="fa-solid fa-plus"></i></div>
                                <span>Kullanıcı</span>
                            </div>
                            <div class="oneFlexibleRate">
                                <div class="textBottomHeader">5K <i class="fa-solid fa-plus"></i></div>
                                <span>İşyeri</span>
                            </div>
                            <div class="oneFlexibleRate">
                                <div class="textBottomHeader">100M <i class="fa-solid fa-plus"></i></div>
                                <span>Sipariş</span>
                            </div>

                        </div>
                        <div class="textScrooExplain"><i class="fa-solid fa-arrow-down"></i>Devam Etmek İçin Scrollu Aşağıya
                            İndiriniz !</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="bannerRightWebSites">
                        <img class="rotateLeft" src="{{ asset('images/system/circle.svg') }}" alt="">
                        <img class="rotateRight" src="{{ asset('images/system/circle2.svg') }}" alt="">
                        <img class="rotateRight3" src="{{ asset('images/system/circle3.svg') }}" alt="">
                        <img class="rotateRight4" src="{{ asset('images/system/circle4.svg') }}" alt="">
                        <div class="detailInsBannerRight">
                            <img class="phoneOne" src="{{ asset('images/system/Phone_1.png') }}" alt="">
                            <img class="phoneTwo" src="{{ asset('images/system/Phone_2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="generateSecondIndex">
        <div class="container">
            <div class="col-12">
                <div class=" centerSecondLine">
                    <p>Platform for the best hospitality businesses</p>
                    <span>
                        Butlaroo helps hospitality companies of all sizes to organize their services in a smarter way. With
                        more
                        than 5,000 connected locations, we always have a solution for your business.
                    </span>
                </div>
                <div class="textSlidersIndex">Platform for the best hospitality businesses Platform for the best hospitality
                    businesses</div>
            </div>
        </div>
    </section>
    <section class="AllRestrant">
        <div class="col-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="col-12">
                        <div class="GenerateIndexRestCard">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="restPageGenerate" data-aos="fade-up" data-aos-duration="3000">
                                    <img class="restImagesBge" src="{{ asset('images/system/food.jpg') }}" alt="">
                                    <div class="imagesAbsWhiteBlack">
                                        <img class="logoResstAllsCenter" src="{{ asset('images/system/hallen.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2" style="padding: 100px 15px">

                    <div class="GenerateIndexRestCard">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="restPageGenerate" data-aos="fade-up" data-aos-duration="3000">
                                <img class="restImagesBge" src="{{ asset('images/system/food.jpg') }}" alt="">
                                <div class="imagesAbsWhiteBlack">
                                    <img class="logoResstAllsCenter" src="{{ asset('images/system/hallen.png') }}"
                                        alt="">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2" style="padding: 200px 15px">

                    <div class="GenerateIndexRestCard">
                        @for ($i = 0; $i < 2; $i++)
                            <div class="restPageGenerate" data-aos="fade-up" data-aos-duration="3000">
                                <img class="restImagesBge" src="{{ asset('images/system/food.jpg') }}" alt="">
                                <div class="imagesAbsWhiteBlack">
                                    <img class="logoResstAllsCenter" src="{{ asset('images/system/hallen.png') }}"
                                        alt="">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2" style="padding: 200px 15px">

                    <div class="GenerateIndexRestCard">
                        @for ($i = 0; $i < 2; $i++)
                            <div class="restPageGenerate" data-aos="fade-up" data-aos-duration="3000">
                                <img class="restImagesBge" src="{{ asset('images/system/food.jpg') }}" alt="">
                                <div class="imagesAbsWhiteBlack">
                                    <img class="logoResstAllsCenter" src="{{ asset('images/system/hallen.png') }}"
                                        alt="">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2" style="padding: 100px 15px">

                    <div class="GenerateIndexRestCard">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="restPageGenerate" data-aos="fade-up" data-aos-duration="3000">
                                <img class="restImagesBge" src="{{ asset('images/system/food.jpg') }}" alt="">
                                <div class="imagesAbsWhiteBlack">
                                    <img class="logoResstAllsCenter" src="{{ asset('images/system/hallen.png') }}"
                                        alt="">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">

                    <div class="GenerateIndexRestCard">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="restPageGenerate" data-aos="fade-up" data-aos-duration="3000">
                                <img class="restImagesBge" src="{{ asset('images/system/food.jpg') }}" alt="">
                                <div class="imagesAbsWhiteBlack">
                                    <img class="logoResstAllsCenter" src="{{ asset('images/system/hallen.png') }}"
                                        alt="">
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="generateSecondIndex">
        <div class="container">
            <div class="col-12">
                <div class=" centerSecondLine">
                    <p style="color:var(--main_color)">RELIABLE PARTNERS</p>
                    <span>
                        We are an open platform that works with, and is trusted by many reliable partners.
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="slickIndexLineGenerated">
        <div class="container">
            <div class="slickGenerateMainClass">
                @for ($i = 0; $i < 10; $i++)
                    <div class="slicDetals">
                        <div class="cardGeneraSlickeed">
                            <img src="{{ asset('images/system/hallen.png') }}" alt="">
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section class="generateCenterCircletops">
        <div class="container">
            <div class="centerCircleMain">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="centercolumnGeneratemain">
                        <div class="absTextMainColorsLeft"><i class="fa-brands fa-apple"></i>5K</div>
                        <div class="absTextMainColorsRight"><i class="fa-brands fa-google-play"></i>5K</div>
                        <img class="imagePhoneAbs" src="{{ asset('images/system/last-mockup.png') }}" alt="">
                        <div class="circleTopGenerateOne">
                            <div class="circleTwoIndetaBorders">
                                <img class="circleCenterGenerateImage" src="{{ asset('images/system/coloss.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="generateSecondIndex">
        <div class="container">
            <div class="col-12">
                <div class=" centerSecondLine">
                    <p>Tahsin Akyol Hızlı Çalışma</p>
                    <span>
                        Start accepting omni-channel orders from your guests from within a single unified platform. Allow
                        your guests to place orders in your business or online.
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="generateSecondIndex">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="columDetailCardComendFive">
                        <div class="circleInCardFive"><i class="fa-solid fa-signal"></i></div>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae aspernatur voluptas
                            sed,
                            laudantium laborum odit.</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="columDetailCardComendFive2">
                        <div class="circleInCardFive"><i class="fa-solid fa-signal"></i></div>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae aspernatur voluptas
                            sed,
                            laudantium laborum odit.</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="columDetailCardComendFive">
                        <div class="circleInCardFive"><i class="fa-solid fa-signal"></i></div>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae aspernatur voluptas
                            sed,
                            laudantium laborum odit.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="generateSecondIndex">
        <div class="container">
            <div class="TopTroGenrateSix">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="columnGapsLeft">
                            <p>Learn why Butlaroo is great for your business</p>
                            <span>The Butlaroo dashboard offers all features required to manage your ordering environment,
                                from small businesses to enterprises.</span>
                            @for ($i = 0; $i < 5; $i++)
                                <div class="rowsGenerateSicLineChecked">
                                    <i class="fa-solid fa-check"></i>
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="ImagesRestRightSixMain">
                            <img class="rightImagesGenerate" src="{{ asset('images/system/burger.jpeg') }}"
                                alt="">
                            <img class="absPhoneSixGenerate" src="{{ asset('images/system/last-mockup.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="centerButtonGrefLinked">
                    <a class="SaveRestSicLine" href="{{ route('invite') }}">İşyeri Başvurusu Yap</a>
                    <a class="ContactSicLine" href="{{route('contact')}}">Bize Ulaşın</a>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color:#141416 ">
        <div class="lastLineBgeMain">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="bannerRightWebSites">
                            <img class="rotateLeft" src="{{ asset('images/system/circle.svg') }}" alt="">
                            <img class="rotateRight" src="{{ asset('images/system/circle2.svg') }}" alt="">
                            <img class="rotateRight3" src="{{ asset('images/system/circle3.svg') }}" alt="">
                            <img class="rotateRight4" src="{{ asset('images/system/circle4.svg') }}" alt="">
                            <div class="detailInsBannerRight">
                                <img class="phoneOne" src="{{ asset('images/system/Phone_1.png') }}" alt="">
                                <img class="phoneTwo" src="{{ asset('images/system/Phone_2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="generateLastLeftTextHead"
                            style="background-image: url('{{ asset('images/system/coloss.png') }}')">
                            <p>Lorem ipsum dolor sit amet </p>
                            <span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur, repellat quod
                                praesentium, molestias ducimus neque hic aut placeat necessitatibus accusantium perferendis
                                cum ullam. Nam aspernatur assumenda eveniet quas! Adipisci?
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
