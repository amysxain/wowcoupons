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
<div class="container">
    <div class="row">
        <div class="deals">
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

    </div>
</div>
<div class="clearfix"></div>
<?php include('footer.php'); ?>
