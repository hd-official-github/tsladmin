<div id="wrapper-content" class="wrapper-content pb-13">
    <div class="container">
        <div class="page-container">
            <div class="page-content">
                <div class="mb-10">
                    <?php foreach ($blog_details->result() as $row) { ?>
                        <div class="single-blog-top pt-9">
                            <h2 class="text-center mb-3 letter-spacing-50"> <?php echo ucfirst($row->blog_title); ?>
                            </h2>
                            <ul class="list-inline d-flex align-items-center justify-content-center flex-wrap">
                                <li class="list-inline-item mr-1">
                                    <span class="text-gray"><?php echo date('jS F Y', strtotime($row->date_created)); ?> by</span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="link-hover-dark-primary">Admin</a>
                                </li>
                                <li class="list-inline-item">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="link-hover-dark-primary d-inline-block mr-1">Tips,</a><a href="#" class="link-hover-dark-primary">Travel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-12">
                            <img src="<?php echo $row->blog_img; ?>" alt="<?php echo $row->image_alt; ?>">
                        </div>
                        <div class="single-blog-content">
                            <?php echo $row->blog_desc; ?>
                            <!-- <h4 class="mb-8">On the off chance that you have an escalated stop, mull over a short
                                taking a gander at outing. This especially is shrewd in urban areas with brilliant
                                open transportation decisions.
                            </h4> -->
                            <!-- <div class="mb-11"> -->
                            <!-- <p class="mb-7 lh-19 font-size-md">
                                    Today most people get on average 4 to 6 hours of exercise every day, and make
                                    sure that everything they put in their mouths is not filled with sugars or
                                    preservatives, but they pay no attention to their mental health, no vacations,
                                    not even the occasional
                                    long weekend. All of this for hopes of one day getting that big promotion.
                                </p>
                                <p class="mb-7 lh-19 font-size-md">Coventry is a city with a thousand years of
                                    history that has plenty to offer the visiting
                                    <br> tourist. Located in the heart of Warwickshire.
                                </p> -->
                            <!-- <blockquote>
                                <p>
                                    Just ask the local people for the best food. Don’t rely on a guidebook.
                                </p>
                                <cite class="quote-author">
                                    <svg class="icon icon-quote-open">
                                        <use xlink:href="#icon-quote-open"></use>
                                    </svg>
                                    Jelly Cristiana
                                </cite>
                            </blockquote> -->
                            <!-- <p class="lh-19 font-size-md mb-2">
                                    Cray post-ironic plaid, Helvetica keffiyeh tousled Carles banjo before they sold
                                    out blog photo booth Marfa semiotics Truffaut. Mustache Schlitz next level blog
                                    Williamsburg, deep v typewriter tote bag Banksy +1 literally. Lomo 8-bit
                                    pour-over mumblecore
                                    photo booth. Kitsch pork belly cred, small batch butcher selvage direct trade.
                                    Master cleanse Bushwick cornhole narwhal plaid. Seitan vegan Portland, master
                                    cleanse gluten-free fanny pack raw denim hoodie YOLO loko.
                                </p> -->
                        </div>
                        <div class="pb-11 text-center">
                            <div class="mb-5 d-flex justify-content-center flex-column"><span class="text-dark font-weight-semibold pb-5">Tags:</span>
                                <a href="#" class="link-hover-gray-blue">Tips,</a>
                                <a href="#" class="link-hover-gray-blue">Travel,</a>
                                <a href="#" class="link-hover-gray-blue">Homestay,</a>
                                <a href="#" class="link-hover-gray-blue">Experience</a>
                            </div>
                            <div class="d-flex align-items-center pb-2 justify-content-center"><span class="text-dark font-weight-semibold d-inline-block mr-3">Share: </span>
                                <div class="social-icon">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a target="_blank" title="Facebook" href="#">
                                                <i class="fa fa-facebook">
                                                </i>
                                                <span>Facebook</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a target="_blank" title="Twitter" href="#">
                                                <i class="fa fa-twitter">
                                                </i>
                                                <span>Twitter</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a target="_blank" title="Twitter" href="#">
                                                <i class="fa fa-pinterest"></i>
                                                <span>Pinterest</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- <div class="post-author media full-page flex-wrap flex-md-nowrap justify-content-center justify-content-md-start">
                        <div class="image"><img src="images/blog/author-01.jpg" alt="Daniel Vandaft"></div>
                        <div class="media-body mt-4 mt-md-0 text-center text-md-left px-0 px-md-6">
                            <div class="h4 mb-3">Vicious Victor</div>
                            <p class="font-size-md lh-1625">I’m Shane, a gentlemen and lover of life. More off
                                this less hello salamander lied porpoise much over tightly circa horse taped so
                                innocuously outside crud mightily rigorous negative one inside gorilla.
                            </p>
                            <div class="social-icon d-flex justify-content-center justify-content-md-start">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a target="_blank" title="Facebook" href="#">
                                            <i class="fab fa-facebook-f">
                                            </i>
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a target="_blank" title="Twitter" href="#">
                                            <i class="fab fa-twitter">
                                            </i>
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a target="_blank" title="Twitter" href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                            <span>Pinterest</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
            <?php } ?>
            </div>
            <div class="mb-9">
                <div class="mb-8 text-center">
                    <h4 class="mb-0">Posts You’d Might Like</h4>
                </div>
                <div class="row post-style-3">
                    <?php
                    foreach ($recommend->result() as $row) { ?>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="card border-0">
                                <a href="blog-single-image.html" class="hover-scale">
                                    <img src="<?php echo $row->blog_img; ?>" alt="product 1" class="card-img-top image">
                                </a>
                                <div class="card-body px-0">
                                    <div class="mb-2"><a href="#" class="link-hover-dark-primary"><?php echo $row->loc; ?></a>
                                    </div>
                                    <h5 class="card-title">
                                        <a href="blog-single-image.html" class="link-hover-dark-primary text-capitalize"><?php echo $row->blog_title; ?></a>
                                    </h5>
                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-0">
                                            <span class="text-gray">Aug 16th, 2017 by</span>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-hover-dark-primary">LoganCee</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- <div class="py-8 d-flex align-items-center border-top border-bottom">
                <div class="mr-6 mb-2">
                    <a href="blog-single-image.html" class="font-size-h4 link-hover-gray-primary">
                        <span class="d-inline-block mr-3"><i class="fal fa-arrow-left"></i></span>
                        <span>Older</span>
                    </a>
                    <a href="blog-single-image.html" class="d-none d-sm-block link-hover-dark-primary font-weight-semibold font-size-md">Discover
                        Venice, Italy
                    </a>
                </div>
                <div class="ml-auto text-right mb-2">
                    <a href="blog-single-image.html" class="font-size-h4 link-hover-gray-primary">
                        <span>Newer</span>
                        <span class="d-inline-block ml-3"><i class="fal fa-arrow-right"></i></span>
                    </a>
                    <a href="blog-single-image.html" class="d-none d-sm-block link-hover-dark-primary font-weight-semibold font-size-md">Great
                        Experience At MiFost Villa
                    </a>
                </div>
            </div> -->
            <!-- <div class="comments mb-9 mt-11">
                <h3 class="h4 mb-6 text-center">02 Comments</h3>
                <div class="media mb-6">
                    <a href="#" class="image d-inline-block mr-4"><img src="images/blog/single-gallery-comment-1.jpg" alt="Daniel Vandaft"></a>
                    <div class="media-body border-top px-3">
                        <ul class="list-inline pt-3 mb-3">
                            <li class="list-inline-item mr-0">
                                <a href="#" class="link-hover-dark-primary font-weight-semibold d-inline-block mr-1">Daniel
                                    Vandaft </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <span class="font-weight-semibold">-</span>
                            </li>
                            <li class="list-inline-item">
                                <span class="text-uppercase"> Jul 17,2015 at 15 hours ago</span>
                            </li>
                        </ul>
                        <p class="mb-3">Comment example here. Nulla risus lacus, vehicula id mi vitae,
                            auctor accumsan nulla. Sed a mi quam. Lorem In euismod urna ac massa adipiscing
                            interdum.
                        </p>
                        <a href="#form-comment" class="action anchorjs-link">Reply</a>
                    </div>
                </div>
                <div class="media mb-6">
                    <a href="#" class="image"><img src="images/blog/single-gallery-comment-2.jpg" alt="Daniel Vandaft"></a>
                    <div class="media-body border-top px-3">
                        <ul class="list-inline pt-3 mb-3">
                            <li class="list-inline-item mr-0">
                                <a href="#" class="link-hover-dark-primary font-weight-semibold d-inline-block mr-1">Vannessa
                                    Elina</a>
                            </li>
                            <li class="list-inline-item mr-0"><span class="font-weight-bold">-</span></li>
                            <li class="list-inline-item mr-0"><span class="text-uppercase"> Jul 17,2015 at
                                    15 hours ago</span>
                            </li>
                        </ul>
                        <div class="mb-3">Comment example here. Nulla risus lacus, vehicula id mi vitae,
                            auctor accumsan nulla. Sed a mi quam. Lorem In euismod urna ac massa adipiscing
                            interdum.
                        </div>
                        <a href="#form-comment" class="action anchorjs-link">Reply</a>
                    </div>
                </div>
                <div class="sub-comment">
                    <div class="media">
                        <a href="#" class="image d-inline-block mr-3"><img src="images/blog/single-gallery-comment-1.jpg" alt="Daniel Vandaft"></a>
                        <div class="media-body px-3">
                            <ul class="list-inline pt-3 mb-3">
                                <li class="list-inline-item mr-0">
                                    <a href="#" class="link-hover-dark-primary font-weight-semibold d-inline-block mr-1">Daniel
                                        Vandaft </a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <span class="font-weight-semibold">-</span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-uppercase"> Jul 17,2015 at 15 hours ago</span>
                                </li>
                            </ul>
                            <div class="mb-3">Comment example here. Nulla risus lacus, vehicula id mi vitae,
                                auctor accumsnulla.
                            </div>
                            <a href="#form-comment" class="action anchorjs-link">Reply</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="form-comment" id="form-comment">
                <div class="mb-6 text-center">
                    <h3 class="mb-0">Leave a comment</h3>
                </div>
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control bg-transparent" placeholder="Name *">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control bg-transparent" placeholder="Email *">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control bg-transparent" type="text" placeholder="Subject (Optinal)">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary text-uppercase btn-lg px-5">Post
                            Comment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>