<html>

<head>
    <?php if (isset($details)) {
        foreach ($details->result() as $row) {  ?>
            <meta name="description" content="<?php echo $row->meta_desc; ?>">
            <title><?php echo $row->meta_title; ?></title>
        <?php }
    } else { ?><title>Bangluru</title><?php } ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">


    <link rel='stylesheet' href='<?php echo base_url() ?>assets/css/main.css'>
    <!-- <link rel="preconnect" href="//dmcolafwvvbhg.cloudfront.net" crossorigin=""> -->
    <!-- <link rel="preload" href="//staging-ui.thrillophilia.com" crossorigin=""> -->
    <link rel='stylesheet' href='<?php echo base_url() ?>assets/css/all.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
    <!-- <script src="https://kit.fontawesome.com/e1befffe2c.js" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='<?php echo base_url() ?>assets/js/myjs.js'></script>
    <script src='<?php echo base_url() ?>assets/js/main.js'></script>





</head>

<body>
    <div class="page-container">

        <div id="wrapper" class="wrapper">
            <header id="header" class="transparent-nav " data-scroll-white-nav="true" data-scroll-half-nav="true">
                <div class="header-base">
                    <div class="top-panel" style='<?php if (isset($bgcolor)) echo $bgcolor; ?>'>
                        <div class="container">
                            <div class="inner-wrap">
                                <div href="#" id="header-mobile-nav-opener" class="" style='background:none;'><span></span></div>
                                <strong class="logo">
                                    <a href="">
                                        <img src='<?php echo base_url() . 'assets/images/logowhite.png'; ?>' class="desktop-logo mobile-hidden logowhite ">

                                        <img src='<?php echo base_url() . 'assets/images/logo.png'; ?>' class="desktop-logo mobile-hidden logoblack" style='display:none;'>

                                        <img src='<?php echo base_url() . 'assets/images/logowhite.png';  ?>' class="colored-logo desktop-hidden abc mobile-header-logo mobwhitelogo">

                                        <img src='<?php echo base_url() . 'assets/images/logo.png';  ?>' class="desktop-hidden colored-logo mobile-header-logo  abc mobblacklogo" style='display:none;'>

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
                                    <li><a href="" class="gift-link main-header-link">


                                            <span class="text" style='background:#f07c7c; padding:9px; border-radius:5px;  color:white; box-shadow:0px 0px 8px black; display:flex; padding-right:8px; align-items:center;'><i class="far fa-plus-square fa-2x" style="padding-right:10px; text-align:center;"> </i> New Bussiness</span>
                                        </a>
                                    </li>
                                    <li class="divider desktop-hidden"></li>
                                    <li id="header-login-wrap">
                                        <span data-href="/consumers/sign_in" class="main-header-link trigger-login-popup onclick-link">Log In</span>
                                    </li>
                                    <li class="divider desktop-hidden"></li>
                                    <li class="desktop-hidden"><a href="" class="main-header-link">Help</a></li>
                                    <!-- <li class="desktop-hidden"><a href="#">FAQs</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <input hidden id='fun' value='<?php if (isset($bgcolor)) echo $bgcolor; ?>'>