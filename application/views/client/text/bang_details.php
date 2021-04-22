<?php include(APPPATH . '/inc/head.php') ?>
<title>Bangluru list</title>
</head>

<body style="background-color: #f1f1f1;">


    <div class="page-container">
        <header id="header" class='mobpanel' data-scroll-white-nav="true" data-scroll-half-nav="true">
            <div class="header-base">
                <div class="top-panel mobpanel">
                    <div class="container">
                        <div class="inner-wrap">
                            <div href="#" id="header-mobile-nav-opener" class=""><span></span></div>
                            <strong class="logo">
                                <a href="">
                                    <img src='<?php echo base_url() . 'assets/images/logowhite.png'; ?>' class="desktop-logo mobile-hidden" style="display:none">

                                    <img src='<?php echo base_url() . 'assets/images/logo.png'; ?>' class="desktop-logo mobile-hidden ">

                                    <img src='<?php echo base_url() . 'assets/images/logowhite.png';  ?>' class="colored-logo desktop-hidden abc mobile-header-logo showlogo">

                                    <img src='<?php echo base_url() . 'assets/images/logo.png';  ?>' class="desktop-hidden colored-logo mobile-header-logo mymoblogo abc">

                                </a>
                            </strong>
                            <div class="search-container">
                                <div href="#" id="header-search-opener" class="desktop-hidden navbar-menu-toggler" data-submenu="adventureExcursionsMobileWrapper" data-menu-loaded="false" data-menu-identifier="adventure_excursions" data-version="mobile">
                                    <span class="icon-search"></span>
                                </div>
                                <div class="search-slide">
                                    <div class="inner-form-container">
                                        <form action="/listings/search" method="get" id="global-search-form">
                                            <fieldset>

                                                <div class="tt-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;">
                                                </div>
                                            </fieldset>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="mobile-nav-drop" class="">
                            <ul class="mobile-tool-list">
                                <li class="desktop-hidden"><a href="/" class="main-header-link">Home</a></li>
                                <li class="divider desktop-hidden"></li>
                                <li><a href="/go-to-gift-page" class="gift-link main-header-link">
                                        <span class="text" style='background:#f07c7c; padding:9px; border-radius:10px;  color:white; box-shadow:0px 0px 8px black; display:flex; padding-right:15px; align-items:center;'><i class="far fa-plus-square fa-2x" style="padding-right:10px; text-align:center;"> </i> New Bussiness</span>
                                    </a>
                                </li>
                                <li class="divider desktop-hidden"></li>
                                <li id="header-login-wrap">
                                    <span data-href="" class="main-header-link trigger-login-popup onclick-link" style='color:black'>Log In</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="wrapper-content wrapper-content--ud" infinite-scroll="">
            <div class="wrapper">
                <div class='container breadcrab'>
                    <div class="breadcrumbs-nav">
                        <nav class="fl-row">
                            <a class="text-uppercase text-decoration-none" href="/">Nearbuy</a>
                            <a class="text-uppercase text-decoration-none" href="/delhi-ncr/c/all-offers">Deals in New Delhi</a>
                            <a class="text-uppercase cursor-default text-decoration-none" href="/delhi-ncr/collection/full-body-massage-offers/">Body Massage</a>
                        </nav>
                    </div>
                    <hr class="divider divider--thick">
                </div>
                <div class="bg-white p-3 chead secondhead" style='margin-top:-20px; width:100%;'>
                    <div class='row'>
                        <div class="col-sm-12">
                            <img src="<?php echo base_url() . 'assets/images/backward.png'; ?>" class='spainBang'>
                            <h3 style="position:relative; left:29px;">Best Spa in Banglore</h3>
                        </div>
                    </div>
                </div>
                <!-- /////the bottom row  -->
                <div class="container mt-5 p-0">
                    <div class="row">
                        <div class="col-sm-4 card-info">
                            <promo-slider>
                                <div class="position-relative  promo-slider-wrapper">
                                    <div class="all-promo-wrapper">
                                        <div class="promo-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0.6s;">
                                            <div>
                                                <promo-card initindex="1">
                                                    <div class="promo" ga-impression="">
                                                        <div class="block margin-reset clearfix overflow-hidden">
                                                            <div class="block__inner local-promo">
                                                                <div class="promo__price">
                                                                    <p class="txt-primary font-weight-bold white-space-normal" style="font-size:25px;">Domaine de Berinzenn</p>
                                                                </div>
                                                                <div class="promo__title">
                                                                    <merchant-rating>
                                                                        <div class="margin-right-s card-rating__listing" style="margin-top: -8px; margin-left:-10px;">
                                                                            <div class="card-rating margin-bottom-zero nb--4-5">
                                                                                <img alt="nb" class="card-rating__nb" height="10" src="<?php echo base_url() . 'assets/images/sl_icon.png'; ?>" data-lzled="true">
                                                                                <span class="card-rating__img"></span>
                                                                                <span class="card-rating__value font-weight-bold line-height-default" style='font-size:small;'>4.3</span>
                                                                                <span><a class='text-decoration-none font-weight-bold' style='color: #010101; font-size:small; margin-left:5px;'>100 Reviews</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </merchant-rating>
                                                                </div>
                                                                <p class="txt-primary font-weight-bold white-space-normal" style="font-size:14px; margin-top:10px;">Overviews</p>
                                                                <div class='txt-primary white-space-normal text-overview'> In the heart of the Spa forest and on the edge of the Fagne de Malchamps, the Domaine of Bérinzenne offers spaces freely to the public: panoramic tower, park with accessible </div>
                                                                <div>
                                                                    <img src="<?php echo base_url() . 'assets/images/duration.png'; ?>" alt="" class='dur'>
                                                                    <span class='txt-primary font-weight-bold white-space-normal inline'> Suggested Duration: </span> <span style='margin-left:120px;padding:7px;margin-top:8px; font-size:12px;display:inline-block; '> 2-3 hours</span>
                                                                </div>
                                                                <div>
                                                                    <img src="<?php echo base_url() . 'assets/images/location.png'; ?>" alt="" class='dur'>
                                                                    <span class='txt-primary font-weight-bold white-space-normal inline'> Address: </span> <span style='margin-left:50px;padding:7px;margin-top:8px; font-size:12px;display:inline-block; '> Electronic city Bangluru,Karnatka</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </promo-card>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </promo-slider>
                        </div>
                        <div class="col-sm-8 col-m-8 col-l-9 listing-grid card-carousel">
                            <div class="container p-0">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" style="height:350px; border-radius:5px 5px 5px 5px;">
                                        <div class="carousel-item">
                                            <img src="http://localhost/tsl/assets/images/building-one.jpg" class="d-block w-100 " style="height:300px" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="http://localhost/tsl/assets/images/building.jpg" class="d-block w-100" style="height:300px" alt="...">
                                        </div>
                                        <div class="carousel-item active">
                                            <img src="http://localhost/tsl/assets/images/one.png" class="d-block w-100" style="height:300px" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" style="margin-top:-20px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <span style="position:relative; top:-90px; color:white; letter-spacing:1px; left:5px;">All Photos(3)</span>
                                    <button class="carousel-control-next" type="button" style="margin-top:-20px;" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /////the next row/// -->
                <div class="container p-0" style='margin-top:50px;'>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="multi-line-header multi-line-header--centered">
                                <div class="multi-line-header__title">
                                    FEATURES
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="container bg-white p-3" style='border-radius:5px;'>
                                <div class="row" style='padding:10px;'>
                                    <div class="col-sm-6 col-xs-6 col-md-6 ">
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 1</h3><br>
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 2</h3><br>
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 3</h3><br>
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 4</h3><br>
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 5</h3>
                                    </div>
                                    <div class="col-sm-6  col-xs-6 col-md-6">
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 1</h3><br>
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 2</h3><br>
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 3</h3><br>
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 4</h3><br>
                                        <img src="<?php echo base_url() . 'assets/images/features.png'; ?>" alt="" class='feature'>
                                        <h3 class='fstate'>featuers 5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ///location?/ -->
                <div class="container" style='margin-top:100px;'>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="multi-line-header multi-line-header--centered">
                                <div class="multi-line-header__title">
                                    LOCATION
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-0">
                        <div class="col-sm-6 mt-3">
                            <div class="container bg-white" style='border-radius:5px; height:auto;'>
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="534" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/maps/93"></a><br>
                                        <style>
                                            .mapouter {
                                                position: relative;
                                                text-align: right;
                                                height: auto;
                                                width: auto;
                                                padding-top: 5px;
                                                padding-bottom: 5px;
                                            }
                                        </style>
                                        <style>
                                            .gmap_canvas {
                                                overflow: hidden;
                                                background: none !important;
                                                height: auto;
                                                width: auto;
                                                ;
                                                padding-top: 5px;
                                                padding-bottom: 5px;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="container bg-white setheight" style='border-radius:5px;'>
                                <div class='row p-4' style='height:319px;'>
                                    <h2 class='font-weight-bold' style='font-size:x-large; margin-bottom:5px;'>Contact us</h2>
                                    <div class='col-sm-1 mt-3'>
                                        <img src="<?php echo base_url() . 'assets/images/location.png'; ?>" style='height:30px; width:32px;'>
                                    </div>
                                    <div class='col-sm-11 mt-3'><span style='font-size:13px; text-align:justify;'>Yas Mall, Ground Level, adjacent to Ferrari World Entrance, Abu Dhabi 51133 United Arab Emirates</span>
                                    </div>
                                    <div class="row mt-4">
                                        <div class='col-sm-1'>
                                            <img src="<?php echo base_url() . 'assets/images/building.png'; ?>" style='height:30px; width:32px;'>
                                        </div>
                                        <div class='col-sm-11 mt-1'><span style='font-size:13px; text-align:justify;'>0.5 km from Electronic city Bangluru </span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class='col-sm-1'>
                                            <img src="<?php echo base_url() . 'assets/images/web.png'; ?>" style='height:30px; width:32px;'>
                                        </div>
                                        <div class='col-sm-11 mt-1'><span style='font-size:13px; text-align:justify;'>Visit on our website <a href="www.abc.com" class='text-decoration-none'>https://www.abc.com</a></span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class='col-sm-1'>
                                            <img src="<?php echo base_url() . 'assets/images/mail.png'; ?>" style='height:30px; width:32px;'>
                                        </div>
                                        <div class='col-sm-11 mt-1'><span style='font-size:13px; text-align:justify;'>Email: abc123@fake.com</span>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class='col-sm-1'>
                                            <img src="<?php echo base_url() . 'assets/images/tel.png'; ?>" style='height:30px; width:32px;'>
                                        </div>
                                        <div class='col-sm-11 mt-1'><span style='font-size:13px; text-align:justify;'>Phone: 99998888777</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /////Review///// -->
            <div class="container" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="multi-line-header multi-line-header--centered">
                            <div class="multi-line-header__title">
                                REVIEW
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="container bg-white p-3 review-btn" style='border-radius:5px;'>
                            <a class='view-more-btn' style="width: 106px; cursor:pointer;" onclick='getreview()'>Write a Review</a>
                        </div>
                        <div class="container bg-white review mt-2" style='display:none; padding:10px; border-radius:5px;'>
                            <div class="col-sm-6">
                                <form action="">
                                    <div class='form-group'>
                                        <label for="title" class='titleof_review font-weight-semibold'>Title of your review</label>
                                        <input type="text" placeholder="title of riview" class='form-control font-size-review'>
                                    </div>
                                    <div class='form-group mt-2'>
                                        <label for="rating" class='titleof_review font-weight-semibold'>Your overall rating</label>
                                        <input type="number" placeholder="provide rating from 1 to 5" class='form-control' style='border-radius:0px;'>
                                    </div>
                                    <div class='form-group mt-2'>
                                        <label for="review" class='titleof_review font-weight-semibold'>Your review</label>
                                        <textarea class='form-control' placeholder="Your review" style='height:90px;'></textarea>
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="submit" value='Post' class='view-more-btn' style='flex-flow:column-reverse; width:70px; border-radius:5px;'>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- First review -->
                        <div class="container bg-white mt-2 p-2" style='border-radius:5px;'>
                            <div class="row p-4">
                                <div class="col-sm-1">
                                    <img src="<?php echo base_url() . 'assets/images/shop-1.jpg'; ?>" class='img img-responsive' alt="" style='border-radius:100%; height:60px; width:63px;'>
                                </div>
                                <div class="col-sm-11">
                                    <div class='font-weight-semibold white-space-normal' style='font-size:22px;'>Santosh kumar
                                    </div><img src="<?php echo base_url() . 'assets/images/location.png'; ?>" alt="" class='dur'> <span style='font-size:13px;'>Bangluru Karnatka, 540034</span>
                                </div>
                                <div style='margin-top:10px;'><img src="<?php echo base_url() . 'assets/images/sl_icon.png'; ?>" class='card-rating__nb' style="margin-left: 0px;" alt=""> <span style='font-size:small; font-weight:500;'>4.4</span> </div>
                                <div class="actual_review txt-primary white-space-normal text-overview" style='text-align:justify;'>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores iusto reiciendis iste voluptatum tempora dolore a excepturi unde praesentium sapiente? Nostrum, sunt laboriosam. Quos dolor, illum adipisci necessitatibus ducimus vitaereiciendis iste voluptatum tempora dolore a excepturi unde praesentium sapiente Nostrum, sunt laboriosam. Quos dolor, illum adipisci necessitatibus ducimus vitae?reiciendis iste voluptatum tempora dolore a excepturi unde praesentium sapiente? Nostrum, sunt laboriosam. Quos dolor, illum adipisci necessitatibus ducimus vitae?
                                </div>
                                <div>
                                    <div class="date">Date of post:</div><span style='position: relative;top: 5px;left: 8px; font-size:small'>27-03-2021</span>
                                </div>
                            </div>
                        </div>
                        <!-- Second review -->
                        <div class="container bg-white mt-2 p-2" style='border-radius:5px;'>
                            <div class="row p-4">
                                <div class="col-sm-1">
                                    <img src="<?php echo base_url() . 'assets/images/shop-1.jpg'; ?>" class='img img-responsive' alt="" style='border-radius:100%; height:60px; width:63px;'>
                                </div>
                                <div class="col-sm-11">
                                    <div class='font-weight-semibold white-space-normal' style='font-size:22px;'>Karan sonkar
                                    </div><img src="<?php echo base_url() . 'assets/images/location.png'; ?>" alt="" class='dur'> <span style='font-size:13px;'>Bangluru Karnatka, 540034</span>
                                </div>
                                <div style='margin-top:10px;'><img src="<?php echo base_url() . 'assets/images/sl_icon.png'; ?>" class='card-rating__nb' style="margin-left: 0px;" alt=""> <span style='font-size:small; font-weight:500;'>4.4</span> </div>
                                <div class="actual_review txt-primary white-space-normal text-overview" style='text-align:justify;'>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores iusto reiciendis iste voluptatum tempora dolore a excepturi unde praesentium sapiente? Nostrum, sunt laboriosam. Quos dolor, illum adipisci necessitatibus ducimus vitaereiciendis iste voluptatum tempora dolore a excepturi unde praesentium sapiente Nostrum, sunt laboriosam. Quos dolor, illum adipisci necessitatibus ducimus vitae?reiciendis iste voluptatum tempora dolore a excepturi unde praesentium sapiente
                                </div>
                                <div>
                                    <div class="date">Date of post:</div><span style='position: relative;top: 5px;left: 8px; font-size:small'>27-03-2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /////Covid///// -->
            <div class="container" style='margin-top:100px;'>
                <div class="row p-3">
                    <div class="col-sm-12">
                        <div class="multi-line-header multi-line-header--centered">
                            <div class="multi-line-header__title">
                                TRAVEL SAFE DURING COVID-19
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 bg-white p-4" style='border-radius:5px;'>
                        <div class='date'>What you can expect during covid-19 </div>
                        <ul class='p-4'>
                            <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>All linens senitized in high temperature</li>
                            <li class='actual_review p-2  txt-primary white-space-normal fontcovid'>Face mask is required for guest in public area</li>
                            <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>Face mask is required for staff in public area</li>
                            <li class='actual_review p-2  txt-primary white-space-normal fontcovid'>Hand senitizer is must for staff and guest also</li>
                            <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>Paid stay-at-home policy for staff with symptoms</li>
                            <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>Regularly sanitized high-traffic areas</li>
                            <li class='actual_review p-2 txt-primary white-space-normal fontcovid'>Staff required to regularly wash hands</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ////frequently asked questions: -->

        <div class='container' style='margin-top:100px;'>
            <div class="row ">
                <div class="col-sm-12">
                    <div class="multi-line-header multi-line-header--centered">
                        <div class="multi-line-header__title">
                            FREQUENTLY ASKED QUESTIONS
                            <!-- <span class="icon-flash icon-trending"></span> -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="row bg-white p-3" style='border-radius:5px;'>
                <div class="col-sm-12 offset-md-4 ">
                    <div class='setcont' style="cursor:pointer">
                        <div class='question' onclick='ques1()'>What is the website??</div>
                        <div class='answer1 answer'> website is the collection of webpages which provide information about a particular things Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque exercitationem molestias nemo aspernatur accusantium distinctio assumenda expedita tempore quo iusto, facilis, asperiores rerum doloremque consequatur excepturi autem dolor voluptatibus omnis?</div>
                        <hr>
                        <div>
                            <div class='question' onclick='ques2()'>What is the software in computer science?</div>
                            <div class='answer2 answer'> website is the collection of webpages which provide information about a particular Atque exercitationem molestias nemo aspernatur accusantium distinctio assumendathings Lorem ipsum dolor sit.

                            </div>
                            <hr>
                        </div>
                        <div>
                            <div class='question' onclick='ques3()'>Do you know about hardware ??</div>
                            <div class='answer3 answer'> website is the collection of webpages which provide information about a particularAtque exercitationem molestias nemo aspernatur accusantium distinctio assumenda things</div>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-8 offset-md-3 mt-5">


        </div>

    </div>



    <!-- ////////////////////////////////////////////////////////////////////////////  -->
    <section class="section__trending" style='margin-top:100px;'>
        <div class="container">
            <div class="multi-line-header multi-line-header--centered">
                <div class="multi-line-header__title">
                    Recommended
                    <!-- <span class="icon-flash icon-trending"></span> -->
                </div>
            </div>
            <div class="tour-card-list tour-card-list--v2 tour-carousel">

                <div class="tour-card-v2" aria-hidden="true" role="tabpanel" id="slick-slide00">
                    <div data-href="/tours/kudremukh-trek-in-chikmagalur" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2430">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--2JVWwaSX--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--eEPN_1iG--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x" media="(min-width: 1024px)" srcset="https://images.thrillophilia.com/image/upload/s--2JVWwaSX--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--eEPN_1iG--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--dJB9ZENQ--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--FUgYlbwq--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x" media="(min-width: 768px)" srcset="https://images.thrillophilia.com/image/upload/s--dJB9ZENQ--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--FUgYlbwq--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--AvGmK4eM--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--j_xVNt0M--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x" media="(min-width: 576px)" srcset="https://images.thrillophilia.com/image/upload/s--AvGmK4eM--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--j_xVNt0M--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--a6npoeRX--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--l-RcjBKK--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x" media="(min-width: 320px)" srcset="https://images.thrillophilia.com/image/upload/s--a6npoeRX--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--l-RcjBKK--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--qD7n1YjH--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--1OpzBxFJ--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x" media="(max-width: 320px)" srcset="https://images.thrillophilia.com/image/upload/s--qD7n1YjH--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--1OpzBxFJ--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x"><img alt="Kudremukh Trek, Chikmagalur | Book @ Flat 18% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--2JVWwaSX--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--eEPN_1iG--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--wnkgA5hE--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg" src="" srcset="https://images.thrillophilia.com/image/upload/s--2JVWwaSX--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--eEPN_1iG--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/028/140/original/1577274210_moun_party35.jpg.jpg 2x">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Bangalore</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/kudremukh-trek-in-chikmagalur" class="tour-card-v2__name " target="_blank" tabindex="-1">Kudremukh Trek, Chikmagalur | Book @ Flat 18% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(2248 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>2,449</span>
                                    <span class="old-price"><span class="currency-type">₹</span>2,949</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" role="tabpanel" id="slick-slide01">
                    <div data-href="/tours/riverside-camping-at-igatpuri" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="9661">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--5kDt-8XJ--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--H7bcrkUD--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x" media="(min-width: 1024px)" srcset="https://images.thrillophilia.com/image/upload/s--5kDt-8XJ--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--H7bcrkUD--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--zk-99oGe--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--9CEm1Cfk--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x" media="(min-width: 768px)" srcset="https://images.thrillophilia.com/image/upload/s--zk-99oGe--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--9CEm1Cfk--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--5XvyCUvj--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--IuH2w_5a--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x" media="(min-width: 576px)" srcset="https://images.thrillophilia.com/image/upload/s--5XvyCUvj--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--IuH2w_5a--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--aKhhp0UK--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--OU81urVd--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x" media="(min-width: 320px)" srcset="https://images.thrillophilia.com/image/upload/s--aKhhp0UK--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--OU81urVd--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--kazRLDeU--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--EgCDEapF--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x" media="(max-width: 320px)" srcset="https://images.thrillophilia.com/image/upload/s--kazRLDeU--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--EgCDEapF--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x"><img alt="Igatpuri Camping | Book Now &amp; Get 900 Cashback" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--5kDt-8XJ--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--H7bcrkUD--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--k8Nvhal1--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg" src="" srcset="https://images.thrillophilia.com/image/upload/s--5kDt-8XJ--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--H7bcrkUD--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/111/329/original/1583312242_igatpuri_camp.png.jpg 2x">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Igatpuri</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/riverside-camping-at-igatpuri" class="tour-card-v2__name" target="_blank" tabindex="-1">Igatpuri Camping | Book Now &amp; Get 900 Cashback</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(354 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,099</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,349</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" aria-hidden="true" role="tabpanel" id="slick-slide02">
                    <div data-href="/tours/overnight-jeep-safari-with-camping-in-jaisalmer" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="9829">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--7sPIPXf6--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--BD_9HNbB--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x" media="(min-width: 1024px)" srcset="https://images.thrillophilia.com/image/upload/s--7sPIPXf6--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--BD_9HNbB--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--rbFbsLTs--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--hIiCWS7l--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x" media="(min-width: 768px)" srcset="https://images.thrillophilia.com/image/upload/s--rbFbsLTs--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--hIiCWS7l--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--T6ZdT8xk--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--9xJ5zOYj--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x" media="(min-width: 576px)" srcset="https://images.thrillophilia.com/image/upload/s--T6ZdT8xk--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--9xJ5zOYj--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--OWj0l8cA--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--C-3EwbDQ--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x" media="(min-width: 320px)" srcset="https://images.thrillophilia.com/image/upload/s--OWj0l8cA--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--C-3EwbDQ--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--ms1XQUba--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--FhWXalza--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x" media="(max-width: 320px)" srcset="https://images.thrillophilia.com/image/upload/s--ms1XQUba--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--FhWXalza--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x"><img alt="Camping in Jaisalmer with Jeep Safari Flat 45% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--7sPIPXf6--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--BD_9HNbB--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--0v-2hzM4--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg" src="" srcset="https://images.thrillophilia.com/image/upload/s--7sPIPXf6--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--BD_9HNbB--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/119/705/original/1599055091_1571209501_WhatsApp_Image_2019-09-06_at_12.45.27_PM.jpeg.png.jpg 2x">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Jaisalmer</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/overnight-jeep-safari-with-camping-in-jaisalmer" class="tour-card-v2__name" target="_blank" tabindex="-1">Camping in Jaisalmer with Jeep Safari Flat 45% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(949 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,144</span>
                                    <span class="old-price"><span class="currency-type">₹</span>2,094</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" role="tabpanel" id="slick-slide03">
                    <div data-href="/tours/camping-in-rishikesh-sands-trekking-rafting-cliff-jumping-combo" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10656">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--u0KUKlzj--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--btUDEvyU--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--MtJekOVU--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--hpe2NbpM--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--MSBXtfee--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--Tk3olkxf--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--GbFQeBE1--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--GgFXAvwI--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--XsD_K2Z9--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--aE4zUtKR--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Cliff Jumping in Rishikesh + Camping + Rafting Combo, 25% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--u0KUKlzj--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--btUDEvyU--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--GzPU7Kpf--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/135/200/original/1610981314_1595566667_shutterstock_344995025.jpg.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Rishikesh</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/camping-in-rishikesh-sands-trekking-rafting-cliff-jumping-combo" class="tour-card-v2__name" target="_blank" tabindex="-1">Cliff Jumping in Rishikesh + Camping + Rafting Combo, 25% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(844 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,300</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,750</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide04">
                    <div data-href="/tours/jammu-and-kashmir-tour" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="3423">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--pgAH0Y2o--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--LVOfQI7x--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--rVV7tP0G--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--ANZK2QMu--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--GdapnIZR--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--PjlAYnlZ--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--WY4krkZ3--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--k88Xhuuu--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--zF9Yl4TI--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--s7z4OWjZ--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Cheapest Kashmir Tour Package 2021 | Flat 20% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--pgAH0Y2o--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--LVOfQI7x--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--CLKVfsap--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/031/624/original/1591353448_shutterstock_654201766.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        New
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span>9D/8N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/jammu-and-kashmir-tour" class="tour-card-v2__name" target="_blank" tabindex="-1">Cheapest Kashmir Tour Package 2021 | Flat 20% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">4.0</div>
                                <div class="tour-card-v2__reviews-count">(26 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>17,199</span>
                                    <span class="old-price"><span class="currency-type">₹</span>21,498</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide05">
                    <div data-href="/tours/dine-and-dance-at-a-classic-houseboat-goa" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10822">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--bcHiKMic--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--VqwrVyzw--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--G3t_cCz6--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--BtNywAPf--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--kTrsh14V--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--7ib515Y3--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--bBl8ONjR--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--AFoFPsAr--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--pP_RXQ2o--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--uiTSTZub--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Goa Houseboat Trip | Book Online &amp; Get 25% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--bcHiKMic--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--VqwrVyzw--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--MOMaeaEy--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/136/996/original/1586173366_river-cruise-goa-luxury-houseboat-sunset-dinner-cruise-goa-river-mandovi-slider-pic-5.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Siolim</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>6H</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/dine-and-dance-at-a-classic-houseboat-goa" class="tour-card-v2__name" target="_blank" tabindex="-1">Goa Houseboat Trip | Book Online &amp; Get 25% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(149 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>2,100</span>
                                    <span class="old-price"><span class="currency-type">₹</span>2,600</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide06">
                    <div data-href="/tours/unexplored-arunachal-tour-package-tawang-special" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10546">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--OTnGLygV--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--L7n6gRXW--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--yc1swHQ3--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--8n8aBF8X--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--KaTzkFbf--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--xHdMM2sL--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--fSNtYjJi--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--Qyx3YSAB--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--GhAyqgmP--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--K5k_h1T2--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Unexplored Arunachal Tour Package: Tawang Special" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--OTnGLygV--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--L7n6gRXW--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--UbItGd_i--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/134/047/original/1539066595_shutterstock_1047341446.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Guwahati</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>8D/7N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/unexplored-arunachal-tour-package-tawang-special" class="tour-card-v2__name" target="_blank" tabindex="-1">Unexplored Arunachal Tour Package: Tawang Special</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(47 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>24,750</span>
                                    <span class="old-price"><span class="currency-type">₹</span>29,250</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide07">
                    <div data-href="/tours/sheraton-full-moon-resort-and-spa" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="21786">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--pJPC2NMV--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--J4EXm6Yj--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--D9CE2ucn--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--3tCuwuvQ--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--_rmtMBIO--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--3bbnf4Gf--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--_RLONBev--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--lpe39nSf--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--8vyFCeKt--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--5Ms09Ek0--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 2x" media="(max-width: 320px)"><img alt="Sheraton Full Moon Resort and Spa, Maldives | Book @ Flat 15% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--pJPC2NMV--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--J4EXm6Yj--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--0CNNJZ_e--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/314/879/original/1612330103_1592280190_mlesi-aerial-view-3821-hor-clsc.jpg.png.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Male</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>4D/3N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/sheraton-full-moon-resort-and-spa" class="tour-card-v2__name" target="_blank" tabindex="-1">Sheraton Full Moon Resort and Spa, Maldives | Book @ Flat 15% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(150 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>38,500</span>
                                    <span class="old-price"><span class="currency-type">₹</span>59,500</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide08">
                    <div data-href="/tours/srinagar-leh-manali-umlingla-bike" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="9998">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--cY0DNgLL--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--z88P7qSy--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--BtMBUevN--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--rJpccewj--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--uPH5U1f2--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--fSm_Cv24--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--Xjd0DDlz--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--NkeODIYo--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--qVGnoTFj--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--tR3LySvr--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Manali Leh Manali Bike Expedition with Hanle and Tsomoriri" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--cY0DNgLL--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--z88P7qSy--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--qRK0V5zk--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/126/014/original/1614918113_4_%281%29.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Ladakh</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>12D/11N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/srinagar-leh-manali-umlingla-bike" class="tour-card-v2__name" target="_blank" tabindex="-1">Manali Leh Manali Bike Expedition with Hanle and Tsomoriri</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">4.0</div>
                                <div class="tour-card-v2__reviews-count">(27 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>24,800</span>
                                    <span class="old-price"><span class="currency-type">₹</span>31,200</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide09">
                    <div data-href="/tours/leh-ladakh-tour" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="3141">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--BukLUKWP--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--_fRxZhou--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--BjaHcWWB--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--9qhY374f--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--uk4Xd1FM--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--T1tUvUfA--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--tOwrFdSN--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--ZVxt8HjW--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--RJ51Zc0A--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--B4QGKWlH--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Leh Ladakh Group Tour Package with Camping I Flat 17% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--BukLUKWP--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--_fRxZhou--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--n1MZjNkT--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/027/250/original/1614937954_3_%284%29.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Ladakh</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>7D/6N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/leh-ladakh-tour" class="tour-card-v2__name" target="_blank" tabindex="-1">Leh Ladakh Group Tour Package with Camping I Flat 17% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(2145 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>19,745</span>
                                    <span class="old-price"><span class="currency-type">₹</span>24,039</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide010">
                    <div data-href="/tours/valley-of-flowers-uttranchal" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="1639">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--rfnJcvUR--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--WXLEAMI8--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--1BK4HvNM--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--nf_crq3f--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--g0MvJuF6--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--7OJ3GZ95--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--Lod-YrC6--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--q0LHD-03--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--vSMs1b0F--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--AFtgtdcW--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 2x" media="(max-width: 320px)"><img alt="Valley of Flowers Trek with Hemkund Sahib 2021: Flat 32% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--rfnJcvUR--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--WXLEAMI8--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--oDi_Qzzu--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/026/388/original/1499683375_colors_of_bliss.png.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Haridwar</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>6D/5N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/valley-of-flowers-uttranchal" class="tour-card-v2__name" target="_blank" tabindex="-1">Valley of Flowers Trek with Hemkund Sahib 2021: Flat 32% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(2190 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>6,500</span>
                                    <span class="old-price"><span class="currency-type">₹</span>9,000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide011">
                    <div data-href="/tours/the-hampta-pass-trek" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2924">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--gazoo5iO--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--fpkb6XsQ--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--1a9X9PBH--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--nD9oUFjK--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--6Rdb1a1o--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--aaER3ZLR--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--ux26CLEg--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--XW5arbj3--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--0sJnfyXv--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--Ea644JVR--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 2x" media="(max-width: 320px)"><img alt="Hampta Pass Trek, Manali 2021 | Book Now @ Flat 30% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--gazoo5iO--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--fpkb6XsQ--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--gwXoXvKs--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/025/687/original/1507810382_trek_of_dreams8.png.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        SPECIAL OFFERS
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Manali</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>5D/4N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/the-hampta-pass-trek" class="tour-card-v2__name" target="_blank" tabindex="-1">Hampta Pass Trek, Manali 2021 | Book Now @ Flat 30% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(2363 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>7,500</span>
                                    <span class="old-price"><span class="currency-type">₹</span>10,000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide012">
                    <div data-href="/tours/trekking-in-sar-pass" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="7811">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--WvNOHnW8--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--PSq-JY7V--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--HzmksemN--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dlQlmPcO--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--EeV_OY6e--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--7YwHELST--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--e9buM_-i--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--xMRKGyb2--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--xoDUSB-5--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--NsfX3i91--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Sar Pass Trek 2021, Kasol | Sar Pass Trekking @19% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--WvNOHnW8--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--PSq-JY7V--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--uXzxWmIv--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/080/061/original/1616480816_sar_pass1.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Kasol</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>5D/4N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/trekking-in-sar-pass" class="tour-card-v2__name" target="_blank" tabindex="-1">Sar Pass Trek 2021, Kasol | Sar Pass Trekking @19% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(209 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>5,999</span>
                                    <span class="old-price"><span class="currency-type">₹</span>9,499</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide013">
                    <div data-href="/tours/triund-trek" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="1567">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--zDrCsWPw--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--msCANyco--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--YaOm4ZuB--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--2x3bl6HN--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--S39SlE-x--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--DkdeK_iH--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--VU751NZH--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--xH0sEaDi--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--oZNjxicH--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--l-gyDzVP--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Triund Trek 2021, Mcleodganj | Book @ ₹967 Only!" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--zDrCsWPw--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--msCANyco--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--LLL2ZuWq--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/025/705/original/1577279559_triund_camp3.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Mcleodganj</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/triund-trek" class="tour-card-v2__name" target="_blank" tabindex="-1">Triund Trek 2021, Mcleodganj | Book @ ₹967 Only!</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(2930 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>967</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,212</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide014">
                    <div data-href="/tours/riverside-camping-in-sakleshpur-chikmagalur" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10925">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--H1Cg3id8--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dg_Y18jL--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--YwAVeKq6--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--9ZP3oGo5--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s---oWwBgIt--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--80L-YNAv--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--4hYNjTDh--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dxIxupSm--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--rovNgihf--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--M20gGyf1--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Riverside Camping in Sakleshpur, Chikmagalur | Get 20% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--H1Cg3id8--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dg_Y18jL--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--9LfozUa8--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/138/477/original/1544180030_camping_in_sakleshwar.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Chikmagalur</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/riverside-camping-in-sakleshpur-chikmagalur" class="tour-card-v2__name" target="_blank" tabindex="-1">Riverside Camping in Sakleshpur, Chikmagalur | Get 20% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(368 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,499</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,904</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide015">
                    <div data-href="/tours/private-camping-at-pawna-lake" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="3264">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--jg17KOSc--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--BJXbvj75--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--UfARe0Qy--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--T4ii4QyZ--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--LozdgCtT--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--wQ_Q_Fqv--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--Qxa7FWDd--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--YbBesAp3--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--mbYjO-oP--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--Vj7EFqj_--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Pawna Lake Camping | Book @ ₹ 900 Only!" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--jg17KOSc--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--BJXbvj75--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--2mJkedVe--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/050/737/original/1583915348_pawna_thumbnail.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/private-camping-at-pawna-lake" class="tour-card-v2__name" target="_blank" tabindex="-1">Pawna Lake Camping | Book @ ₹ 900 Only!</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(4684 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,499</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,499</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide016">
                    <div data-href="/tours/kasol-trip-and-trek-to-kheerganga-from-delhi" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="8959">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--Rhw9y9bn--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--IdnpnDQ---/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--BZpS6B5X--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--PJE6muOV--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--AI53jxul--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--o3p66qSa--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--D4j5cBMU--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--i670vmxj--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--GVSYOe7_--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--2yIKMj40--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Kasol Trip and Trek to Kheerganga from Delhi Flat 17% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--Rhw9y9bn--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--IdnpnDQ---/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--wLcXzXmy--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/100/445/original/1578567016_1576498720_1576309294_kasol3.jpg.jpg.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">New Delhi</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>5D/4N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/kasol-trip-and-trek-to-kheerganga-from-delhi" class="tour-card-v2__name" target="_blank" tabindex="-1">Kasol Trip and Trek to Kheerganga from Delhi Flat 17% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(769 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>5,599</span>
                                    <span class="old-price"><span class="currency-type">₹</span>6,799</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide017">
                    <div data-href="/tours/scuba-diving-in-goa" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="4546">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--rN9tpr2X--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--ZU5G0jSu--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--W7M2mG3N--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--p_7O9IkC--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--buBDsFpD--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--XHXXivzM--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--Nwe8GLe---/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--oHkrMoQB--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--bbpthTYE--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--zJBDoSle--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Grand Island Goa Scuba Diving | Book Online &amp; Save 20%" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--rN9tpr2X--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--ZU5G0jSu--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--fxD3dT3j--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/046/396/original/1586157734_shutterstock_654264571_%281%29.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">South Goa</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>8H</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/scuba-diving-in-goa" class="tour-card-v2__name" target="_blank" tabindex="-1">Grand Island Goa Scuba Diving | Book Online &amp; Save 20%</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(1983 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,650</span>
                                    <span class="old-price"><span class="currency-type">₹</span>2,050</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide018">
                    <div data-href="/tours/everest-base-camp-trek-nepal" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2732">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--wAKdmSeP--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--rjXLB9Ai--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--c8naY5ng--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--MLnt65VO--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--lttSfKjd--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--SVvrjH0t--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--JoDCzKZH--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--ek4GtZzP--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--WAA8IEEK--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--_XaJVL7b--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 2x" media="(max-width: 320px)"><img alt="Everest Base Camp Trek, Nepal 2021 | Book @ Flat 22% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--wAKdmSeP--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--rjXLB9Ai--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s---TjuFbqp--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/024/278/original/1516271436_Everest-Base-Camp-Trek.png.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Kathmandu</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>12D/11N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/everest-base-camp-trek-nepal" class="tour-card-v2__name" target="_blank" tabindex="-1">Everest Base Camp Trek, Nepal 2021 | Book @ Flat 22% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(1602 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>38,500</span>
                                    <span class="old-price"><span class="currency-type">₹</span>50,500</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide019">
                    <div data-href="/tours/camping-circle-adventure-in-ramnagar" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="9223">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--TI6iXPpY--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--psSec41T--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--qDdlALdH--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--My9sbZ96--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--ZYBwMop3--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--3AATwnG2--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--AthYovCI--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--HB4OFBmx--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--msOpKAA1--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--qVGunGET--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Ramanagara Camping with Adventure Activities | Save 32%" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--TI6iXPpY--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--psSec41T--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--2ulenWAw--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/105/028/original/1604493352_1576496746_1576324833_ramanagara7.png.jpg.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Bangalore</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/camping-circle-adventure-in-ramnagar" class="tour-card-v2__name" target="_blank" tabindex="-1">Ramanagara Camping with Adventure Activities | Save 32%</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(2952 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,400</span>
                                    <span class="old-price"><span class="currency-type">₹</span>2,036</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide020">
                    <div data-href="/tours/adventure-camping-at-the-foothills-nandi-hills" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10427">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--UYbTU2WO--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dYGZB_j5--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--bSQuhhG0--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--4X9dP230--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--xZ-rd0S1--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--i8A75Sy_--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--BH1cAhM9--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--YHjKrvb_--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--usaXOfPB--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--olzajbRS--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Nandi Hills Drive in Camp | Book Online &amp; Get 15% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--UYbTU2WO--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dYGZB_j5--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--bULghNeI--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/131/676/original/1577967438_3a828a29-2412-453d-98b1-88859e888639.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Nandi Hills</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/adventure-camping-at-the-foothills-nandi-hills" class="tour-card-v2__name" target="_blank" tabindex="-1">Nandi Hills Drive in Camp | Book Online &amp; Get 15% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(1556 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,499</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,800</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide021">
                    <div data-href="/tours/spiti-winter-tour" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="9941">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--dfYdcvpC--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--d1Wzuz0V--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--hTpJ7lTm--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--fqM3uZ2e--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--VciC-0Mj--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--tj_9wbNj--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--bOJXNO_E--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--RmwgSIzS--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--MHo2MYm9--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--MxGUD-u_--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 2x" media="(max-width: 320px)"><img alt="Spiti Valley in Winter 2021: Paint It White" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--dfYdcvpC--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--d1Wzuz0V--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s---M3szlxA--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/123/135/original/1533277988_ws.png.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        SPECIAL OFFERS
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">New Delhi</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>9D/8N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/spiti-winter-tour" class="tour-card-v2__name" target="_blank" tabindex="-1">Spiti Valley in Winter 2021: Paint It White</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(96 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>21,800</span>
                                    <span class="old-price"><span class="currency-type">₹</span>27,700</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide022">
                    <div data-href="/tours/nagtibba-trek-uttarakhand" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2754">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--mmLUw-nq--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--QiJ8w_Ke--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--wZW9lPDZ--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--bZKJgR4K--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--_Y4k2e30--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--muJkkEq0--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--tDlD8Fo6--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--XCP2E8Gq--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--OU8KbnOX--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--StOdeqeH--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 2x" media="(max-width: 320px)"><img alt="Nag Tibba Trek with Camping, Uttarakhand | Book @ 20% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--mmLUw-nq--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--QiJ8w_Ke--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--6P_cSJga--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/029/617/original/1579073125_nagtibbaaa.png.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Dehradun</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/nagtibba-trek-uttarakhand" class="tour-card-v2__name" target="_blank" tabindex="-1">Nag Tibba Trek with Camping, Uttarakhand | Book @ 20% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(2456 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,399</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,749</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide023">
                    <div data-href="/tours/kedar-kantha-trek-skiing-uttarakhand" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2748">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--IkkLMUnK--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--KFP1vQXr--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--4-_EBzuY--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--3nsQ4muE--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--EQXuPzPz--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--a-o7S8DQ--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--Rha90VPE--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--3v5WWTWq--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--LNSojBBo--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--LZ5hHnku--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Kedarkantha Trek 2021, Uttarakhand | Book @ ₹5,800 Only" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--IkkLMUnK--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--KFP1vQXr--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--4EMk3Oen--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/027/088/original/1568444861_Final_ascend_to_summit.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Dehradun</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>6D/5N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/kedar-kantha-trek-skiing-uttarakhand" class="tour-card-v2__name" target="_blank" tabindex="-1">Kedarkantha Trek 2021, Uttarakhand | Book @ ₹5,800 Only</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(1254 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>6,000</span>
                                    <span class="old-price"><span class="currency-type">₹</span>11,817</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide024">
                    <div data-href="/tours/beach-camping-at-alibaug" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10152">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--3SJHS8GG--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--WQ8mcrBL--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--a1fBuHdq--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--eJ75lD7j--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--2ShDRpp_--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--WyMpQAiy--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--H0hfGiyt--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--zn3i-Y8c--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--V8zOk5-Y--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--163Z4aej--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Alibaug Beach Camping | Get 18% off &amp; Cashback of 500" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--3SJHS8GG--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--WQ8mcrBL--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--FMkwgWUd--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/128/049/original/1579338019_Alibaug_thumbnail.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Alibag</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/beach-camping-at-alibaug" class="tour-card-v2__name" target="_blank" tabindex="-1">Alibaug Beach Camping | Get 18% off &amp; Cashback of 500</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(1363 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,349</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,798</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide025">
                    <div data-href="/tours/tour-of-mesmerising-meghalaya" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="9540">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--KbV4KtNJ--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--DI46qSIY--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--2fY42a-V--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--eONKtfDY--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--P4I74QXP--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--bp-N_m4j--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--3xuQ1tv---/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--4kxT_ucq--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--1RCUMSq2--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--LOiqzuWW--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 2x" media="(max-width: 320px)"><img alt="6 Days Group Tour of Mesmerising Meghalaya | Flat 23% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--KbV4KtNJ--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--DI46qSIY--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--WozOM7Sx--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/109/558/original/1554557829_meg_tp.png.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Guwahati</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>6D/5N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/tour-of-mesmerising-meghalaya" class="tour-card-v2__name" target="_blank" tabindex="-1">6 Days Group Tour of Mesmerising Meghalaya | Flat 23% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(232 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>15,999</span>
                                    <span class="old-price"><span class="currency-type">₹</span>20,998</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide026">
                    <div data-href="/tours/lakeside-camping-bhandardara" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="4604">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--pU0P1eNK--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--7g-eOror--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--6fI8levH--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--qEt2OKDy--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--trMrou5P--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--WTmmxJMV--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--XBuYiOR0--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--I_uiHIHc--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--94evJQYG--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--3tRFnsGJ--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Bhandardara Camping | Book Lakeside Camping @ ₹1099 Only" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--pU0P1eNK--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--7g-eOror--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--4wIVA-OJ--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/046/832/original/1577274022_party29.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Bhandardara</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>1D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/lakeside-camping-bhandardara" class="tour-card-v2__name" target="_blank" tabindex="-1">Bhandardara Camping | Book Lakeside Camping @ ₹1099 Only</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(1064 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,099</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,449</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide027">
                    <div data-href="/tours/the-gokarna-beach-trek" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2395">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--IZFtpwi0--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--T0Y5XlZE--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--01Z6R9HX--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--c90FQyYG--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--ucRGr6ar--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--rysFEzmI--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--kca9KJK5--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--s33pgxqb--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--wK8Oy0JT--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--cdzoeO01--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Gokarna Beach Trek &amp; Camping | Book @ ₹3,699 Only" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--IZFtpwi0--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--T0Y5XlZE--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--9Z-3riZy--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/010/958/original/1577966010_1533988921_DSC_0859.JPG.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Bangalore</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/the-gokarna-beach-trek" class="tour-card-v2__name" target="_blank" tabindex="-1">Gokarna Beach Trek &amp; Camping | Book @ ₹3,699 Only</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(2048 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>2,099</span>
                                    <span class="old-price"><span class="currency-type">₹</span>2,799</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide028">
                    <div data-href="/tours/adventure-and-trekking-trails-of-kodachadri" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="1727">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--M6KiMjuA--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--kFur3eCa--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--vmOgAWIp--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dmghLpQe--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--C-w6gTNr--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--POzARc0m--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--Q1XAA6qJ--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--T09BjNJS--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--CvpAPZGv--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--cBB6vVT2--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Kodachadri Trek | Book Trekking in Kodachadri @ Flat 20% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--M6KiMjuA--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--kFur3eCa--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--ycPOwViR--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/024/386/original/1577274511_moun_party37.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Bangalore</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/adventure-and-trekking-trails-of-kodachadri" class="tour-card-v2__name" target="_blank" tabindex="-1">Kodachadri Trek | Book Trekking in Kodachadri @ Flat 20% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(868 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,799</span>
                                    <span class="old-price"><span class="currency-type">₹</span>2,397</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide029">
                    <div data-href="/tours/thadiyandamol-adventure-escape" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2853">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--2MvvGA1S--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--qACh-pZp--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--znp73Wxl--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--h73jLW2I--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--9BtcuLGy--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--N8vcHGuV--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--GUfyLBRK--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--sQBFh4I0--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--CcyOlAFk--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--hRQOIUu6--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Tadiandamol Trek, Coorg | Book @ ₹3,299 &amp; Get 26% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--2MvvGA1S--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--qACh-pZp--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--F2WsWWux--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/021/950/original/1577274583_hike20.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Bangalore</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>2D/1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/thadiyandamol-adventure-escape" class="tour-card-v2__name" target="_blank" tabindex="-1">Tadiandamol Trek, Coorg | Book @ ₹3,299 &amp; Get 26% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(2395 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,899</span>
                                    <span class="old-price"><span class="currency-type">₹</span>2,497</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide030">
                    <div data-href="/tours/andaman-and-nicobar-honeymoon-diaries" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="9772">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--35ZM22zM--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--jy0a9IF5--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--ih8l6lgz--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--LMFyeX0h--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--O0fNMoiI--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--JJYHSuQa--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--ZVkU2eIf--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--sLA8XH-v--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--ndvo5N6y--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dnUy9iBn--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 2x" media="(max-width: 320px)"><img alt="5 Days Andaman Honeymoon with Romantic Candle Light Dinner" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--35ZM22zM--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--jy0a9IF5--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--f0jZ0dkv--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/116/269/original/1559199692_last.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Port Blair</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>5D/4N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/andaman-and-nicobar-honeymoon-diaries" class="tour-card-v2__name" target="_blank" tabindex="-1">5 Days Andaman Honeymoon with Romantic Candle Light Dinner</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(259 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>18,475</span>
                                    <span class="old-price"><span class="currency-type">₹</span>21,835</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide031">
                    <div data-href="/tours/6-days-group-tour-of-sikkim" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10793">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--IBbqkomR--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--1hRUFwBf--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--iZiEs8ZE--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--RBq4tRP3--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--q1gTYBUy--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--KP489WTt--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--v3_mBYZv--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--0lofQ_4M--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--XdXWJjQ1--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--rzfprJRM--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 2x" media="(max-width: 320px)"><img alt="6 Days Enthralling Group Tour of Sikkim | Flat 16% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--IBbqkomR--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--1hRUFwBf--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--NbhKF4Dj--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/136/644/original/1549866550_tour_pag4e.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Gangtok</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>6D/5N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/6-days-group-tour-of-sikkim" class="tour-card-v2__name" target="_blank" tabindex="-1">6 Days Enthralling Group Tour of Sikkim | Flat 16% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(162 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>14,999</span>
                                    <span class="old-price"><span class="currency-type">₹</span>17,999</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide032">
                    <div data-href="/tours/nature-adventure-camp-kanakapura" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2987">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--4ysvir9F--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--gGcwmfLB--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--ltJ-6mcP--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--4C-0bpvq--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--cqy1MHAv--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dGzuth5L--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--lyicemuF--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s---CCxQpIk--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--2v3sie_w--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--dSe_Cet_--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 2x" media="(max-width: 320px)"><img alt="Nature Adventure Camp in Kanakapura | Book @ ₹1399 Only" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--4ysvir9F--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 1x, https://images.thrillophilia.com/image/upload/s--gGcwmfLB--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--199HPxXK--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/027/970/original/1607234665_kanakpura_featured.png.jpg.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span class="icon-pin-bold"></span>
                                    <span class="tour-card-v2__location">Kanakpura</span>
                                    <span class="tour-card-v2__location-duration-separator">|</span>
                                    <span>1N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/nature-adventure-camp-kanakapura" class="tour-card-v2__name" target="_blank" tabindex="-1">Nature Adventure Camp in Kanakapura | Book @ ₹1399 Only</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(3638 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>1,399</span>
                                    <span class="old-price"><span class="currency-type">₹</span>1,900</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card-v2" style="" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide033">
                    <div data-href="/tours/sandakphu-trek" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="1633">
                        <div class="tour-card-v2__banner">
                            <picture class="lazy-picture tour-card-v2__image">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--zkBwHtzB--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--JaZ8zT-l--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 2x" media="(min-width: 1024px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--8c6Odxd3--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--lb2rUFt8--/c_fill,g_center,h_409,q_auto,w_314/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 2x" media="(min-width: 768px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--D4X2gcsa--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--i3MXngLi--/c_fill,g_center,h_229,q_auto,w_303/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 2x" media="(min-width: 576px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--hwj2wFSb--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--TvhEFm_L--/c_fill,g_center,h_333,q_auto,w_253/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 2x" media="(min-width: 320px)">
                                <source data-srcset="https://images.thrillophilia.com/image/upload/s--rZbGR2cJ--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--EmxVPwSM--/c_fill,g_center,h_196,q_auto,w_143/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 2x" media="(max-width: 320px)"><img alt="Sandakphu Trek, 2021 | Book Now &amp; Get Upto 25% off" class="tour-card-v2__image" data-srcset="https://images.thrillophilia.com/image/upload/s--zkBwHtzB--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 1x, https://images.thrillophilia.com/image/upload/s--JaZ8zT-l--/c_fill,g_center,h_301,q_auto,w_222/dpr_1.5,f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg 2x" data-src="https://images.thrillophilia.com/image/upload/s--lUnaMxsr--/c_fill,g_center,h_450,q_auto,w_752/f_auto,fl_strip_profile/v1/images/photos/000/025/598/original/1507900349_TREKKERS_WONDERLAND7.png.jpg" src="">
                            </picture>
                            <div class="tour-card-v2__legibility-gradient"></div>
                            <div class="tour-card-v2__banner-data-wrap">
                                <span class="tour-card-v2__tags">
                                    <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                        Featured
                                    </span>
                                </span>

                                <ul class="tour-card-v2__additional-info">
                                    <span>6D/5N</span>
                                </ul>
                            </div>
                        </div>
                        <div class="tour-card-v2__details-wrap">
                            <a href="/tours/sandakphu-trek" class="tour-card-v2__name" target="_blank" tabindex="-1">Sandakphu Trek, 2021 | Book Now &amp; Get Upto 25% off</a>
                            <div class="tour-card-v2__reviews-wrap">
                                <div class="icon-star-empty"></div>
                                <div class="tour-card-v2__average-rating">5.0</div>
                                <div class="tour-card-v2__reviews-count">(915 Reviews)</div>
                            </div>
                            <div class="tour-card-v2__price-and-cta-wrap">
                                <div class="tour-card-v2__pricing">
                                    <span class="current-price"><span class="currency-type">₹</span>9,250</span>
                                    <span class="old-price"><span class="currency-type">₹</span>13,216</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div>
        <footer id="footer" class="footer ">
            <div class="container">
                <div class="pre-footer">
                    <div class="row">
                        <div class="col">
                            <p class="footer-titles">ABOUT THRILLOPHILIA</p>
                            <ul class="footer-list">
                                <li><a href="/about-us" target="_blank">ABOUT US</a></li>
                                <li><a href="/careers" target="_blank">WE ARE HIRING</a></li>
                                <li><a href="/reviews" target="_blank">THRILLOPHILIA REVIEWS</a></li>
                                <li><a href="/terms-and-conditions" target="_blank">TERMS &amp; CONDITIONS</a></li>
                                <li><a href="/privacy-policy" target="_blank">PRIVACY POLICIES</a></li>
                                <li><a href="/copyright-policies" target="_blank">COPYRIGHT POLICIES</a></li>
                                <li><a href="https://thrillophilia.freshdesk.com/support/home" target="_blank">SUPPORT</a></li>
                                <li><span class="onclick-link footer-link" data-href="/apps">APPS</span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <p class="footer-titles">FOR SUPPLIERS</p>
                            <ul class="footer-list">
                                <li><a class="footer-link" target="_blank" href="/suppliers">LIST YOUR ACTIVITIES</a></li>
                            </ul>
                            <p class="footer-titles">FOR BRANDS</p>
                            <ul class="footer-list">
                                <li><a class="footer-link" target="_blank" href="/advertise-with-us">PARTNER WITH US</a></li>
                                <li><a class="footer-link" target="_blank" href="/destination-marketing">DESTINATION MARKETING</a></li>
                            </ul>
                            <p class="footer-titles">FOR TRAVEL AGENTS</p>
                            <ul class="footer-list">
                                <li><span class="onclick-link footer-link" data-href="/platform_leads/new?lead_type=agent_lead">SIGN UP AS A AGENT</span></li>
                                <li><span class="onclick-link footer-link" data-href="/agents/sign_in">AGENT LOGIN</span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <p class="footer-titles">FOR TRAVELLERS</p>
                            <ul class="footer-list">
                                <li><span class="onclick-link footer-link" data-href="/gopro">GOPRO PASSPORT PROGRAM</span></li>
                                <li><span class="onclick-link footer-link gift-link" data-href="/go-to-gift-page">Gift an Experience</span></li>
                            </ul>
                        </div>
                        <div class="col destination">
                            <p class="footer-titles">TRAVEL DESTINATIONS</p>
                            <div class="nearby-places-list">
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Bali" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/bali-4ef4a1f6f5bdf828f8f3780de7d59d8927a85b1036d9f3513dc135e4d4812ac4.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/bali-4ef4a1f6f5bdf828f8f3780de7d59d8927a85b1036d9f3513dc135e4d4812ac4.png" srcset="">
                                        <span class="onclick-link footer-link" data-href="/cities/bali">
                                            <span class="caption">BALI</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Dubai" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/dubai-f44e9fe3e35837870659f9eea44c3e5115c2f372a18c6d61bfffced671c9107a.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/dubai-f44e9fe3e35837870659f9eea44c3e5115c2f372a18c6d61bfffced671c9107a.png" srcset="">
                                        <span class="onclick-link footer-link" data-href="/cities/dubai">
                                            <span class="caption">DUBAI</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Singapore" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/singapore-84cf28a90e6abf6dc50c6094f2ee26c3ea66e02dbc86c7537d9d6fa8f23144be.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/singapore-84cf28a90e6abf6dc50c6094f2ee26c3ea66e02dbc86c7537d9d6fa8f23144be.png" srcset="">
                                        <span class="onclick-link footer-link" data-href="/countries/singapore">
                                            <span class="caption">SINGAPORE</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Thailand" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/thailand-7c637ba996a37d1b39eeab188e99da39500f620a5ae17d18a468cce72540b194.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/thailand-7c637ba996a37d1b39eeab188e99da39500f620a5ae17d18a468cce72540b194.png" srcset="">
                                        <span class="onclick-link footer-link" data-href="/countries/thailand">
                                            <span class="caption">THAILAND</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="New Zealand" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/andaman-056508e12d2428e8b3efb7de2565cf254584ea97daa8fe9b75719571b2fd6dff.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/andaman-056508e12d2428e8b3efb7de2565cf254584ea97daa8fe9b75719571b2fd6dff.png" srcset="">
                                        <span class="onclick-link footer-link" data-href="/states/andaman-and-nicobar-islands">
                                            <span class="caption">ANDAMAN</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="India" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/india-08df8c7f2902e2293487bf7c922aceb0db3ba59b462eae1309d7fbe3de720ec5.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/india-08df8c7f2902e2293487bf7c922aceb0db3ba59b462eae1309d7fbe3de720ec5.png" srcset="">
                                        <span class="onclick-link footer-link" data-href="/countries/india">
                                            <span class="caption">INDIA</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Ladakh" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/ladakh-66ea2f16d4f34af639c26118dfbabfcb8cdc37ea298f8505bd702d76fc5e3f76.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/ladakh-66ea2f16d4f34af639c26118dfbabfcb8cdc37ea298f8505bd702d76fc5e3f76.png" srcset="">
                                        <span class="onclick-link footer-link" data-href="/cities/ladakh">
                                            <span class="caption">LADAKH</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Hong Kong" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/hongkong-706a1492cba46d77363ed21678108ca17f87ec6f92cbbbb97ab561e4c3501b9f.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/hongkong-706a1492cba46d77363ed21678108ca17f87ec6f92cbbbb97ab561e4c3501b9f.png" srcset="">
                                        <span class="onclick-link footer-link" data-href="/countries/hong-kong">
                                            <span class="caption">HONGKONG</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Singapore" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/srilanka-5c2d88de3877628c6b384f6c2ba6d51d018bd1460b7e4666825ddb7f6e1bc25f.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/srilanka-5c2d88de3877628c6b384f6c2ba6d51d018bd1460b7e4666825ddb7f6e1bc25f.png" srcset="">
                                        <span class="onclick-link footer-link" data-href="/countries/srilanka">
                                            <span class="caption">SRI LANKA</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="footer-logo">
                        <a href="" class="logo-link">
                            <img src='<?php echo base_url() . 'assets/images/logowhite.png'; ?>' class="desktop-logo mobile-hidden ">
                            <img src='<?php echo base_url() . 'assets/images/logowhite.png';  ?>' class="desktop-hidden mobile-header-logo ">

                            <!-- <div class="thrillo-logo white-logo desktop-logo"></div> -->
                        </a>
                    </div>
                    <ul class="social-list">
                        <li>
                            <span class="onclick-link footer-link" data-href="https://www.facebook.com/Adventure.India.Thrillophilia">
                                <span class="icon-facebook-circle"></span>
                            </span>
                        </li>
                        <li>
                            <span class="onclick-link footer-link" data-href="https://www.instagram.com/thrillophilia/">
                                <span class="icon-instagram-circle"></span>
                            </span>
                        </li>
                        <li>
                            <span class="onclick-link footer-link" data-href="https://twitter.com/thrillophilia">
                                <span class="icon-twitter-circle"></span>
                            </span>
                        </li>
                        <li>
                            <span class="onclick-link footer-link" data-href="https://in.linkedin.com/company/thrillophilia-adventure-tours-pvt.-ltd.">
                                <span class="icon-linkedin-circle"></span>
                            </span>
                        </li>
                        <li>
                            <span class="onclick-link footer-link" data-href="https://www.youtube.com/channel/UC8MbRQQdYhNwOFeXmpK5UBw">
                                <span class="icon-youtube-circle"></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="reserved">
                <div class="container">
                    <span class="caption">© 2021 <a href="/">Thrillophilia.com</a> All rights reserved.</span>
                    <p>The content and images used on this site are copyright protected and copyrights vests with the respective
                        owners. The usage of the content and images on this website is intended to promote the works and no
                        endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.</p>
                </div>
            </div>
        </footer>
    </div>



    </div>
    </div>

</body>