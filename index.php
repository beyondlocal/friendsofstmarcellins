<?php
include('includes/header.php')
?>

<div class="container-fluid" id="content">
	<div class="row-fluid clearfix header-text">
		<div class="col-md-6">
            <a href="/">
                <img class="img-responsive" src="/assets/images/st-marcellins_logo.jpg" alt="FoSMCV Logo">
            </a>
		</div>
		<div class="col-md-6">
			<h2>Providing education, nutrition, and healthcare for orphans and vulnerable children</h2>
		</div>
	</div>

    <div class="carousel-content-area">
    	<div class="row-fluid clearfix">
    		<div class="col-md-6">
    			<?php
                include('includes/carousel.php')
                ?>
    	   </div>
            <div class="col-md-6">
                <div class="content-box">
                    <h2>About Us</h2>
                    <p>St Marcellin Children's Village is a registered private voluntary organisation (PVO) providing a loving and family centred environment for orphans and vulnerable children. There are currently 74 children, aged 2-16. All children have been orphaned, abandoned or taken into the care of social welfare for their own safety. At St Marcellin Children's Village they are given education, nutrition and the necessary healthcare required for their individual circumstances.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="snippet-section" class="row-fluid clearfix">
        <div class="col-md-3">
            <div id="meet-the-kids" class="homepage-snip">
                <h3 class="snip-heading">Meet the kids</h3>
                <p>St Marcellin Childrens' Village was established in 2002 to care for orphaned and homeless children in need. Many of the children have special physical and emotional needs.</p>
                <div class="read-more">
                    <a href="meet-the-kids.php">Read more...</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div id="who-we-are" class="homepage-snip">
                <h3 class="snip-heading">What is St Marcellins?</h3>
                <p>Norman and Sybil Macdonald come from South Africa and previously ran another orphanage in Zimbabwe. They started St Marcellin's Children's Village in 2002.</p>
                <div class="read-more">
                    <a href="who-are-we.php">Read more...</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div id="how-to-help" class="homepage-snip">
                <h3 class="snip-heading">How can I help?</h3>
                <p>Whatever you give will be used to provide the children with a loving, healthy, safe and educational environment.</p>
                <div class="read-more">
                    <a href="how-can-i-help.php">Read more...</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div id="donate">
                <!-- <a class="btn btn-default" href="/donate.php">Donate</a> -->
            </div>
        </div>
    </div>
    <?php
    include('includes/kids-carousel.php')
    ?>
</div>

<?php
include('includes/footer.php')
?>
