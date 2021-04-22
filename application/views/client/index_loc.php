<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- custom css  -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/home.css">
    <!-- bootstrap cdn  -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slick carousel cdn  -->
    <link rel="stylesheet" href="https://rawgit.com/kenwheeler/slick/master/slick/slick.css">
    <link rel="stylesheet" href="https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css">

    <style>
        .half_screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            width: 100%;
            height: 400px;
            background-color: #fff;
            border-bottom: 1px solid #c1c1c1;
            z-index: 9999;
            -webkit-box-shadow: -3px 9px 53px -7px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -3px 9px 53px -7px rgba(0, 0, 0, 0.75);
            box-shadow: -3px 9px 53px -7px rgba(0, 0, 0, 0.75);
            text-align: center;
        }

        .center-box {
            width: 700px;
            padding-top: 80px;
            margin-bottom: 20px;
        }

        .areas {
            margin: 10px 0px;
            flex-direction: row;
        }

        .loc {
            color: #000;

            border: 1px solid #000;
            border-radius: 20px;
            margin: 20px 10px;
            padding: 5px 30px;
            text-decoration: none;
        }

        .loc:hover {
            text-decoration: none;
            color: #dc3545 !important;
        }

        .full-screen {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 9998;
            background-color: #000;
            opacity: 0.3;
        }

        .footer-loc {
            padding-top: 20px;
        }
    </style>
</head>

<body style="position:relative;height:100%;overflow: hidden">
    <div class="full-screen">

    </div>
    <div class="half_screen">
        <div class="center-box">
            <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" width="auto" height="auto">
            <h4 style="margin-top: 20px;">Select your preferred city</h4>
        </div>
        <div class="areas">
            <?php
            foreach ($loc->result() as $row) {
                echo ' <a href="' . base_url() . '' . $row->location_name . '" class="loc">' . $row->location_name . '</a>';
            } ?>
        </div>
        <div class="footer-loc">
            Explore top spas around you
        </div>
    </div>
    <header id="header" class="fixed-top">
        <div class="container">
            <div class="logo float-left">
                <i class="fa fa-map-marker text-danger" style="border-bottom: 1px solid red;"></i>
                <a href="#" class="logo">SPALINE</a>
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li class="drop-down"><a href="#">Pages</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a></li>

                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
            <!-- main-nav -->
        </div>
    </header>
    <!-- #header -->
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
                    <form action="">
                        <div class="col-md-5 col-12 mb-3  d-flex justify-content-center align-items-center">
                            <select class="welcome_one" onchange="location = this.value;">
                                <div class="home_one_two_one">
                                    <div class="home_one_two_one_two">
                                        <p class="text-dark">loremm</p>
                                    </div>
                                    <?php
                                    foreach ($sub_location->result() as $row) {
                                        echo '<option value="' . $row->location_name . '">' . $row->sub_loc_name . ' </option>';
                                    }
                                    ?>
                                    <option value="#">Koramangala</option>
                                    <option value="#">HSR Layout</option>
                                    <option value="#">Electronic city</option>
                                    <option value="#">Jayanagar</option>
                                    <option value="#">Marathahalli</option>
                                    <option value="#">Whitefield</option>
                                    <option value="#">Kadubeesanahalli</option>
                                    <option value="#">Domlur</option>
                                </div>
                            </select>
                        </div>

                        <div class="col-md-5 col-12 d-flex justify-content-center">
                            <select class="welcome_one" onchange="location = this.value;">
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
                    </form>


                </div>
            </div>
        </div>

        <div class="home_one_three">
            <div class="container pt-5">
                <p class="text-secondary">Or browse the highlights</p>
                <div class="row home_one_three_one">
                    <div class="home_one_four">
                        <i class="fa fa-deaf fa-2x"></i>
                        <h6>spa</h6>
                    </div>
                    <div class="home_one_four">
                        <i class="fa fa-bed fa-2x"></i>
                        <h6>massage</h6>
                    </div>
                    <div class="home_one_four">
                        <i class="fa fa-key fa-2x"></i>
                        <h6>stone</h6>
                    </div>
                    <div class="home_one_four">
                        <i class="fa fa-medium fa-2x"></i>
                        <h6>Trigger</h6>
                    </div>
                    <div class="home_one_four">
                        <i class="fa fa-cog fa-2x"></i>
                        <h6>Swedish</h6>
                    </div>
                    <div class="home_one_four">
                        <i class="fa fa-shopping-cart fa-2x"></i>
                        <h6>Deep</h6>
                    </div>
                    <div class="home_one_four">
                        <i class="fa fa-car fa-2x"></i>
                        <h6>Shiatsu</h6>
                    </div>
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

    <section class="slider">

        <div class="card carousel_hard_card">
            <a href="#">
                <div class="card-img">
                    <img class="card-img-top" src="<?php echo base_url() ?>assets/images/feature-detination-2.jpg" class="img-fluid" alt="Card image cap">
                </div>
            </a>
            <div class="card-body carousel_hard_card__body p-2">
                <p class="card-text carosel_card_text">
                <h2> <a href="#" class="text-white text-decoration-none card_title"> Electronic City </a> <br></h2>
                <a href="#" class="text-white text-decoration-none carousel_slider_one_para">40 Listing</a> <br>

                </p>
            </div>
        </div>

        <div class="card carousel_hard_card">
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

        <div class="card carousel_hard_card">
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

        <div class="card carousel_hard_card">
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

        <div class="card carousel_hard_card">
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

        <div class="card carousel_hard_card">
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

        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('nature')"> Nature</button>
            <button class="btn" onclick="filterSelection('cars')"> Cars</button>
            <button class="btn" onclick="filterSelection('people')"> People</button>
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row">
            <div class="col-md-4 col-sm-12 col-12 m-0 p-1">
                <div class="column nature">
                    <div class="content">
                        <img src="images/shop-1.jpg" alt="Mountains" style="width:100%">
                        <h4 class="filter_main_head">Roman Kraft Hotel</h4>
                        <div class="filter_card_one d-flex justify-content-around">
                            <div class="filter_card_one_sub">
                                <p>5.0</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_two_sub">
                                <p>4 rating</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_three_sub">
                                <p>From <span class="text-danger">$56.00</span></p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_fout_sub">
                                <p> <i class="fa fa fa-car"></i> Hotel</p>
                            </div>
                        </div>
                        <div class="filter_card_two d-flex justify-content-around align-items-center">
                            <div class="filter_card_two_sub_one mr-2">

                                <img src="http://templates.g5plus.net/thedir/images/listing/testimonial-1.png" alt="">

                            </div>
                            <div class="filter_card_two_sub_two">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id atque, a itaque ipsum ipsam nihil dolor placeat deleniti odio delectus enim </p>
                            </div>
                        </div>
                        <hr>
                        <div class="filter_card_three d-flex justify-content-around">
                            <div class="filter_card_three_one">
                                <p><i class="fa fa-map-marker mr-2"></i>Electronic City, KA</p>
                            </div>
                            <span class="d"></span>
                            <div class="filter_card_three_two">
                                <p>Open Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-md-4 col-sm-12 col-12 m-0 p-1">
                <div class="column nature">
                    <div class="content">
                        <img src="http://templates.g5plus.net/thedir/images/shop/shop-2.jpg" alt="Lights" style="width:100%">
                        <h4 class="filter_main_head">Roman Kraft Hotel</h4>
                        <div class="filter_card_one d-flex justify-content-around">
                            <div class="filter_card_one_sub">
                                <p>5.0</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_two_sub">
                                <p>4 rating</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_three_sub">
                                <p>From <span class="text-danger">$56.00</span></p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_fout_sub">
                                <p> <i class="fa fa fa-car"></i> Hotel</p>
                            </div>
                        </div>
                        <div class="filter_card_two d-flex justify-content-around align-items-center">
                            <div class="filter_card_two_sub_one mr-2">
                                <img src="http://templates.g5plus.net/thedir/images/listing/testimonial-1.png" alt="">
                            </div>
                            <div class="filter_card_two_sub_two">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id atque, a itaque ipsum ipsam nihil dolor placeat deleniti odio delectus enim </p>
                            </div>
                        </div>
                        <hr>
                        <div class="filter_card_three d-flex justify-content-around">
                            <div class="filter_card_three_one">
                                <p><i class="fa fa-map-marker mr-2"></i>Electronic City, KA</p>
                            </div>
                            <span class="d"></span>
                            <div class="filter_card_three_two">
                                <p>Open Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-12 col-12 m-0 p-1">
                <div class="column nature">
                    <div class="content">
                        <img src="http://templates.g5plus.net/thedir/images/shop/shop-3.jpg" alt="Nature" style="width:100%">
                        <h4 class="filter_main_head">Roman Kraft Hotel</h4>
                        <div class="filter_card_one d-flex justify-content-around">
                            <div class="filter_card_one_sub">
                                <p>5.0</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_two_sub">
                                <p>4 rating</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_three_sub">
                                <p>From <span class="text-danger">$56.00</span></p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_fout_sub">
                                <p> <i class="fa fa fa-car"></i> Hotel</p>
                            </div>
                        </div>
                        <div class="filter_card_two d-flex justify-content-around align-items-center">
                            <div class="filter_card_two_sub_one mr-2">
                                <img src="http://templates.g5plus.net/thedir/images/listing/testimonial-1.png" alt="">
                            </div>
                            <div class="filter_card_two_sub_two">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id atque, a itaque ipsum ipsam nihil dolor placeat deleniti odio delectus enim </p>
                            </div>
                        </div>
                        <hr>
                        <div class="filter_card_three d-flex justify-content-around">
                            <div class="filter_card_three_one">
                                <p><i class="fa fa-map-marker mr-2"></i>Electronic City, KA</p>
                            </div>
                            <span class="d"></span>
                            <div class="filter_card_three_two">
                                <p>Open Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-4 col-sm-12 col-12 m-0 p-1">
                <div class="column cars">
                    <div class="content">
                        <img src="https://images.unsplash.com/photo-1528642474498-1af0c17fd8c3?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVvcGxlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car" style="width:100%">
                        <h4 class="filter_main_head">Roman Kraft Hotel</h4>
                        <div class="filter_card_one d-flex justify-content-around">
                            <div class="filter_card_one_sub">
                                <p>5.0</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_two_sub">
                                <p>4 rating</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_three_sub">
                                <p>From <span class="text-danger">$56.00</span></p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_fout_sub">
                                <p> <i class="fa fa fa-car"></i> Hotel</p>
                            </div>
                        </div>
                        <div class="filter_card_two d-flex justify-content-around align-items-center">
                            <div class="filter_card_two_sub_one mr-2">
                                <img src="http://templates.g5plus.net/thedir/images/listing/testimonial-1.png" alt="">
                            </div>
                            <div class="filter_card_two_sub_two">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id atque, a itaque ipsum ipsam nihil dolor placeat deleniti odio delectus enim </p>
                            </div>
                        </div>
                        <hr>
                        <div class="filter_card_three d-flex justify-content-around">
                            <div class="filter_card_three_one">
                                <p><i class="fa fa-map-marker mr-2"></i>Electronic City, KA</p>
                            </div>
                            <span class="d"></span>
                            <div class="filter_card_three_two">
                                <p>Open Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-12 m-0 p-1">
                <div class="column cars">
                    <div class="content">
                        <img src="https://images.unsplash.com/photo-1454923634634-bd1614719a7b?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8cGVvcGxlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car" style="width:100%">
                        <h4 class="filter_main_head">Roman Kraft Hotel</h4>
                        <div class="filter_card_one d-flex justify-content-around">
                            <div class="filter_card_one_sub">
                                <p>5.0</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_two_sub">
                                <p>4 rating</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_three_sub">
                                <p>From <span class="text-danger">$56.00</span></p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_fout_sub">
                                <p> <i class="fa fa fa-car"></i> Hotel</p>
                            </div>
                        </div>
                        <div class="filter_card_two d-flex justify-content-around align-items-center">
                            <div class="filter_card_two_sub_one mr-2">
                                <img src="http://templates.g5plus.net/thedir/images/listing/testimonial-1.png" alt="">
                            </div>
                            <div class="filter_card_two_sub_two">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id atque, a itaque ipsum ipsam nihil dolor placeat deleniti odio delectus enim </p>
                            </div>
                        </div>
                        <hr>
                        <div class="filter_card_three d-flex justify-content-around">
                            <div class="filter_card_three_one">
                                <p><i class="fa fa-map-marker mr-2"></i>Electronic City, KA</p>
                            </div>
                            <span class="d"></span>
                            <div class="filter_card_three_two">
                                <p>Open Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-12 m-0 p-1">
                <div class="column cars">
                    <div class="content">
                        <img src="https://images.unsplash.com/photo-1517732306149-e8f829eb588a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car" style="width:100%">
                        <h4 class="filter_main_head">Roman Kraft Hotel</h4>
                        <div class="filter_card_one d-flex justify-content-around">
                            <div class="filter_card_one_sub">
                                <p>5.0</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_two_sub">
                                <p>4 rating</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_three_sub">
                                <p>From <span class="text-danger">$56.00</span></p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_fout_sub">
                                <p> <i class="fa fa fa-car"></i> Hotel</p>
                            </div>
                        </div>
                        <div class="filter_card_two d-flex justify-content-around align-items-center">
                            <div class="filter_card_two_sub_one mr-2">
                                <img src="http://templates.g5plus.net/thedir/images/listing/testimonial-1.png" alt="">
                            </div>
                            <div class="filter_card_two_sub_two">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id atque, a itaque ipsum ipsam nihil dolor placeat deleniti odio delectus enim </p>
                            </div>
                        </div>
                        <hr>
                        <div class="filter_card_three d-flex justify-content-around">
                            <div class="filter_card_three_one">
                                <p><i class="fa fa-map-marker mr-2"></i>Electronic City, KA</p>
                            </div>
                            <span class="d"></span>
                            <div class="filter_card_three_two">
                                <p>Open Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-4 col-sm-12 col-12 m-0 p-1">
                <div class="column people">
                    <div class="content">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OHx8cGVvcGxlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car" style="width:100%">
                        <h4 class="filter_main_head">Roman Kraft Hotel</h4>
                        <div class="filter_card_one d-flex justify-content-around">
                            <div class="filter_card_one_sub">
                                <p>5.0</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_two_sub">
                                <p>4 rating</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_three_sub">
                                <p>From <span class="text-danger">$56.00</span></p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_fout_sub">
                                <p> <i class="fa fa fa-car"></i> Hotel</p>
                            </div>
                        </div>
                        <div class="filter_card_two d-flex justify-content-around align-items-center">
                            <div class="filter_card_two_sub_one mr-2">
                                <img src="http://templates.g5plus.net/thedir/images/listing/testimonial-1.png" alt="">
                            </div>
                            <div class="filter_card_two_sub_two">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id atque, a itaque ipsum ipsam nihil dolor placeat deleniti odio delectus enim </p>
                            </div>
                        </div>
                        <hr>
                        <div class="filter_card_three d-flex justify-content-around">
                            <div class="filter_card_three_one">
                                <p><i class="fa fa-map-marker mr-2"></i>Electronic City, KA</p>
                            </div>
                            <span class="d"></span>
                            <div class="filter_card_three_two">
                                <p>Open Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-4 col-sm-12 col-12 m-0 p-1">
                <div class="column people">
                    <div class="content">
                        <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fHBlb3BsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car" style="width:100%">
                        <h4 class="filter_main_head">Roman Kraft Hotel</h4>
                        <div class="filter_card_one d-flex justify-content-around">
                            <div class="filter_card_one_sub">
                                <p>5.0</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_two_sub">
                                <p>4 rating</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_three_sub">
                                <p>From <span class="text-danger">$56.00</span></p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_fout_sub">
                                <p> <i class="fa fa fa-car"></i> Hotel</p>
                            </div>
                        </div>
                        <div class="filter_card_two d-flex justify-content-around align-items-center">
                            <div class="filter_card_two_sub_one mr-2">
                                <img src="http://templates.g5plus.net/thedir/images/listing/testimonial-1.png" alt="">
                            </div>
                            <div class="filter_card_two_sub_two">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id atque, a itaque ipsum ipsam nihil dolor placeat deleniti odio delectus enim </p>
                            </div>
                        </div>
                        <hr>
                        <div class="filter_card_three d-flex justify-content-around">
                            <div class="filter_card_three_one">
                                <p><i class="fa fa-map-marker mr-2"></i>Electronic City, KA</p>
                            </div>
                            <span class="d"></span>
                            <div class="filter_card_three_two">
                                <p>Open Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-12 col-12 m-0 p-1">
                <div class="column people">
                    <div class="content">
                        <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjF8fHBlb3BsZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Car" style="width:100%">
                        <h4 class="filter_main_head">Roman Kraft Hotel</h4>
                        <div class="filter_card_one d-flex justify-content-around">
                            <div class="filter_card_one_sub">
                                <p>5.0</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_two_sub">
                                <p>4 rating</p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_three_sub">
                                <p>From <span class="text-danger">$56.00</span></p>
                            </div>
                            <div class="d"></div>
                            <div class="filter_card_fout_sub">
                                <p> <i class="fa fa fa-car"></i> Hotel</p>
                            </div>
                        </div>
                        <div class="filter_card_two d-flex justify-content-around align-items-center">
                            <div class="filter_card_two_sub_one mr-2">
                                <img src="http://templates.g5plus.net/thedir/images/listing/testimonial-1.png" alt="">
                            </div>
                            <div class="filter_card_two_sub_two">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id atque, a itaque ipsum ipsam nihil dolor placeat deleniti odio delectus enim </p>
                            </div>
                        </div>
                        <hr>
                        <div class="filter_card_three d-flex justify-content-around">
                            <div class="filter_card_three_one">
                                <p><i class="fa fa-map-marker mr-2"></i>Electronic City, KA</p>
                            </div>
                            <span class="d"></span>
                            <div class="filter_card_three_two">
                                <p>Open Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- END GRID -->
        </div>

        <!-- END MAIN -->
    </div>






    <!-- part four  -->

    <div class="part-four">
        <div class="container my-5">
            <div class="part_four_box">
                <div class="part_four_box_left">
                    <h2><span class="part_four_color mr-2">some</span>Tips & Articles</h2>
                </div>
                <div class="part_four_box_right">
                    <h4> <a href="#" class="text-decoration-none">All articles</a> <i class="fa fa-caret-right"></i> </h4>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="part_four_container">
                        <a href="blog/sample-blog.html" class="text-decoration-none">
                            <div class="card">
                                <div class="card-img">
                                    <img src="http://templates.g5plus.net/thedir/images/blog/main-blog-2.jpg" alt="" class="card-img-top">

                                </div>
                                <h6 class="mt-3">Tips, Travel</h6>
                                <b>10 Best Homestay In Florencia That You Don't Miss Out</b>
                                <p class="mt-2">Aug 28th, 2017 by <a href="#">Admin</a> </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="part_four_container">
                        <a href="#" class="text-decoration-none">
                            <div class="card">
                                <div class="card-img">
                                    <img src="http://templates.g5plus.net/thedir/images/blog/main-blog-3.jpg" alt="" class="card-img-top">

                                </div>
                                <h6 class="mt-3">Tips, Travel</h6>
                                <b>10 Best Homestay In Florencia That You Don't Miss Out</b>
                                <p class="mt-2">Aug 28th, 2017 by <a href="#">Admin</a> </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="part_four_container">
                        <a href="#" class="text-decoration-none">
                            <div class="card">
                                <div class="card-img">
                                    <img src="http://templates.g5plus.net/thedir/images/blog/main-blog-1.jpg" alt="" class="card-img-top">

                                </div>
                                <h6 class="mt-3">Tips, Travel</h6>
                                <b>10 Best Homestay In Florencia That You Don't Miss Out</b>
                                <p class="mt-2">Aug 28th, 2017 by <a href="#">Admin</a> </p>
                            </div>
                        </a>
                    </div>
                </div>

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
    <footer>
        <div class="footer_one">
            <div class="container">
                <div class="footer_container">
                    <div class="row">
                        <div class="col-md-4 mb-4 col-sm-12 col-12 d-flex justify-content-center">
                            <div class="footer_part_one">
                                <div class="logos">
                                    <i class="fa fa-map-marker text-danger"></i>
                                    <a href="#" class="logo text-dark">spa</a>
                                </div>
                                <h6 class="mt-5">Global Headquaters</h6>
                                <address class="mt-4">
                                    90 Fifth Avenue, 3rd Floor, <br>
                                    New York NY 10011, <br>
                                    212.913.9058 <br>
                                </address>
                                <div class="footer_part_region mt-5">
                                    <h6>Recent Region</h6>
                                    <select class="welcome_ones" onchange="location = this.value;">
                                        <div class="home_one_two_one">
                                            <div class="home_one_two_one_two">
                                                <p class="text-dark">loremm</p>
                                            </div>
                                            <option value="#">Koramangala</option>
                                            <option value="#">HSR Layout</option>
                                            <option value="#">Electronic city</option>
                                            <option value="#">Jayanagar</option>
                                            <option value="#">Marathahalli</option>
                                            <option value="#">Whitefield</option>
                                            <option value="#">Kadubeesanahalli</option>
                                            <option value="#">Domlur</option>
                                        </div>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-4 col-sm-6 col-6 d-flex justify-content-center">
                            <div class="footer_part_two">
                                <h6 class="mb-4">Company</h6>
                                <a href="#">About Us</a>
                                <a href="#">Team</a>
                                <a href="#">Careers</a>
                                <a href="#">Investors</a>
                                <a href="#">Contact Us</a>
                                <a href="#">Offices</a>
                            </div>
                        </div>
                        <div class="col-md-2 mb-4 col-sm-6 col-6 d-flex justify-content-center">
                            <div class="footer_part_two">
                                <h6 class="mb-4">Quick Links</h6>
                                <a href="#">FAQS</a>
                                <a href="#">Support</a>
                                <a href="#">Sitemap</a>
                                <a href="#">Community</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 col-sm-12 col-12 d-flex justify-content-center">
                            <div class="footer_part_three">
                                <h6 class="mb-4">Our Newsletter</h6>
                                <p>Subscribe to our newsletter and <br>
                                    we will inform you about newset <br> directory and promotions</p>
                                <div class="white_box mt-4">
                                    <input type="text" placeholder="Email Address...">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-5">
            <div class="row">
                <div class="col-md-3 d-flex justify-content-center">
                    <div class="footer_last_left">
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-google-plus"></i>
                        <i class="fa fa-camera-retro"></i>
                        <i class="fa fa-wifi"></i>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <p>© 2020 The Dir. All Rights Resevered. Design by G5Theme</p>
                </div>
                <div class="col-md-3">
                    <div class="footer_last_right">
                        <a href="#" class="text-dark text-decoration-none"><i class="fa fa-arrow-up"></i> Back to top</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <div class="popular_searches">
        <div class="container">
            <div class="row">
                <b>POPULAR SEARCHES</b>
                <hr class="bg-success">
            </div>
            <div class="popular_one">

                <a href="#">Makeup</a> <span class="d mr-2"></span>
                <a href="#">Dress for Girls</a> <span class="d mr-2"></span>
                <a href="#">T-shirts</a> <span class="d mr-2"></span>
                <a href="#">Sandals</a> <span class="d mr-2"></span>
                <a href="#">Headphones</a> <span class="d mr-2"></span>
                <a href="#">Babydolls</a> <span class="d mr-2"></span>
                <a href="#">Blazer for men</a> <span class="d mr-2"></span>
                <a href="#">Handbags</a> <span class="d mr-2"></span>
                <a href="#">Ladies Watches</a> <span class="d mr-2"></span>
                <a href="#">Bags</a> <span class="d mr-2"></span>
                <a href="#">Sport Shoes</a> <span class="d mr-2"></span>
                <a href="#">Reebok Shoes</a> <span class="d mr-2"></span>
                <a href="#">puma</a> <span class="d mr-2"></span>

                <a href="#">Makeup</a> <span class="d mr-2"></span>
                <a href="#">Dress for Girls</a> <span class="d mr-2"></span>
                <a href="#">T-shirts</a> <span class="d mr-2"></span>
                <a href="#">Sandals</a> <span class="d mr-2"></span>
                <a href="#">Headphones</a> <span class="d mr-2"></span>
                <a href="#">Babydolls</a> <span class="d mr-2"></span>
                <a href="#">Blazer for men</a> <span class="d mr-2"></span>
                <a href="#">Handbags</a> <span class="d mr-2"></span>
                <a href="#">Ladies Watches</a> <span class="d mr-2"></span>
                <a href="#">Bags</a> <span class="d mr-2"></span>
                <a href="#">Sport Shoes</a> <span class="d mr-2"></span>
                <a href="#">Reebok Shoes</a> <span class="d mr-2"></span>
                <a href="#">puma</a> <span class="d mr-2"></span>

                <a href="#">Makeup</a> <span class="d mr-2"></span>
                <a href="#">Dress for Girls</a> <span class="d mr-2"></span>
                <a href="#">T-shirts</a> <span class="d mr-2"></span>
                <a href="#">Sandals</a> <span class="d mr-2"></span>
                <a href="#">Headphones</a> <span class="d mr-2"></span>
                <a href="#">Babydolls</a> <span class="d mr-2"></span>
                <a href="#">Blazer for men</a> <span class="d mr-2"></span>
                <a href="#">Handbags</a> <span class="d mr-2"></span>
                <a href="#">Ladies Watches</a> <span class="d mr-2"></span>
                <a href="#">Bags</a> <span class="d mr-2"></span>
                <a href="#">Sport Shoes</a> <span class="d mr-2"></span>
                <a href="#">Reebok Shoes</a> <span class="d mr-2"></span>
                <a href="#">puma</a> <span class="d mr-2"></span>

                <a href="#">Makeup</a> <span class="d mr-2"></span>
                <a href="#">Dress for Girls</a> <span class="d mr-2"></span>
                <a href="#">T-shirts</a> <span class="d mr-2"></span>
                <a href="#">Sandals</a> <span class="d mr-2"></span>
                <a href="#">Headphones</a> <span class="d mr-2"></span>
                <a href="#">Babydolls</a> <span class="d mr-2"></span>
                <a href="#">Blazer for men</a> <span class="d mr-2"></span>
                <a href="#">Handbags</a> <span class="d mr-2"></span>
                <a href="#">Ladies Watches</a> <span class="d mr-2"></span>
                <a href="#">Bags</a> <span class="d mr-2"></span>
                <a href="#">Sport Shoes</a> <span class="d mr-2"></span>
                <a href="#">Reebok Shoes</a> <span class="d mr-2"></span>
                <a href="#">puma</a> <span class="d mr-2"></span>

                <a href="#">Makeup</a> <span class="d mr-2"></span>
                <a href="#">Dress for Girls</a> <span class="d mr-2"></span>
                <a href="#">T-shirts</a> <span class="d mr-2"></span>
                <a href="#">Sandals</a> <span class="d mr-2"></span>
                <a href="#">Headphones</a> <span class="d mr-2"></span>
                <a href="#">Babydolls</a> <span class="d mr-2"></span>
                <a href="#">Blazer for men</a> <span class="d mr-2"></span>
                <a href="#">Handbags</a> <span class="d mr-2"></span>
                <a href="#">Ladies Watches</a> <span class="d mr-2"></span>
                <a href="#">Bags</a> <span class="d mr-2"></span>
                <a href="#">Sport Shoes</a> <span class="d mr-2"></span>
                <a href="#">Reebok Shoes</a> <span class="d mr-2"></span>
                <a href="#">puma</a> <span class="d mr-2"></span>

            </div>


            <div class="popular_last my-4">
                <b>ONLINE SHOPPING MADE EASY AT MYNTRA</b>
                <p class="mt-3">If you would like to experience the best of online shopping for men, women and kids in India, you are at the right place. Myntra is the ultimate destination for fashion and lifestyle, being host to a wide array of merchandise including clothing, footwear, accessories, jewellery, personal care products and more. It is time to redefine your style statement with our treasure-trove of trendy items. Our online store brings you the latest in designer products straight out of fashion houses. You can shop online at Myntra from the comfort of your home and get your favourites delivered right to your doorstep.</p>
            </div>
            <div class="popular_last my-4">
                <b>BEST ONLINE SHOPPING SITE IN INDIA FOR FASHION</b>
                <p class="mt-3">Be it clothing, footwear or accessories, Myntra offers you the ideal combination of fashion and functionality for men, women and kids. You will realise that the sky is the limit when it comes to the types of outfits that you can purchase for different occasions.</p>

                <ol>
                    <li> <b>Smart men’s clothing - </b>At Myntra you will find myriad options in smart formal shirts and trousers, cool T-shirts and jeans, or kurta and pyjama combinations for men. Wear your attitude with printed T-shirts. Create the back-to-campus vibe with varsity T-shirts and distressed jeans. Be it gingham, buffalo, or window-pane style, checked shirts are unbeatably smart. Team them up with chinos, cuffed jeans or cropped trousers for a smart casual look. Opt for a stylish layered look with biker jackets. Head out in cloudy weather with courage in water-resistant jackets. Browse through our innerwear section to find supportive garments which would keep you confident in any outfit. </li>
                    <li> <b>Smart men’s clothing - </b>At Myntra you will find myriad options in smart formal shirts and trousers, cool T-shirts and jeans, or kurta and pyjama combinations for men. Wear your attitude with printed T-shirts. Create the back-to-campus vibe with varsity T-shirts and distressed jeans. Be it gingham, buffalo, or window-pane style, checked shirts are unbeatably smart. Team them up with chinos, cuffed jeans or cropped trousers for a smart casual look. Opt for a stylish layered look with biker jackets. Head out in cloudy weather with courage in water-resistant jackets. Browse through our innerwear section to find supportive garments which would keep you confident in any outfit. </li>
                    <li> <b>Smart men’s clothing - </b>At Myntra you will find myriad options in smart formal shirts and trousers, cool T-shirts and jeans, or kurta and pyjama combinations for men. Wear your attitude with printed T-shirts. Create the back-to-campus vibe with varsity T-shirts and distressed jeans. Be it gingham, buffalo, or window-pane style, checked shirts are unbeatably smart. Team them up with chinos, cuffed jeans or cropped trousers for a smart casual look. Opt for a stylish layered look with biker jackets. Head out in cloudy weather with courage in water-resistant jackets. Browse through our innerwear section to find supportive garments which would keep you confident in any outfit. </li>
                    <li> <b>Smart men’s clothing - </b>At Myntra you will find myriad options in smart formal shirts and trousers, cool T-shirts and jeans, or kurta and pyjama combinations for men. Wear your attitude with printed T-shirts. Create the back-to-campus vibe with varsity T-shirts and distressed jeans. Be it gingham, buffalo, or window-pane style, checked shirts are unbeatably smart. Team them up with chinos, cuffed jeans or cropped trousers for a smart casual look. Opt for a stylish layered look with biker jackets. Head out in cloudy weather with courage in water-resistant jackets. Browse through our innerwear section to find supportive garments which would keep you confident in any outfit. </li>
                    <li> <b>Smart men’s clothing - </b>At Myntra you will find myriad options in smart formal shirts and trousers, cool T-shirts and jeans, or kurta and pyjama combinations for men. Wear your attitude with printed T-shirts. Create the back-to-campus vibe with varsity T-shirts and distressed jeans. Be it gingham, buffalo, or window-pane style, checked shirts are unbeatably smart. Team them up with chinos, cuffed jeans or cropped trousers for a smart casual look. Opt for a stylish layered look with biker jackets. Head out in cloudy weather with courage in water-resistant jackets. Browse through our innerwear section to find supportive garments which would keep you confident in any outfit. </li>
                </ol>

                <div class="popular_last my-4">
                    <b>ONLINE SHOPPING MADE EASY AT MYNTRA</b>
                    <p class="mt-3">If you would like to experience the best of online shopping for men, women and kids in India, you are at the right place. Myntra is the ultimate destination for fashion and lifestyle, being host to a wide array of merchandise including clothing, footwear, accessories, jewellery, personal care products and more. It is time to redefine your style statement with our treasure-trove of trendy items. Our online store brings you the latest in designer products straight out of fashion houses. You can shop online at Myntra from the comfort of your home and get your favourites delivered right to your doorstep.</p>
                </div>

                <div class="popular_last my-4">
                    <b>ONLINE SHOPPING MADE EASY AT MYNTRA</b>
                    <p class="mt-3">If you would like to experience the best of online shopping for men, women and kids in India, you are at the right place. Myntra is the ultimate destination for fashion and lifestyle, being host to a wide array of merchandise including clothing, footwear, accessories, jewellery, personal care products and more. It is time to redefine your style statement with our treasure-trove of trendy items. Our online store brings you the latest in designer products straight out of fashion houses. You can shop online at Myntra from the comfort of your home and get your favourites delivered right to your doorstep.</p>
                </div>

            </div>


        </div>
    </div>




    <!-- bootstrap cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- custom js  -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script src="<?php echo base_url() ?>assets/js/slick.js"></script>
    <script src="<?php echo base_url() ?>assets/js/filter.js"></script>

    <!-- slick js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>


    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
</body>

</html>