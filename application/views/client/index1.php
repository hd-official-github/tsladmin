<style>
</style>
<section id="home_one">
    <div class="container">
        <div class="home_one">
            <h1>Discover</h1>
            <h2>your amazing spa</h2>
            <p class="text-secondary">Find great places to stay, eat, shop, or visit from local experts.</p>
        </div>

        <div class="home_one_two">
            <div class="row">
                <div class="col-md-5 col-12 mb-3  d-flex justify-content-center align-items-center">
                    <select class="welcome_one" onchange="location = this.value;">
                        <div class="home_one_two_one d-flex justify-content-center align-items-center align-content-center">
                            <?php foreach ($sub_location->result() as $row) {
                                echo '<option value="' . $row->location_name . '">' . ucfirst($row->sub_loc_name) . ' </option>';
                            }
                            ?>
                        </div>
                    </select>
                </div>

                <div class="col-md-5 col-12 d-flex justify-content-center">
                    <select class="welcome_one" onchange="location = this.value;">
                        <?php foreach ($category->result() as $row) {
                            echo '<option value="' . $row->category_name . '">' . ucfirst($row->category_name) . ' </option>';
                        }
                        ?>
                        <option value="#">Services</option>
                        <option value="#">Koramangala</option>
                        <option value="#">HSR Layout</option>
                        <option value="#">Electronic city</option>
                        <option value="#">Jayanagar</option>
                        <option value="#">Marathahalli</option>
                        <option value="#">Whitefield</option>
                        <option value="#">Kadubeesanahalli</option>
                        <option value="#">Domlur</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <button class="btn bg-danger welcome_one_btn">
                        <i class="fa fa-search pr-1 fa-lg"></i>Search
                    </button>
                </div>

            </div>
        </div>













    </div>

    <div class="home_one_three">
        <div class="container pt-5">
            <p class="text-secondary">Or browse the highlights</p>
            <div class="row home_one_three_one">

                <?php
                foreach ($category->result() as $row) { ?>
                    <div class="home_one_four">
                        <img src="assets/images/spa.jpg" alt="" width="62px">
                        <h6><?php echo ucfirst($row->category_name); ?></h6>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

</section>




<!-- part two  -->

<div id="part_two">
    <div class="container">
        <div class="part_two_heading">
            <h2><span class="part_two_dark mr-2">See</span>How It Works</h2>
        </div>
        <div class="row my-5">
            <div class="col-md-4 mb-4">
                <div class="part_two_one">
                    <div class="part_two_sub_one">
                        <div class="round_box">
                            <i class="fa fa-check"></i>
                        </div>
                        <h2>1</h2>
                    </div>
                    <div class="part_two_sub_two">
                        <h5>Choose What To Do</h5>
                        <p class="text-muted">Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="part_two_one">
                    <div class="part_two_sub_one">
                        <div class="round_box">
                            <i class="fa fa-check"></i>
                        </div>
                        <h2>2</h2>
                    </div>
                    <div class="part_two_sub_two">
                        <h5>Find What You Want</h5>
                        <p class="text-muted">Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="part_two_one">
                    <div class="part_two_sub_one">
                        <div class="round_box">
                            <i class="fa fa-check"></i>
                        </div>
                        <h2>3</h2>
                    </div>
                    <div class="part_two_sub_two">
                        <h5>Explore Amazing Places</h5>
                        <p class="text-muted">Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do some shopping?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>








<!-- part three  -->

<div class="container my-5">
    <div class="part_three">
        <h2><span class="part_three_head mr-3">Featured</span>Destinations</h2>
    </div>
    <div class="row">

    </div>
</div>

<!-- carousel  -->
<!-- carousel  -->




<section class="slider container">

    <div class="card carousel_hard_card p-1 m-0">
        <a href="#">
            <div class="card-img">
                <img class="card-img-top" src="http://templates.g5plus.net/thedir/images/listing/feature-detination-1.jpg" class="img-fluid" alt="Card image cap">
            </div>
        </a>
        <div class="card-body carousel_hard_card__body p-2">
            <p class="card-text carosel_card_text">
            <h2> <a href="#" class="text-white text-decoration-none card_title"> HSR Layout</a> <br></h2>
            <a href="#" class="text-white text-decoration-none carousel_slider_one_para">40 Listing</a> <br>

            </p>
        </div>
    </div>



    <div class="card carousel_hard_card p-1 m-0">
        <a href="#">
            <div class="card-img">
                <img class="card-img-top" src="http://templates.g5plus.net/thedir/images/listing/feature-detination-1.jpg" class="img-fluid" alt="Card image cap">
            </div>
        </a>
        <div class="card-body carousel_hard_card__body p-2">
            <p class="card-text carosel_card_text">
            <h2> <a href="#" class="text-white text-decoration-none card_title"> HSR Layout</a> <br></h2>
            <a href="#" class="text-white text-decoration-none carousel_slider_one_para">40 Listing</a> <br>

            </p>
        </div>
    </div>

    <div class="card carousel_hard_card p-1 m-0">
        <a href="#">
            <div class="card-img">
                <img class="card-img-top" src="http://templates.g5plus.net/thedir/images/listing/feature-detination-3.jpg" class="img-fluid" alt="Card image cap">
            </div>
        </a>
        <div class="card-body carousel_hard_card__body p-2">
            <p class="card-text carosel_card_text">
            <h2> <a href="#" class="text-white text-decoration-none card_title"> Koramangala</a> <br></h2>
            <a href="#" class="text-white text-decoration-none carousel_slider_one_para">40 Listing</a> <br>

            </p>
        </div>
    </div>

    <div class="card carousel_hard_card p-1 m-0">
        <a href="#">
            <div class="card-img">
                <img class="card-img-top" src="http://templates.g5plus.net/thedir/images/listing/feature-detination-4.jpg" class="img-fluid" alt="Card image cap">
            </div>
        </a>
        <div class="card-body carousel_hard_card__body p-2">
            <p class="card-text carosel_card_text">
            <h2> <a href="#" class="text-white text-decoration-none card_title"> Marathahalli</a> <br></h2>
            <a href="#" class="text-white text-decoration-none carousel_slider_one_para">40 Listing</a> <br>

            </p>
        </div>
    </div>

    <div class="card carousel_hard_card p-1 m-0">
        <a href="#">
            <div class="card-img">
                <img class="card-img-top" src="http://templates.g5plus.net/thedir/images/listing/feature-detination-3.jpg" class="img-fluid" alt="Card image cap">
            </div>
        </a>
        <div class="card-body carousel_hard_card__body p-2">
            <p class="card-text carosel_card_text">
            <h2> <a href="#" class="text-white text-decoration-none card_title"> Whitefield</a> <br></h2>
            <a href="#" class="text-white text-decoration-none carousel_slider_one_para">40 Listing</a> <br>

            </p>
        </div>
    </div>

    <div class="card carousel_hard_card p-1 m-0">
        <a href="#">
            <div class="card-img">
                <img class="card-img-top" src="http://templates.g5plus.net/thedir/images/listing/feature-detination-4.jpg" class="img-fluid" alt="Card image cap">
            </div>
        </a>
        <div class="card-body carousel_hard_card__body p-2">
            <p class="card-text carosel_card_text">
            <h2> <a href="#" class="text-white text-decoration-none card_title"> JP Nagar </a> <br></h2>
            <a href="#" class="text-white text-decoration-none carousel_slider_one_para">40 Listing</a> <br>

            </p>
        </div>
    </div>



</section>


<!-- MAIN (Center website) -->
<div class="container">


    <h2><span class="main_onespan">Our</span> Directory</h2>

    <!-- <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('nature')"> Nature</button>
        <button class="btn" onclick="filterSelection('cars')"> Cars</button>
        <button class="btn" onclick="filterSelection('people')"> People</button>
    </div> -->

    <!-- Portfolio Gallery Grid -->
    <div class="row">
        <?php
        foreach ($featured->result() as $row) { ?>
            <div class="card" style="width: 30%;margin:10px;">
                <img class="card-img-top" src="<?php echo $row->main_image; ?>" alt="Card image cap" style="z-index: 9999;">

                <div class="card-body">
                    <p class="h6" style="color:red;">ELECTRONIC CITY</p>
                    <h5 class="card-title"><?php echo $row->business_name; ?></h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="px-4 py-1" style="background:rgb(130,180,64);"><?php echo $row->rating; ?></p>
                        <p style="font-weight: bold;">Starting from <?php echo $row->price_range; ?></p>
                    </div>
                    <div class="d-flex justify-content-between mt-4  py-4" style="border-bottom: 1px solid #c1c1c1;">
                        <div class="d-flex flex-column  text-center "><img src="<?php echo base_url() ?>assets/images/1.jpg" alt="" width="55px"><span style="font-size: 13px;padding-top:10px;">Waxing</span></div>
                        <div class="d-flex flex-column text-center"><img src="<?php echo base_url() ?>assets/images/2.jpg" alt="" width="55px"><span style="font-size: 13px;padding-top:10px;">Sauna</span></div>
                        <div class="d-flex flex-column text-center"><img src="<?php echo base_url() ?>assets/images/3.jpg" alt="" width="55px"><span style="font-size: 13px;padding-top:10px;">Robe</span></div>
                        <div class="d-flex flex-column text-center"><img src="<?php echo base_url() ?>assets/images/4.jpg" alt="" width="55px"><span style="font-size: 13px;padding-top:10px;">Bathtub</span></div>
                    </div>

                    <div class="d-block">
                        <a href="#" class="btn btn-outline-primary btn-block mt-3">MORE INFO</a>
                    </div>
                </div>

            </div>
        <?php } ?>

        <!-- END GRID -->
    </div>

    <!-- END MAIN -->
</div>






<!-- part four  -->

<div class="part-four">
    <div class="container my-5">
        <div class="part_four_box">
            <div class="part_four_box_left">
                <h2><span class="part_four_color mr-2">Some</span>Tips & Articles</h2>
            </div>
            <div class="part_four_box_right">
                <h4> <a href="<?php if (isset($_SESSION['location'])) {
                                    echo $_SESSION['location'] . '/blogs';
                                } ?>" class="text-decoration-none">All articles</a> <i class="fa fa-caret-right"></i> </h4>
            </div>
        </div>
        <div class="row mt-5">
            <?php
            foreach ($blogs->result() as $row) { ?>
                <div class="col-md-4 mb-4">
                    <div class="part_four_container">
                        <a href="<?php echo base_url() . $row->loc . '/blogs/' . str_replace(' ', '-', $row->slug); ?>" class="text-decoration-none">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo $row->blog_img ?>" alt="<?php echo $row->image_alt; ?>" class="card-img-top" height="260px">
                                </div>
                                <h6 class="mt-3">Tips, Travel</h6>
                                <b><?php echo ucfirst($row->blog_title); ?></b>
                                <p class="mt-2">Posted on <?php echo date('jS F Y', strtotime($row->date_created)); ?> by <a href="#">Admin</a> </p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>





<!-- part five  -->

<!-- <div class="container">
    <div class="row">
       
    </div>
</div>


 -->





<div class="part-five-wrapper mb-5">
    <!-- cards carousel  -->
    <div class="container pt-5">
        <div class="sliding__header">
            <h2>Clients <span class="review_light">Review</span></h2>
        </div>
    </div>
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top mt-3" style="float:right">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left text-danger" aria-hidden="true"></i></a>
            <a class="btn-floating text-danger" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators>
      
      <li data-target=" #multi-item-example" data-slide-to="0" class="active">
            </li>
            <li data-target="#multi-item-example" data-slide-to="1" style="display: none;"></li>

        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="container mb-5">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="slider_box">
                                <a href="#">Kanye West</a> <span class="slider_box_light">/ CEO at Google INC</span>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis pariatur, quis id expedita dicta eum rerum deserunt consectetur voluptatem blanditiis libero quidem eos possimus autem? Fuga nisi repudiandae rem atque! </p>
                                <div class="d-flex justify-content-end slider_box_quote">
                                    <i class="fa fa-quote-right fa-3x"></i>
                                </div>
                                <div class="slider_box_img">
                                    <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjF8fHBlb3BsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="slider_box">
                                <a href="#">Kanye West</a> <span class="slider_box_light">/ CEO at Google INC</span>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis pariatur, quis id expedita dicta eum rerum deserunt consectetur voluptatem blanditiis libero quidem eos possimus autem? Fuga nisi repudiandae rem atque! </p>
                                <div class="d-flex justify-content-end slider_box_quote">
                                    <i class="fa fa-quote-right fa-3x"></i>
                                </div>
                                <div class="slider_box_img">
                                    <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fHBlb3BsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="container my-5">
                    <div class="row">


                        <div class="col-md-6 mb-4">
                            <div class="slider_box">
                                <a href="#">Kanye West</a> <span class="slider_box_light">/ CEO at Google INC</span>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis pariatur, quis id expedita dicta eum rerum deserunt consectetur voluptatem blanditiis libero quidem eos possimus autem? Fuga nisi repudiandae rem atque! </p>
                                <div class="d-flex justify-content-end slider_box_quote">
                                    <i class="fa fa-quote-right fa-3x"></i>
                                </div>
                                <div class="slider_box_img">
                                    <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fHBlb3BsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 mb-4">
                            <div class="slider_box">
                                <a href="#">Kanye West</a> <span class="slider_box_light">/ CEO at Google INC</span>
                                <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis pariatur, quis id expedita dicta eum rerum deserunt consectetur voluptatem blanditiis libero quidem eos possimus autem? Fuga nisi repudiandae rem atque! </p>
                                <div class="d-flex justify-content-end slider_box_quote">
                                    <i class="fa fa-quote-right fa-3x"></i>
                                </div>
                                <div class="slider_box_img">
                                    <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fHBlb3BsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <!--/.Second slide-->



        </div>
        <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->



</div>