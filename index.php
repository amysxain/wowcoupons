<?php include 'header.php'; ?>

    <div class="clearfix"></div>
    <main class="main">
        <div class="main">


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/banner-1.jpg" alt="...">

                    </div>

                    <div class="item ">
                        <img src="images/banner-1.jpg" alt="...">

                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="container">


                <section class="top-trending-store">


                    <div class="main-heading">
                        <h1 class="main-head line-after">Featured Categories</h1>
                        <h2 class="head-with-border"><span>Over Hundreds of Categories </span></h2>
                    </div>

                    <div class="row">

                        <div class="featured-cat">

                            <div class="col-sm-4 col-xs-12">
                                <div class="cat-box">
                                    <div class="cat-img-head">
                                        <div class="cat-img"><img src="images/category-2.jpg" class="img-responsive"
                                                                  alt=""></div>
                                        <div class="cat-title">
                                            <div class="cat-icon"><img src="images/cat-2.png" alt=""></div>
                                            <div class="cat-title">
                                                <h3>Fashion and Clothing</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="cat-logos-more">
                                        <div class="cat-logo"><a href=""><img src="images/logo-1.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><img src="images/logo-2.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><img src="images/logo-3.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><img src="images/logo-4.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><span>More</span></a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="cat-box">
                                    <div class="cat-img-head">
                                        <div class="cat-img"><img src="images/category-1.jpg" class="img-responsive"
                                                                  alt=""></div>
                                        <div class="cat-title">
                                            <div class="cat-icon"><img src="images/cat-1.png" alt=""></div>
                                            <div class="cat-title">
                                                <h3>Fashion and Clothing</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="cat-logos-more">
                                        <div class="cat-logo"><a href=""><img src="images/logo-1.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><img src="images/logo-2.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><img src="images/logo-3.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><img src="images/logo-4.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><span>More</span></a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="cat-box">
                                    <div class="cat-img-head">
                                        <div class="cat-img"><img src="images/category-3.jpg" class="img-responsive"
                                                                  alt=""></div>
                                        <div class="cat-title">
                                            <div class="cat-icon"><img src="images/cat-3.png" alt=""></div>
                                            <div class="cat-title">
                                                <h3>Fashion and Clothing</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="cat-logos-more">
                                        <div class="cat-logo"><a href=""><img src="images/logo-1.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><img src="images/logo-2.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><img src="images/logo-3.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><img src="images/logo-4.jpg" alt=""
                                                                              class="img-responsive"></a>
                                        </div>
                                        <div class="cat-logo"><a href=""><span>More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>


                </section>

                <div class="clearfix"></div>
                <section class="banner-splitter m30top">
                    <img src="images/banner.jpg" alt="" class="img-responsive full-width">
                </section>
                <div class="clearfix"></div>


                <section class="top-trending-store">


                    <div class="main-heading">
                        <h1 class="main-head line-after">Featured Coupons</h1>
                        <h2 class="head-with-border"><span>Over 1000 Coupons and Codes</span></h2>
                    </div>

                    <div class="row">


                        <div class="featured-coupons">

<?php for ($i = 1; $i <= 6; $i++): ?>
                            <div class="col-md-4 col-xs-12">
                                <div class="cat-box coupon">
                                    <div class="cat-img-head">
                                        <div class="cat-img">
                                            <div class="blurred-filled"
                                                 style="background-image: url(images/logo-<?php echo $i; ?>.jpg)"></div>
                                            <div class="org-logo-store">
                                                <img src="images/logo-<?php echo $i; ?>.jpg" class="img-responsive" alt="">
                                            </div>

                                        </div>
                                        <div class="cat-title">
                                            <div class="cat-title">
                                                <h3>Find 25% Off Technology, Home &
                                                    Garden and Toys in the Clearance at Argos</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="cat-logos-more">
                                        <div class="cat-logo coupon-desc">

                                            <ul>
                                                <li><i class="fa fa-check"></i> <span>Verified</span></li>
                                                <li><i class="fa fa-star"></i> <span>Exclusive</span></li>
                                                <li><i class="fa fa-clock-o"></i> <span>21-11-2017</span></li>
                                            </ul>


                                        </div>

                                        <div class="cat-logo"><a href=""><span>Show Code</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php endfor; ?>

                        </div>


                    </div>
                </section>


            </div>

            <div class="clearfix"></div>


        </div>


    </main>


<?php include 'footer.php'; ?>