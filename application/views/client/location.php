<!-- Intro banner section -->
</div>
<div class="banner-section-container">
    <picture class="bg-image">
        <source srcset="" media="(min-width: 1280px)">
        <source srcset="" media="(min-width: 1024px)">
        <source srcset="" media="(min-width: 768px)">
        <source srcset="" media="(min-width: 576px)">
        <source srcset="" media="(min-width: 320px)">
        <source srcset="" media="(max-width: 320px)">
        <img class="bg-image" srcset="<?php echo "assets/images/bang_bg.jpg" ?> " alt="">
    </picture>
    <div class="intro-top-container">
        <div class="container">
            <div class="intro-top-content">
                <div class="head-col">
                    <div class="breadcrumbs-holder mx-4">
                        <ul class="breadcrumbs" itemscope="" itemtype="">
                       
                            <li itemprop="itemListElement" itemscope="" itemtype="">
                                <a itemtype="" itemprop="item" href="<?php echo base_url();?>">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="">
                                <a itemtype="" itemprop="item" href="">
                                    <span itemprop="name"><?php foreach($details->result() as $item) { echo $item->location; break;}?></span>
                                </a>
                                <meta itemprop="position" content="2">
                            </li>
                           
                            
                           
                            
                        </ul>

                    </div>
                   


                </div>
            </div>

            <div class="form-search form-search-style-02 pb-9">
                <form action="search" method="post">
                    <div class="row align-items-end no-gutters" style='margin:10px;'>
                        <div class="col-xl-6 mb-4 mb-xl-0 py-3 px-4 bg-white border-right position-relative rounded-left form-search-item">
                            <label for="key-word" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">What</label>
                            <div class="input-group dropdown show" onclick="dropwhat()">
                                <input type="text" name="selected_cat_name" id="keyval" class="form-control border-0 px-0  keyval bg-transparent valofcat" autocomplete="off" placeholder="Ex: food, service, barber, hotel" data-toggle="dropdown" value="" aria-haspopup="true" aria-expanded="ture" style='box-shadow:none; color:black'>
                                <a href="#" class="input-group-append text-decoration-none" data-toggle="dropdown">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu form-search-ajax ulclsw" aria-labelledby="key-word" x-placement='top-start' style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(20px, -205px, 0px);">

                                    <?php foreach ($cat->result() as $row) { ?>
                                        <li class="dropdown-item item">


                                            <p value="<?php echo $row->id; ?>" text="<?php echo $row->category_name; ?>" onclick="getval(this)">
                                                <span class="lisize">
                                                    <?php echo $row->category_name; ?>
                                                </span>
                                            </p>
                                        </li>

                                    <?php } ?>


                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-4 mb-xl-0 py-3 px-4 bg-white position-relative rounded-right form-search-item">
                            <label for="key-word" class="font-size-md font-weight-semibold text-dark mb-0 lh-1">Where</label>
                            <div class="input-group dropdown show" onclick="drop()">
                                <input type="text" autocomplete="off" id="subloc" name="selected_subloc" class="form-control form-control-mini border-0 px-0 bg-transparent" placeholder="San Francisco" data-toggle="dropdown" value="" aria-haspopup="true" style='box-shadow:none; color:black'>
                                <a href="#" class="input-group-append text-decoration-none" data-toggle="dropdown">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu form-search-ajax ulcls" aria-labelledby="key-word" x-placement='top-start' style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(20px, -205px, 0px);">

                                    <?php foreach ($subloc->result() as $row) { ?>
                                        <li class="dropdown-item item">
                                            <p class="lisize" value="<?php echo $row->sub_loc_name; ?>" onclick="getsublocval(this)">
                                                <?php echo $row->sub_loc_name; ?>
                                            </p>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 button">
                            <button type="submit" name='submit' value='submit' class="btn btn-primary btn-lg btn-icon-left btn-block"><i class="fas fa-search"></i>Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>



<div class="col-sm-12 bg-white" style='margin:0px; padding:15px; border-bottom:1px solid grey;'>
    <?php foreach ($cat->result() as $row) { ?>
        <div class='secondary_navbar mx-5 animated bounceInUp'>

            <div class='secondary-icon'>
                <a href="<?php echo $row->location.'/'.$row->category_name?>" class='text-decorate'>
                    <img src="<?php echo $row->icon; ?>" alt="icon" class='image-icon'>
                    <p class='pag' style='text-align:center;'> <?php echo $row->category_name; ?></p>
                </a>

            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php } ?>



</div>




<!-- Trending Section -->
<section class="section__trending">
    <div class="container">
        <div class="multi-line-header multi-line-header--centered">
            <div class="multi-line-header__title">
                Top Brands in <?php foreach($details->result() as $row) {echo $row->location; break;}?>
                <!-- <span class="icon-flash icon-trending"></span> -->
            </div>
        </div>
        <div class="tour-card-list tour-card-list--v2 tour-carousel">
             <?php foreach($feature1->result() as $row){ ?>
            <div class="tour-card-v2" aria-hidden="true" role="tabpanel" id="slick-slide00">
                <div data-href="<?php echo base_url(). $row->location;?>/detail/<?php echo str_replace(" ","-",$row->business_name); ?>" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="2430">
                    <div class="tour-card-v2__banner">
                        <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(min-width: 1024px)" srcset="<?php echo $row->main_image; ?>">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(min-width: 768px)" srcset="<?php echo $row->main_image; ?>">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(min-width: 576px)" srcset="<?php echo $row->main_image; ?>">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(min-width: 320px)" srcset="<?php echo $row->main_image; ?>">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(max-width: 320px)" srcset="<?php echo $row->main_image; ?>"><img alt="<?php echo $row->main_img_alt; ?>" class="tour-card-v2__image" data-srcset="<?php echo $row->main_image; ?>" data-src="<?php echo $row->main_image; ?>" src="" srcset="<?php echo $row->main_image; ?>">
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
                                <span class="tour-card-v2__location"><?php echo $row->location; ?></span>
                                <span class="tour-card-v2__location-duration-separator">|</span>
                                <span><?php echo $row->sub_location; ?></span>
                            </ul>
                        </div>
                    </div>
                    <div class="tour-card-v2__details-wrap">
                        <a href="/tours/kudremukh-trek-in-chikmagalur" class="tour-card-v2__name text-decoration-none" target="_blank" tabindex="-1"><?php echo $row->features; ?></a>
                        <div class="tour-card-v2__reviews-wrap">
                            <div class="icon-star-empty"></div>
                            <div class="tour-card-v2__average-rating"><?php echo $row->rating; ?></div>
                            
                        </div>
                        <div class="tour-card-v2__price-and-cta-wrap">
                            <div class="tour-card-v2__pricing">
                                <span class="current-price"><span class="currency-type">₹</span><?php echo $row->price_range; ?></span>
                                <span class="old-price"><span class="currency-type">₹</span>2,949</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
           
        </div>
    </div>
</section>

<!-- //////////////////////////////////////////////////////////////////// -->
<!-- Carousel -->
<br><br>
<div class="container desktop_banner1" >
    <div id="carouselCont" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style='height:350px;'>
        <div class="carousel-item active">
                <img src="<?php echo base_url() . 'uploads/banners/1.jpg'; ?>" class="d-block w-100" style='height:300px' alt="...">
            </div>
        <?php foreach($banner1->result() as $row) { ?>
            <div class="carousel-item ">
                <img src="<?php echo $row->img_url_desk; ?>" class="d-block w-100 " style='height:300px' alt="<?php echo $row->img_alt_desktop; ?>">
            </div>
            <?php }?>
           
           
        </div>
        <button class="carousel-control-prev" style='margin-top:-20px;' type="button" data-bs-target="#carouselCont" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>

        </button>

        <button class="carousel-control-next" type="button" style='margin-top:-20px;' data-bs-target="#carouselCont" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container mobile_banner1"  >
    <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style='height:350px;'>
        <div class="carousel-item active">
                <img src="<?php echo base_url() . 'uploads/banners/2.jpg'; ?>" class="d-block w-100" style='height:300px' alt="...">
            </div>
        <?php foreach($banner1->result() as $row){ ?>
            <div class="carousel-item ">
                <img src="<?php echo $row->img_url_mob; ?>" class="d-block w-100 " style='height:300px' alt="<?php echo $row->img_alt_mobile; ?>">
            </div>
        <?php } ?>
            
        </div>
        <button class="carousel-control-prev" style='margin-top:-20px;' type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>

        </button>

        <button class="carousel-control-next" type="button" style='margin-top:-20px;' data-bs-target="#carouselControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<style>
@media (max-width:768px){
    .desktop_banner1{
        display: none;
    }
    .mobile_banner1{
        display: block;
    }
    .desktop_banner2{
        display: none;
    }
    .mobile_banner2{
        display: block;
    }
}
@media (min-width:768px){
    .desktop_banner1{
        display: block;
    }
    .mobile_banner1{
        display: none;
    }
    .desktop_banner2{
        display: block;
    }
    .mobile_banner2{
        display: none;
    }
}
</style>




<section class="section__trending">
    <div class="container">
        <div class="multi-line-header multi-line-header--centered">
            <div class="multi-line-header__title">
                Luxury Resort Deals
                <!-- <span class="icon-flash icon-trending"></span> -->
            </div>
            <div class="multi-line-header__caption">Upto 70% Off</div>
        </div>
        <div class="tour-card-list tour-card-list--v2 tour-carousel">
            <?php foreach($feature2->result() as $row){ ?>
            <div class="tour-card-v2" aria-hidden="true" role="tabpanel" id="slick-slide10">
                <div data-href="<?php echo base_url().$row->location;?>/detail/<?php echo str_replace(" ","-",$row->business_name);?>" target="_blank" class="tour-card-v2__wrap onclick-link " data-id="10192">
                    <div class="tour-card-v2__banner">
                        <picture class="lazy-picture tour-card-v2__image lazy-picture-loaded">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(min-width: 1024px)" srcset="<?php echo $row->main_image; ?>">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(min-width: 768px)" srcset="<?php echo $row->main_image; ?>">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(min-width: 576px)" srcset="<?php echo $row->main_image; ?>">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(min-width: 320px)" srcset="<?php echo $row->main_image; ?>">
                            <source data-srcset="<?php echo $row->main_image; ?>" media="(max-width: 320px)" srcset="<?php echo $row->main_image; ?>"><img alt="<?php echo $row->main_img_alt; ?>" class="tour-card-v2__image" data-srcset="<?php echo $row->main_image; ?>" data-src="<?php echo $row->main_image; ?>" src="" srcset="<?php echo $row->main_image; ?>">
                        </picture>
                        <div class="tour-card-v2__legibility-gradient"></div>
                        <div class="tour-card-v2__banner-data-wrap">
                            <span class="tour-card-v2__tags">
                                <span class="tour-card-v2__tag tour-card-v2__tag--flag">
                                    New Arrival
                                </span>
                            </span>

                            <ul class="tour-card-v2__additional-info">
                                <span class="icon-pin-bold"></span>
                                <span class="tour-card-v2__location"><?php echo $row->location; ?></span>
                                <span class="tour-card-v2__location-duration-separator">|</span>
                                <span><?php echo $row->sub_location; ?></span>
                            </ul>
                        </div>
                    </div>
                    <div class="tour-card-v2__details-wrap">
                        <a href="/tours/aloha-resort-stay-with-spa-experience-flat-40-off" class="tour-card-v2__name text-decoration-none" target="_blank" tabindex="-1"><?php echo $row->features; ?></a>
                        <div class="tour-card-v2__reviews-wrap">
                            <div class="icon-star-empty"></div>
                            <div class="tour-card-v2__average-rating"><?php echo $row->rating; ?></div>
                           
                        </div>
                        <div class="tour-card-v2__price-and-cta-wrap">
                            <div class="tour-card-v2__pricing">
                                <span class="current-price"><span class="currency-type">₹</span><?php echo $row->price_range; ?></span>
                                <span class="old-price"><span class="currency-type">₹</span>8,600</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</section>

<!-- Carousel for banner  -->
<br><br><br><br>
<div class="container desktop_banner2">
    <div id="carouselEx" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style='height:350px;'>
            <div class="carousel-item active">
                <img src="<?php echo 'uploads/banners/112.jpg'; ?>" class="d-block w-100 " style='height:300px' alt="...">
            </div>
            <?php foreach($banner2->result() as $row){ ?>
            <div class="carousel-item">
                <img src="<?php echo $row->img_url_desk; ?>" class="d-block w-100" style='height:300px' alt="<?php echo $row->img_alt_desktop; ?>">
            </div>
            <?php }?>
            
        </div>
        <button class="carousel-control-prev" style='margin-top:-20px;' type="button" data-bs-target="#carouselEx" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>

        </button>

        <button class="carousel-control-next" type="button" style='margin-top:-20px;' data-bs-target="#carouselEx" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container mobile_banner2"  >
    <div id="carouselCos" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style='height:350px;'>
            <div class="carousel-item active">
                <img src="<?php echo base_url() . 'assets/images/b2.jpg'; ?>" class="d-block w-100 " style='height:300px' alt="...">
            </div>
            <?php foreach($banner2->result() as $row){ ?>
            <div class="carousel-item">
                <img src="<?php echo $row->img_url_mob; ?>" class="d-block w-100" style='height:300px' alt="<?php echo $row->img_alt_mobile;?>">
            </div>
            <?php }?>
            
        </div>
        <button class="carousel-control-prev" style='margin-top:-20px;' type="button" data-bs-target="#carouselCos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>

        </button>

        <button class="carousel-control-next" type="button" style='margin-top:-20px;' data-bs-target="#carouselCos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>









<section class="travel-news-section">
    <div class="container">
        <div class="multi-line-header multi-line-header--centered">
            <div class="multi-line-header__title">Latest Travel Trends</div>
        </div>

        <div class="travel-news-section__wrap">
            <div class="travel-news-section__list">
                <?php foreach($blogs->result() as $row){ ?>
                <a target="_blank" class="travel-news-section__list-item travel-news">
                    <img class="lazy-image travel-news__image lazy-image-loaded" sizes="100vw" data-src="<?php echo $row->blog_img;?>" data-srcset="<?php echo $row->blog_img;?>" src="<?php echo $row->blog_img;?>" srcset="<?php echo $row->blog_img;?>">
                    <div class="travel-news__details">
                        <div class="travel-news__title">
                            <?php echo $row->blog_desc;?>
                        </div>
                        <div class="travel-news__info"><?php echo $row->date_created;?></div>
                    </div>
                </a>
                <?php }?>
                <a class="generic-info__link view-more-link text-decoration-none" href="<?php echo $this->uri->segment(1);?>/blogs/list">Know More <span class="icon-right-arrow"></span></a>
            
            </div>
            <?php foreach($feature_blog->result() as $row) { ?>
            <a href='<?php echo $row->location; ?>/blogs/<?php echo $row->slug; ?>' target="_blank" href="" style='text-decoration:none;'>
                <img class="lazy-image travel-news-section__featured-image lazy-image-loaded" sizes="100vw" data-src="<?php echo $row->blog_img; ?>" data-srcset="" src="<?php echo $row->blog_img; ?>" srcset="">
                <div class="travel-news-section__featured-title offset-1">
                    <?php echo $row->blog_title; ?>
                </div>
                <div class="travel-news-section__featured-snippet offset-1">
                <?php echo $row->blog_desc; ?>
                </div>
                <span class="travel-news-section__featured-read-more view-more-link" style="float:right;">Read Full Article <span class="icon-right-arrow"></span></span>
            </a>
            <?php }?>
        </div>
    </div>
</section>



<div class="generic-info generic-info--ltr">
    <div class="container">
        <div class="generic-info__details">
            <div class="generic-info__title">Gift an Experience</div>
            <div class="generic-info__text">With Thrillophilia Gift Cards</div>
            <a target="_blank" class="generic-info__btn view-more-btn view-more-btn--lg" href="">Know More</a>
        </div>
        <img class="lazy-image generic-info__image lazy-image-loaded limg" sizes="100vw" data-src="" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/homepage/gift-cards-78b72042445e315512f84d9d75380aeb7ace65f45f1fd65474780a9b0c942bb0.png" srcset="">
        
    </div>
</div>








<!-- Partners section -->
<section class="section__partners">
    <div class="container">
        <div class="multi-line-header multi-line-header--centered">
            <div class="multi-line-header__title">Our Partners</div>
            <div class="multi-line-header__caption">We team up with the best to give you an unmatchable experience</div>
        </div>
        <div class="thrillo-partners-container">
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="viator" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/homepage/viator-ace82fd6e0f52c90cb97dfedae13e212210d8d98df012e3634ca932771cd4d87.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/homepage/viator-ace82fd6e0f52c90cb97dfedae13e212210d8d98df012e3634ca932771cd4d87.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="expedia" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/homepage/expedia-cf1b09354d04ea8bfde079edcfabffd9ac6504d53bd6a26e3cc95c78deac0307.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/homepage/expedia-cf1b09354d04ea8bfde079edcfabffd9ac6504d53bd6a26e3cc95c78deac0307.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="trip advisor" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/homepage/tripadvisor-67f84dff35a7a2f8fffa85eeccdfa79f23a752345978c70506de1b42b67832ed.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/homepage/tripadvisor-67f84dff35a7a2f8fffa85eeccdfa79f23a752345978c70506de1b42b67832ed.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="make my trip" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/makemytrip-logo-e0d70f96800e068bbc5b523b72a4d6444f2c794a08478b6ff2f1bcef5aca2aff.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/makemytrip-logo-e0d70f96800e068bbc5b523b72a4d6444f2c794a08478b6ff2f1bcef5aca2aff.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="airbnb" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/airbnb-logo-c0cc623b0da749f03d88517e23d8a104b20bfe084c5b2e10face4764cd8054b0.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/airbnb-logo-c0cc623b0da749f03d88517e23d8a104b20bfe084c5b2e10face4764cd8054b0.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="homeaway" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/homeaway-logo-be9babb2d4ee38ddacc8d543307eba7c9b480666234e5f2b14f93f71f07b8918.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/homeaway-logo-be9babb2d4ee38ddacc8d543307eba7c9b480666234e5f2b14f93f71f07b8918.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="mariott" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/mariott-black-logo-3278cc43d0bff9e6e189e5d487e6750935b11f69db55444affa5b9a45f949e14.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/mariott-black-logo-3278cc43d0bff9e6e189e5d487e6750935b11f69db55444affa5b9a45f949e14.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="sterling" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/sterling-logo-83708a7104c0bdea01b4a7b4edbe98d49eb3ea3a923dc7294fcd8ad99b758524.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/sterling-logo-83708a7104c0bdea01b4a7b4edbe98d49eb3ea3a923dc7294fcd8ad99b758524.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="amazing thailand" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/homepage/amazing-thailand-logo-e8085f6855f7a37b9a97dbe472815a1bdac53c540c3b823006f48104298f16fc.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/homepage/amazing-thailand-logo-e8085f6855f7a37b9a97dbe472815a1bdac53c540c3b823006f48104298f16fc.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="hong kong tourism" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/homepage/hk-tourism-logo-2634d459072c29822eb13be28111113bb163c2f556008386d224ebb7d16e214f.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/homepage/hk-tourism-logo-2634d459072c29822eb13be28111113bb163c2f556008386d224ebb7d16e214f.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="visit sweden" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/visit-sweden-logo-5d19aff8b4fdc4b5e30162160ffd508d5178323d892148fec9a653eb60251790.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/visit-sweden-logo-5d19aff8b4fdc4b5e30162160ffd508d5178323d892148fec9a653eb60251790.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="madhya pradesh tourism" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/mp-tourism-logo-cd0343e09de5c46fcc5c22d476ed3f0dde60a1e02f78a25a639bfb4685b042b5.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/mp-tourism-logo-cd0343e09de5c46fcc5c22d476ed3f0dde60a1e02f78a25a639bfb4685b042b5.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="jordan" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/jordan-logo-8ef37d1c364d83fb45e0bdf0852cb6c427616d91a568508cb68c080dbb4f6973.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/jordan-logo-8ef37d1c364d83fb45e0bdf0852cb6c427616d91a568508cb68c080dbb4f6973.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="atta" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/homepage/atta-8ed3e5072f7079a64c2ad841b9956253b6c28c9eb31d4da449606ecf61d4148f.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/homepage/atta-8ed3e5072f7079a64c2ad841b9956253b6c28c9eb31d4da449606ecf61d4148f.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="isuzu" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/isuzu-logo-8a6d0070eed8e37c183c57a7975814c2b372be73de3bd59d22676d60f635d6a6.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/isuzu-logo-8a6d0070eed8e37c183c57a7975814c2b372be73de3bd59d22676d60f635d6a6.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="mahindra" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/mahindra-logo-420a8fe3d52f77d892ede7a765a4ffa74c6c2ec28ea3489442fb085478bbca49.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/mahindra-logo-420a8fe3d52f77d892ede7a765a4ffa74c6c2ec28ea3489442fb085478bbca49.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="tvs" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/tvs-logo-33279dd1d169bc288d6ea774dbbe01cd9b6a413a361625095536ea195a194b04.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/tvs-logo-33279dd1d169bc288d6ea774dbbe01cd9b6a413a361625095536ea195a194b04.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="uber" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/uber-logo-7a70dca26812f5ee32139f2b580676c6936628eabae46a8d10cc8ba657958e12.jpg" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/uber-logo-7a70dca26812f5ee32139f2b580676c6936628eabae46a8d10cc8ba657958e12.jpg" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="zoomcar" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/zoomcar-logo-2410dbade419f21875689bf8dc5b61c39b62afefef1541930613338fc086029d.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/zoomcar-logo-2410dbade419f21875689bf8dc5b61c39b62afefef1541930613338fc086029d.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="gopro" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/gopro-black-logo-98b6b7d0a8f2fbdfb50e386eb1853fc28fb65948b79c4fbf120aab342e4f54f5.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/gopro-black-logo-98b6b7d0a8f2fbdfb50e386eb1853fc28fb65948b79c4fbf120aab342e4f54f5.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="decathlon" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/decathlon-logo-d8af856eb7dcb8b11559db2d59e5711c864e806a70944505d771ce51bc35adb1.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/decathlon-logo-d8af856eb7dcb8b11559db2d59e5711c864e806a70944505d771ce51bc35adb1.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="wildcraft" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/wildcraft-logo-bab2ac65adea1897d117752de07db443532b4fafa55620a23206f964b111ccbe.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/wildcraft-logo-bab2ac65adea1897d117752de07db443532b4fafa55620a23206f964b111ccbe.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="airasia" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/homepage/airasia-91f344c0c1efef24dd2ed0c60b91e68bebc23664fef1fbc63acaac69660f6694.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/homepage/airasia-91f344c0c1efef24dd2ed0c60b91e68bebc23664fef1fbc63acaac69660f6694.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="skyscanner" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/skyscanner-blue-logo-0e45353d947812d7cbea4d39783e259415c59d70b7e2bbcab1890b9bd6830872.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/skyscanner-blue-logo-0e45353d947812d7cbea4d39783e259415c59d70b7e2bbcab1890b9bd6830872.png" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="mastercard" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/mastercard-logo-4733b7c05b2f228a2d46f83fbdb3135e04d333199cec3a4206d70c22eb0a3c12.svg" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/mastercard-logo-4733b7c05b2f228a2d46f83fbdb3135e04d333199cec3a4206d70c22eb0a3c12.svg" srcset="">
            </div>
            <div class="thrillo-partner-logo">
                <img class="lazy-image thrillo-partner-logo-image lazy-image-loaded" alt="wrangler" sizes="100vw" data-src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/wrangler-logo-30be531bc3a61072675b2c73bf5ff244cd7dff950fc0115d1d64e872c19555d0.png" data-srcset="" src="https://ui-assets-gc.thrillophilia.com/assets/static_pages/partner_with_us/wrangler-logo-30be531bc3a61072675b2c73bf5ff244cd7dff950fc0115d1d64e872c19555d0.png" srcset="">
            </div>
        </div>
    </div>
</section>
</div>
