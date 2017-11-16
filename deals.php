<?php include'header.php'; ?>
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
    <div class="col-md-4 col-xs-12 m30bottom">
 <div class="deals">
     <div class="special-coupon-new">

         <div class="special-image-with-logo">
             <div class="special-banner" style="background-image: url(images/banner-1.jpg);">
                 <div class="special-banner-logo"><img src="images/logo1.jpg" alt="">
                 </div>
             </div>

         </div>

         <div class="special-banners-content">
             <div class="special-left">
                 <h3>
                     <strong>Marley Spoon</strong>
                         35% Off SiteWide

                 </h3>
                 <div class="special-right">
                     <div class="deal-price pull-right">
                         <div class="cross-text">$149.99</div>
                         <div class="org-text">$81.22</div>
                     </div>
                     <a href="" class="btn btn-pclr waves-effect waves-light">Show
                         Code</a>
                 </div>

             </div>
         </div>


     </div>
 </div>
 </div>

     <?php
     $banners = array("banner-4", "banner-5", "banner-3", "banner-2", "banner-1", "banner-3", "banner-5", "banner-4");
     foreach ($banners as $banner) {
     ?>


         <div class="col-md-4 col-xs-12 m30bottom">
             <div class="deals">
                 <div class="special-coupon-new">

                     <div class="special-image-with-logo">
                         <div class="special-banner" style="background-image: url(images/<?php echo $banner; ?>.jpg);">
                             <div class="special-banner-logo"><img src="images/logo1.jpg" alt="">
                             </div>
                         </div>

                     </div>

                     <div class="special-banners-content">
                         <div class="special-left">
                             <h3>
                                 <strong>Marley Spoon</strong>
                                 35% Off SiteWide

                             </h3>
                             <div class="special-right">
                                 <div class="deal-price pull-right">
                                     <div class="cross-text">$149.99</div>
                                     <div class="org-text">$81.22</div>
                                 </div>
                                 <a href="" class="btn btn-pclr waves-effect waves-light">Show
                                     Code</a>
                             </div>

                         </div>
                     </div>


                 </div>
             </div>
         </div>



     <?php } ?>

   
  </div>

	</div>	</div>
<div class="clearfix"></div>
<?php include('footer.php'); ?>
