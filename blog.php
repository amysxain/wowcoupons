<?php include 'header.php'; ?>
    <div class="clearfix"></div>
    <div class="sbg m30bottom" style="border-bottom:1px solid #FFF">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="">Home</a></li>
                <li>»</li>
                <li><a href="">Categories</a></li>
                <li>»</li>
                <li><a href="">Sub Category</a></li>
                <li>»</li>
                <li><span>Store Name</span></li>
            </ul>

        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container m30bottom">
        <div class="row">
            <div class="col-md-9 col-xs-12 pull-right">

                <div class="deals blog-listing">
                    <?php
                    $banners = array("banner-3", "banner-4", "banner-4", "banner-3", "banner-3", "banner-4", "banner-4", "banner-3");
                    foreach ($banners as $banner) {
                        ?>
                        <div class="col-md-6 col-xs-12 m30bottom">
                            <div class="large-banner main-banners deal">
                                <div class="banner-image"><img src="images/<?php echo $banner; ?>.jpg" alt="" class="img-responsive"></div>

                                <div class="big-banner-content">

                                    <div class="big-details">

                                     <h3><a class="white-text" href="">Increase in water in water charges charges Increase like</a></h3>
                                        <div class="clearfix"></div>
                                        <div class="meta-date mtop-10 mbottom-10"><i class="fa fa-calendar"></i> March 12, 2017</div>
                                        <a href="" class="btn btn-grad waves-effect waves-light">Read More</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>

            </div>

            <div class="col-md-3 m30top sidebar">
                <div class="card">
                    <h3 class="small-haed">Categories</h3>
                    <ul class="bulleted filter">
                        <li><a href="">Lulus</a></li>
                        <li><a href="">Clarks UK</a></li>
                        <li><a href="">Modells</a></li>
                        <li><a href="">Wallis UK</a></li>
                        <li><a href="">Bebe</a></li>
                        <li><a href="">The White Company UK</a></li>
                        <li><a href="">Mothercare</a></li>

                    </ul>


                    <h3 class="small-haed">Related posts</h3>

<div class="related-posts">
                    <div class="deals blog-listing">
                        <?php
                        $banners = array("banner-1", "banner-2", "banner-3");
                        foreach ($banners as $banner) {
                            ?>
                            <div class="m30bottom">
                                <div class="large-banner main-banners deal">
                                    <div class="banner-image"><img src="images/<?php echo $banner; ?>.jpg" alt="" class="img-responsive"></div>

                                    <div class="big-banner-content">

                                        <div class="big-details">

                                            <h3><a class="white-text" href="">Increase in water in water charges charges Increase like</a></h3>
                                            <div class="clearfix"></div>
                                            <div class="meta-date mtop-10 mbottom-10"><i class="fa fa-calendar"></i> March 12, 2017</div>
                                            <a href="" class="btn btn-grad waves-effect waves-light">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
<?php include('footer.php'); ?>