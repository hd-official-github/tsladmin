<header id="header" class="transparent-nav " data-scroll-white-nav="true" data-scroll-half-nav="true">
    <div class="header-base">
        <div class="top-panel">
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
                        <div href="#" id="header-search-opener" class="desktop-hidden navbar-menu-toggler" data-submenu="adventureExcursionsMobileWrapper" data-menu-loaded="false" data-menu-identifier="adventure_excursions" data-version="mobile" >
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


                                <span class="text" style='background:#f07c7c; padding:9px; border-radius:5px;  color:white; box-shadow:0px 0px 8px black; display:flex; padding-right:8px; align-items:center;'><i class="far fa-plus-square fa-2x" style="padding-right:10px; text-align:center;"> </i> New Bussiness</span>
                            </a>
                        </li>
                        <li class="divider desktop-hidden"></li>
                        <li id="header-login-wrap">
                            <span data-href="/consumers/sign_in" class="main-header-link trigger-login-popup onclick-link">Log In</span>
                        </li>
                        <li class="divider desktop-hidden"></li>
                        <li class="desktop-hidden"><a href="https://thrillophilia.freshdesk.com/support/home" class="main-header-link">Help</a></li>
                        <!-- <li class="desktop-hidden"><a href="#">FAQs</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>