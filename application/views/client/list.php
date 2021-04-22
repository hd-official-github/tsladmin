<div class="wrapper-content wrapper-content--ud" infinite-scroll="">
    <div class="wrapper">


        <div class='container breadcrab'>
            <div class="breadcrumbs-nav">
                <nav class="fl-row">
                    <a class="text-uppercase text-decoration-none" href="<?php echo base_url(); ?>">Thespaline</a>

                    <a class="text-uppercase text-decoration-none" href="">Deals in <?php foreach ($sub_cat->result() as $row) {
                                                                                        echo $row->location;
                                                                                        break;
                                                                                    } ?></a>
                    <a class="text-uppercase cursor-default text-decoration-none" href=""><?php foreach ($cat->result() as $row) {
                                                                                                echo $row->category_name;
                                                                                            } ?></a>
                </nav>
            </div>
            <hr class="divider divider--thick">

        </div>


        <div class="container">
            <div class="row">

                <div class="col-sm-12 setoverflow newscroll" style='margin:0px; overflow:scroll; white-space:nowrap;'>
                    <?php foreach ($sub_cat->result() as $row) { ?>
                        <a href="<?php echo base_url() . $row->location; ?>/detail/<?php echo str_replace(" ", "-", $row->business_name); ?>" class="btn" style='border-radius: 56px; height: 60px; vertical-align: middle; border:1px solid #cfcfcf; padding:5px;'>
                            <div style="height:auto; width:auto; outline:none;">
                                <img src="<?php echo $row->main_image; ?>" alt="<?php echo $row->main_img_alt; ?>" style='height:52px; width:56px; border-radius:100%; margin:-2px 8px 3px -2px'><span style='font-size:16px; font-weight: 400; padding:20px;'><?php echo $row->business_name; ?></span>
                            </div>
                        </a>

                        &nbsp;
                    <?php } ?>



                </div>

            </div>
            <div class="container lshead">
                <div class="row mt-5">

                    <div class="col-sm-4 listheading">Promos and filters
                    </div>

                    <div class="col-sm-8 listheading">Best Spa in <span><?php foreach ($sub_cat->result() as $row) {
                      echo $row->location; break; } ?></span></div>

                </div>
            </div>
            <div class="bg-white p-3 chead secondhead" style='margin-top:-20px; width:100%;'>
                <div class='row'>
                    <div class="col-sm-12">
                        <img src="<?php echo base_url() . 'assets/images/backward.png'; ?>" class='spainBang'>
                        <h3 style="position:relative; left:29px; top:17px">Best Spa in <?php foreach ($sub_cat->result() as $row) {
                                                                                            echo $row->location;
                                                                                            break;
                                                                                        } ?></h3>
                    </div>
                </div>
            </div>
            <!-- /////the bottom row  -->

        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-4 filter mt-4">

                    <promo-slider>
                        <div class="position-relative card-main  promo-slider-wrapper mt-3" style='border-radius:5px;'>

                            <div class="all-promo-wrapper">
                                <div class="promo-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0.6s;">
                                    <!---->
                                    <div class="promo-cont">
                                        <promo-card initindex="1">
                                            <div class="promo" ga-impression="">
                                                <div class="block margin-reset clearfix overflow-hidden">
                                                    <!---->
                                                    <div class="block__inner local-promo">

                                                        <!---->

                                                        <!---->
                                                        <div class="promo__price">
                                                            <p class="txt-primary font-weight-bold white-space-normal" style="font-size:18px;">Win Rs 500 instant off code</p>
                                                        </div>


                                                        <div class="promo__off">


                                                        </div>


                                                        <!---->
                                                        <div class="promo__title">
                                                            <p class="font-weight-semibold" style='font-size:14px; color:grey'> Valid on all prepaid deals | No minimum purchase</p>
                                                        </div>


                                                        <!---->
                                                        <div class="promo__code clearfix position-relative">
                                                            <div class="promo__code__text">NBLUCKY</div>
                                                            <!---->
                                                            <div class="promo__code__copy">
                                                                <!---->
                                                                <div class="tooltip-wrapper">
                                                                    <button class="font-weight-semibold">Copy</button>
                                                                    <div class="tooltip tooltip--left"> Code copied
                                                                        <span class="arrow"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                    </div>

                                                    <!---->


                                                    <div class="block__footer block__footer--sm bg-white">
                                                        <div class="row">
                                                            <div class="col-sm-7 col-s-7">

                                                                <!---->
                                                                <div class="promo__validity">
                                                                    <div class="txt-left">
                                                                        <p class="line-height-xs">Valid till 30 Apr 2021</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-5 col-s-5">

                                                                <!---->
                                                                <div class="promo__more">
                                                                    <div class="float-right" style='text-align:right'>
                                                                        <button class=" view-more-btn" style='padding:5px;'>Know more
                                                                            <!---->
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </promo-card>
                                    </div>


                                </div>
                            </div>

                            <!---->

                        </div>

                    </promo-slider>


                </div>
                <div class="col-sm-8 col-m-8 col-l-9 listing-grid">
                    <merchant-listing-grid>

                        <div class="row fl-row fl-row--wrap fl-row--full-gutter">
                            <?php foreach ($sub_cat->result() as $row) { ?>
                                <div class="col-xs-12 col-s-12 col-m-6 col-l-4 fl-column col-sm-4 mt-5">
                                    <merchant-list-card pagetype="listing">
                                        <a href="<?php echo base_url() . $row->location; ?>/detail/<?php echo str_replace(" ", "-", $row->business_name); ?>" class="card-main onvisit card-main--equal-height w-100 cursor-pointer text-decoration-none" same-height="" href="bang_details" value="">
                                            <div class="card-main__content card-main__content--lg">

                                                <div class="">
                                                    <div class="fl-column position-relative">
                                                        <img class="card-main__img img-responsive" src="<?php echo $row->main_image; ?>" style="max-height: 155px; height:145px; border-radius: 3px;" data-lzled="true">
                                                        <!---->
                                                        <merchant-rating>
                                                            <!---->
                                                            <div class="margin-right-s mt-3 card-rating__listing">
                                                                <div class="card-rating margin-bottom-zero nb--4-5">
                                                                    <!----><img alt="nb" class="card-rating__nb" height="10" src="<?php echo base_url() . 'assets/images/sl_icon.png'; ?>" data-lzled="true">
                                                                    <!---->
                                                                    <span class="card-rating__img"></span>
                                                                    <!----><span class="card-rating__value font-weight-bold line-height-default"><?php echo $row->rating; ?></span>
                                                                </div>
                                                            </div>


                                                        </merchant-rating>
                                                    </div>

                                                    <div class="fl-column" style='padding:8px;'>

                                                        <h2 class="card-main__heading margin-top-s ">
                                                            <?php echo  $row->business_name; ?>

                                                            <span class="card-main__value line-height-xs display-inline-block font-weight-regular display-block margin-top-xs" style='margin-left:5px; margin-top:2px;'>

                                                                <?php echo $row->about; ?>
                                                            </span>

                                                        </h2>


                                                    </div>

                                                </div>



                                                <div class="card-list margin-top-s" style='padding:8px; margin-top: -12px;'>

                                                    <div class="card-main cm">

                                                        <div class="fl-row fl-row--middle fl-row--start margin-bottom-xs" style='display:flex; align-items:baseline;'>
                                                            <p class="tag tag--delight tag--small white-space-nowrap txt-uppercase margin-bottom-zero line-height-default bg-delight-1">Deals</p>

                                                            <p class="card-main__value txt-primary line-height-primary font-weight-semibold" style='position:relative; left:-23px;'>
                                                                Massage Offer

                                                                from
                                                                <i class="fas fa-rupee-sign rupee"></i><?php echo $row->price_range; ?>

                                                            </p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-main__footer">


                                                <div class="section content-footer border-radius--bottom" style='height:57px;'>

                                                    <div class="fl-row fl-row--middle" style='display:inline-block; color:black; font-weight:600;'>

                                                        <span><img src="<?php echo base_url() . 'assets/images/review2.png'; ?>" alt="" style='height:28px; width:27px; display:inline-flex;'></span>

                                                        <span class="fl-column" style='top:6px; font-size:12px; display:absolute;'>
                                                            <?php
                                                            $this->load->model('catogery_model');
                                                            $review = $this->catogery_model->get_review($row->business_id);
                                                            foreach ($review->result() as $row) { ?>

                                                                <?php echo $row->name; ?>

                                                                <p class="card-main__field line-height-xs font-weight-semibold txt-secondary bought-count">

                                                                <?php echo substr($row->review_text, 0, 35) . "...";
                                                            } ?>

                                                                </p>
                                                        </span>

                                                        <!-- <div class="fl-column">

                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </merchant-list-card>
                                </div>
                            <?php } ?>





                            <!-- mycarousel -->

                            <div class="container mt-5">
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

                                    <button class="carousel-control-next" type="button" style="margin-top:-20px;" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>








                            <div class="row fl-row fl-row--wrap fl-row--full-gutter">
                                <?php foreach ($catloc->result() as $row) { ?>
                                    <div class="col-xs-12 col-s-12 col-m-6 col-l-4 col-sm-4 mt-5">
                                        <merchant-list-card pagetype="listing">
                                            <a href="<?php echo base_url() . $row->location; ?>/detail/<?php echo str_replace(" ", "-", $row->business_name); ?>" class="card-main onvisit card-main--equal-height     cursor-pointer  text-decoration-none">
                                                <div class="card-main__content card-main__content--lg">

                                                    <div>
                                                        <div class="fl-column position-relative">
                                                            <img class="card-main__img img-responsive" src="<?php echo $row->main_image; ?>" style="max-height: 155px; height:145px; border-radius: 3px;" data-lzled="true">
                                                            <!---->
                                                            <merchant-rating>
                                                                <!---->
                                                                <div class="margin-right-s card-rating__listing">
                                                                    <div class="card-rating mt-3 margin-bottom-zero nb--4-5">
                                                                        <!----><img alt="nb" class="card-rating__nb" height="10" src="<?php echo base_url() . 'assets/images/sl_icon.png'; ?>" data-lzled="true">

                                                                        <span class="card-rating__img"></span>
                                                                        <!----><span class="card-rating__value font-weight-bold line-height-default"><?php echo $row->rating; ?></span>
                                                                    </div>
                                                                </div>

                                                                <!---->
                                                            </merchant-rating>
                                                        </div>

                                                        <div class="fl-column" style='padding:8px;'>

                                                            <h2 class="card-main__heading margin-top-s ">
                                                                <?php echo  $row->business_name; ?>

                                                                <span class="card-main__value line-height-xs display-inline-block font-weight-regular display-block margin-top-xs" style='margin-left:5px; margin-top:2px;'>
                                                                    <!---->
                                                                    <?php echo $row->about; ?>
                                                                </span>
                                                                <!---->
                                                            </h2>
                                                            <!---->

                                                        </div>

                                                    </div>



                                                    <div class="card-list margin-top-s">

                                                        <div class="card-main cm">

                                                            <div class="fl-row fl-row--middle fl-row--start margin-bottom-xs" style='display:flex; padding:8px; margin-top:-12px; align-items:baseline;'>
                                                                <p class="tag tag--delight tag--small white-space-nowrap txt-uppercase margin-bottom-zero line-height-default bg-delight-1">Deals</p>

                                                                <p class="card-main__value txt-primary line-height-primary font-weight-semibold" style='position:relative; left:-23px;'>
                                                                    Massage Offer

                                                                    from
                                                                    <i class="fas fa-rupee-sign rupee"></i><?php echo $row->price_range; ?>

                                                                </p>
                                                            </div>

                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-main__footer">



                                                    <div class="section content-footer border-radius--bottom" style='height:57px;'>

                                                        <div class="fl-row fl-row--middle" style="display:inline-block; color:black; font-weight:600;">

                                                            <span><img src="<?php echo base_url() . 'assets/images/review2.png'; ?>" alt="" style='height:28px; width:27px; display:inline-flex;'></span>

                                                            <span class="fl-column" style='position:relative; font-size:12px;'> <?php
                                                                                                                                $this->load->model('catogery_model');
                                                                                                                                $review = $this->catogery_model->get_review($row->business_id);
                                                                                                                                foreach ($review->result() as $row) { ?>
                                                                    <?php echo $row->name; ?>

                                                                    <p class="card-main__field line-height-xs font-weight-semibold txt-secondary bought-count">

                                                                    <?php echo substr($row->review_text, 0, 35) . "...";
                                                                                                                                } ?>

                                                                    </p>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </merchant-list-card>
                                    </div>
                                <?php } ?>


                            </div>
                    </merchant-listing-grid>





                    <div class="text-center mt-5">
                        <button class="view-more-btn newbtn" tabindex="0">VIEW ALL OFFERS</button>
                    </div>
                </div>
            </div>
        </div>





    </div>
</div>
</div>
</div>