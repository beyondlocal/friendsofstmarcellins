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
                <div class="row-fluid">
        			<?php
                    include('includes/carousel.php')
                    ?>
                </div>
                <div class="row-fluid">
                    <div class="contact-box">
                        <h2>Contact Information</h2>
                        <p>Friends of St Marcellin&apos;s Children<br><br>32 Parkholme Road<br>London<br>E8 3AG<br><br>&#x2709;<a href="mailto:stmarcellins@gmail.com">stmarcellins@gmail.com</a></p>
                    </div>
                </div>
    	   </div>
           <div class="row-fluid">
            <div class="col-md-6">
                <div class="contact-form-holder">
                <h2>Contact Form</h2>
                <p>Feel free to fill out this contact form and leave us some feedback.</p>
                <form action="mail.php" class="form-horizontal" role="form" method="POST" id="contact-form">

                    <div class="form-group">
                        <label for="first_name" class="col-md-3 col-xs-12 control-label">First Name*</label> 
                        <div class="col-md-7 col-xs-12" style="text-align: left;">
                            <input type="text" class="form-control inlineValidate" name="first_name" id="first_name" placeholder="First Name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="col-md-3 col-xs-12 control-label">Last Name*</label> 
                        <div class="col-md-7 col-xs-12" style="text-align: left;">
                            <input type="text" class="form-control inlineValidate" name="last_name" id="last_name" placeholder="Last Name" required>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label for="email_address" class="col-md-3 col-xs-12 control-label">Email Address*</label> 
                        <div class="col-md-7 col-xs-12" style="text-align: left;">
                            <input type="email" class="form-control inlineValidate" name="email_address" id="email_address" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telephone" class="col-md-3 col-xs-12 control-label">Telephone</label>
                        <div class="col-md-7 col-xs-12" style="text-align: left;">
                            <input type="text" class="form-control inlineValidate" name="telephone" id="telephone" placeholder="Optional">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="category" class="col-md-3 col-xs-12 control-label">Category*</label>
                        <div class="col-md-7 col-xs-12" style="text-align: left;">
                            <select name="category" id="category" required>
                                <option value="" selected="selected">Please select&hellip;</option>
                                <option value="Fundraising" >Fundraising</option>
                                <option value="Donations" >Donations</option>
                                <option value="Comments" >Comments</option>
                            </select>
                        </div> 
                    </div>

                    <div class="form-group" style="margin-bottom:5px;">
                        <label for="comments" class="col-md-3 col-xs-12 control-label">Comments*</label>
                        <div class="col-md-7 col-xs-12" style="text-align: left;">
                            <textarea name="comments" class="form-control inlineValidate" rows="6" cols="25" id="comments" placeholder="Let us know how we can help" required></textarea><br />
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="language" value="English">
                    </div>
                    
                    <div class="form-group" style="margin-bottom:5px;">
                        <div class="col-md-6">
                            <input class="btn btn-default form-btn" type="submit" value="Send" style="margin-top:0px;">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <?php
    include('includes/kids-carousel.php')
    ?>

<?php
include('includes/footer.php')
?>
