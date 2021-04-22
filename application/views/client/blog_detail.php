<body style="background-color: black;" class='text-white'>

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm-12">
                <div class="container" style="margin-top: 100px; font-size:45px;">
                    <div class="continer mt-5">
                        <div class="row">
                            
                            <di class="col-sm-6 offset-md-2">
                                <?php foreach($blogs->result() as $row){ ?>
                                <h1 style='font-size:50px; color:white;'> <?php echo $row->blog_title; ?> </h1>
                                <hr style='color:white' class='mt-5'>
                                <div class='usercont' style='font-size:25px;'><img class='img img-responsive userpic' src="<?php echo base_url() . 'assets/images/logowhite.png' ?>" style='margin-top:-10px;'> <span class='mx-2 thespa'>Posted by <b>thespaline</b> on <?php echo $row->date_created;?></span> </div>
                                <?php }?>
                        </div>

                    </div>
                    <div class="row" style='margin-top:100px'>
                       <?php foreach($blogs->result() as $row){ ?>
                        <img src="<?php echo $row->blog_img; ?>" class='blog_pic' alt="">
                        <?php }?>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 mt-5">
                            <div class="offset-2 text-just">
                               
                                <p>
                                <?php foreach($blogs->result() as $row){  
                                    echo $row->blog_desc; }?>
                                
                                </p>
                               
                            </div>

                        </div>
                    </div>
                    <div class="row mt-5">
                        
                        
                        <hr style='color:white' class='mt-5'>
                        <div class='usercont' style='font-size:25px;'><img class='img img-responsive userpic' src="<?php echo base_url() . 'assets/images/logowhite.png' ?>" style='margin-top:-10px;'> <span class='mx-2 thespa'>Posted by <b>thespaline</b> on <?php foreach($blogs->result() as $row){ echo $row->date_created; }?> </span> </div>
                    </div>
                    </di>

                </div>
              
            </div>
            <footer id="footer" class="footer abcdef" style="background-color: black;">
                    <div class="container">
                        <div class="pre-footer">
                            <div class="row">
                                <div class="col">
                                    <p class="footer-titles">ABOUT THESPALINE</p>
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
                </footer>
        </div>
    </div>
</body>
<style>
    .userpic {
        height: 32px;
        width: 73px;

    }

    .blog_pic {
        height: 500px;
        width: 100%;
        border-radius: 10px;
    }
.abcdef::before{
    background: black;
}
    div p {
        font-size: 18px;
    }

    .text-just {
        text-align: justify;
        color: #f1f1f1;
    }

    .lastimg {
        height: 200px;
    }

    .reposrtsize {
        font-size: 14px;
        margin-top: 10px;
        color: grey;
    }
    .thespa{
        font-size:14px;
        flex:none;
        margin-top:2px;
    }

    .reportcont {
        font-size: 24px;
    }

    .subhed {
        font-size: 18px;
        color: grey;
    }

    @media (max-width:1024px) {
        .blog_pic {
            height: auto;
            width: auto;
        }

        .usercont {
            display: flex;
            font-size:14px;
        }

        .text-just {
            margin: 0px;

        }
    }

    @media(min-width:1024px) {
        .usercont {
            display: inline-block;
        }
    }
</style>