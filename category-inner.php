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


<div class="category-page">

    <div class="container">

        <div class="card subscribe m30bottom">

            <div class="col-md-10 col-md-offset-1">

                <div class="input-group">
                    <span class="input-group-addon"> Filter <strong>Categories</strong></span>
                    <select class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                    <span class="input-group-btn">
						<button class="btn btn-tclr waves-effect waves-light" type="button">filter!</button>
					  </span>
                </div>
            </div>
        </div>


        <div class="clearfix"></div>

    </div>
</div>


<div class="container m30bottom">
    <div class="row">
        <div class="col-md-9 col-xs-12 pull-right">
            <div class="row">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <div class=" col-md-3 col-sm-4 col-xs-6">
                        <div class="card card-store m30bottom">
                            <img src="images/logo-<?php echo $i; ?>.jpg" alt="" class="img-responsive">
                            <p class="caption-new">
                                <a href="" class="text-center">Store Name</a>
                            </p>


                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="col-md-3 sidebar">
            <div class="card">
                <h3 class="small-haed">Entertainment</h3>
                <ul class="bulleted filter">

                    <li><a href="">Art/Crafts</a></li>
                    <li><a href="">Collectibles</a></li>
                    <li><a href="">Lifestyle</a></li>
                    <li><a href="">Movies</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Musical Instrument</a></li>
                    <li><a href="">Party Decorations</a></li>
                    <li><a href="">Restaurants</a></li>
                    <li><a href="">Tickets & Events</a></li>


                </ul>


            </div>
        </div>
    </div>
</div>


<div class="clearfix"></div>
<?php include 'footer.php'; ?>
</body>
</html>
