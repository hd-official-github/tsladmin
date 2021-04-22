<body style="background: black; color:white">
    <div class="container">
        <div class="row" style='margin-top:100px;'>
            <?php foreach ($allblogs->result() as $row) { ?>
                <div class="col-sm-4 mt-3 text-decoration-none gethover" style=' margin:0px; padding:10px; height:600px;'>
                    <div class=""><img src="<?php echo $row->blog_img; ?>" alt="" style='height:265px; width:100%;'></div>
                    <div class='mt-4 ' style='padding:5px;'>
                        <h1 style='color:white;'><?php echo substr($row->blog_title,0,30)."..."; ?></h1>
                        <p class='mt-4 wordwrap'  style='font-size:17px; text-align:justify; color:#92a3ab;'><?php echo substr($row->blog_desc,0,150)."......"; ?> </p>
                    </div>
                    <hr style='color:white;'>
                    <div><a id='forhover' href="<?php echo base_url() . $row->loc; ?>/blog_list/<?php echo $row->slug; ?>" class='btn btn-lg float-right'>Read article</a></div><br><br><br><br>
                    <div class="" style='color:white;'>
                        <img src="<?php echo base_url() . 'assets/images/logowhite.png'; ?>" alt="abc" style='height:27px; width:77px;'><span style='position:relative; top:8px; left:10px;'> Posted by <b>thespaline</b> <?php echo $row->date_created; ?></span>
                    </div>
                </div>
            <?php } ?>





        </div>
        <footer id="footer" class="footer ftr mt-5">
            <div class="container">
                <div class="pre-footer">
                    <div class="row">
                        <div class="col">
                            <p class="footer-titles">ABOUT THRILLOPHILIA</p>
                            <ul class="footer-list">
                                <li><a href="" target="_blank">ABOUT US</a></li>
                                <li><a href="" target="_blank">WE ARE HIRING</a></li>
                                <li><a href="" target="_blank">THRILLOPHILIA REVIEWS</a></li>
                                <li><a href="" target="_blank">TERMS &amp; CONDITIONS</a></li>
                                <li><a href="" target="_blank">PRIVACY POLICIES</a></li>
                                <li><a href="" target="_blank">COPYRIGHT POLICIES</a></li>
                                <li><a href="" target="_blank">SUPPORT</a></li>
                                <li><span class="onclick-link footer-link" data-href="">APPS</span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <p class="footer-titles">FOR SUPPLIERS</p>
                            <ul class="footer-list">
                                <li><a class="footer-link" target="_blank" href="">LIST YOUR ACTIVITIES</a></li>
                            </ul>
                            <p class="footer-titles">FOR BRANDS</p>
                            <ul class="footer-list">
                                <li><a class="footer-link" target="_blank" href="">PARTNER WITH US</a></li>
                                <li><a class="footer-link" target="_blank" href="">DESTINATION MARKETING</a></li>
                            </ul>
                            <p class="footer-titles">FOR TRAVEL AGENTS</p>
                            <ul class="footer-list">
                                <li><span class="onclick-link footer-link" data-href="">SIGN UP AS A AGENT</span></li>
                                <li><span class="onclick-link footer-link" data-href="">AGENT LOGIN</span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <p class="footer-titles">FOR TRAVELLERS</p>
                            <ul class="footer-list">
                                <li><span class="onclick-link footer-link" data-href="">GOPRO PASSPORT PROGRAM</span></li>
                                <li><span class="onclick-link footer-link gift-link" data-href="">Gift an Experience</span></li>
                            </ul>
                        </div>
                        <div class="col destination">
                            <p class="footer-titles">TRAVEL DESTINATIONS</p>
                            <div class="nearby-places-list">
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Bali" sizes="100vw" data-src="" data-srcset="" src="<?php echo base_url() . 'assets/images/bali.png'; ?>" srcset="">
                                        <span class="onclick-link footer-link" data-href="">
                                            <span class="caption">BALI</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Dubai" sizes="100vw" data-src="" data-srcset="" src="<?php echo base_url() . 'assets/images/dubai.png'; ?>" srcset="">
                                        <span class="onclick-link footer-link" data-href="">
                                            <span class="caption">DUBAI</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Singapore" sizes="100vw" data-src="" data-srcset="" src="<?php echo base_url() . 'assets/images/singapur.png'; ?>" srcset="">
                                        <span class="onclick-link footer-link" data-href="">
                                            <span class="caption">SINGAPORE</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Thailand" sizes="100vw" data-src="" data-srcset="" src="<?php echo base_url() . 'assets/images/thailand.png'; ?>" srcset="">
                                        <span class="onclick-link footer-link" data-href="">
                                            <span class="caption">THAILAND</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="New Zealand" sizes="100vw" data-src="" data-srcset="" src="<?php echo base_url() . 'assets/images/andman.png'; ?>" srcset="">
                                        <span class="onclick-link footer-link" data-href="">
                                            <span class="caption">ANDAMAN</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="India" sizes="100vw" data-src="" data-srcset="" src="<?php echo base_url() . 'assets/images/india.png'; ?>" srcset="">
                                        <span class="onclick-link footer-link" data-href="">
                                            <span class="caption">INDIA</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Ladakh" sizes="100vw" data-src="" data-srcset="" src="<?php echo base_url() . 'assets/images/ladakh.png'; ?>" srcset="">
                                        <span class="onclick-link footer-link" data-href="">
                                            <span class="caption">LADAKH</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Hong Kong" sizes="100vw" data-src="" data-srcset="" src="<?php echo base_url() . 'assets/images/hongkong.png'; ?>" srcset="">
                                        <span class="onclick-link footer-link" data-href="">
                                            <span class="caption">HONGKONG</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="nearby-places-item">
                                        <img class="lazy-image nearby-places-item-image lazy-image-loaded" alt="Singapore" sizes="100vw" data-src="" data-srcset="" src="<?php echo base_url() . 'assets/images/srilanka.png'; ?>" srcset="">
                                        <span class="onclick-link footer-link" data-href="">
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

</body>
<style>
    .ftr::before {
        background: black;


    }
    .gethover:hover{
        box-shadow: 0px 0px 5px solid white;
    }

    p:nth-child(odd) {
        font-size: 17px;
        color: #92a3ab;
        display: inline-block;
    }

    p:nth-child(even) {
        font-size: 17px;
        color: #92a3ab;
        /* display: inline-block; */
    }

    #forhover:hover {
        /* border: 2px solid #f07c7c; */
        box-shadow: 0px 0px 5px white;
        color: black;
    }

    #forhover {
        background: #f07c7c;
        color: white;
        border-radius: 6px;
    }
    .wordwrap{
        height:100px;
    }
</style>