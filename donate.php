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
                    <h2>Donations</h2>
                    <p>We accept and appreciate anything you can give!</p>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <h4 class="panel-title">
                                        Donate via PayPal
                                        <span style="float:right; color:#000000;" class="glyphicon glyphicon-chevron-down"></span>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>You can donate using PayPal or if you are in the UK you can make a one off donation or set up a standing order through emailing the Friends of St Marcellins Children at <a href="mailto:stmarcellins@gmail.com">stmarcellins@gmail.com</a> or via our <a href="/contact-us.php">contact form</a>.</p>
                                    <div class="paypal-button">
                                        <form style="text-align:center;" action="https://www.paypal.com/cgi-bin/webscr" enctype="application/x-www-form-urlencoded" method="post">
                                            <input name="cmd" type="hidden" value="_s-xclick" />
                                            <input name="hosted_button_id" type="hidden" value="2KVQ3BSH45ZKC" />
                                            <input alt="PayPal - The safer, easier way to pay online." name="submit" src="https://www.paypal.com/en_US/GB/i/btn/btn_donateCC_LG.gif" type="image" />
                                        </form>
                                        <form action="https://www.paypal.com/cgi-bin/webscr" enctype="application/x-www-form-urlencoded" method="post">
                                            <img src="https://www.paypal.com/en_GB/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />
                                        </form>
                                    </div>
                                    <p>&raquo; <a title="St Marcellins Information Pack" href="http://lac2.s3.amazonaws.com/StMarcellins/Friends-of-St-Marcellins-brochure.pdf" target="_blank">Download an Information Pack</a> - (PDF - 0.5MB)</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <h4 class="panel-title">
                                    Donate via Charity Giving
                                    <span style="float:right; color:#000000;" class="glyphicon glyphicon-chevron-down"></span>
                                    </h4>
                                </a>
                            </div>
                        
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Whatever you give will be used to provide the children with a loving, healthy environment. You can also do your online shopping at your regular favourites through the Giving Machine and support without paying a penny. Please visit <a href="http://www.TheGivingMachine.co.uk">www.TheGivingMachine.co.uk</a></p>
                                    <p>Please <a href="contact-us.php">Contact Us</a> for additional information.</p> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="accordion" id="accordion">
                  <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#PayPal">
                        <h3>Donate via PayPal</h3>
                                <i class="icon-chevron-down collapse-down"></i>
                                <div class="clearfix"></div>
                      </a>
                    </div>
                        <div id="PayPal" class="in collapse">
                            <div class="accordion-inner">
                            <p>You can donate using PayPal or if you are in the UK you can make a one off donation or set up a standing order through emailing the Friends of St Marcellins Children at <a href="mailto:stmarcellins@gmail.com">stmarcellins@gmail.com</a> or via our <a href="/contact-us.php">contact form</a>.</p>
                                <div class="paypal-button">
                                    <form action="https://www.paypal.com/cgi-bin/webscr" enctype="application/x-www-form-urlencoded" method="post">
                                        <input name="cmd" type="hidden" value="_s-xclick" />
                                        <input name="hosted_button_id" type="hidden" value="2KVQ3BSH45ZKC" />
                                        <input alt="PayPal - The safer, easier way to pay online." name="submit" src="https://www.paypal.com/en_US/GB/i/btn/btn_donateCC_LG.gif" type="image" />
                                    </form>
                                    <form action="https://www.paypal.com/cgi-bin/webscr" enctype="application/x-www-form-urlencoded" method="post">
                                        <img src="https://www.paypal.com/en_GB/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />
                                    </form>
                                </div>
                                <p>&raquo; <a title="St Marcellins Information Pack" href="http://lac2.s3.amazonaws.com/StMarcellins/Friends-of-St-Marcellins-brochure.pdf" target="_blank">Download an Information Pack</a> - (PDF - 0.5MB)</p>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#Charity">
                        <h3>Donate via Charity Giving</h3>
                                <i class="icon-chevron-down collapse-down"></i>
                                <div class="clearfix"></div>
                      </a>
                    </div>
                        <div id="Charity" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Whatever you give will be used to provide the children with a loving, healthy environment. You can also do your online shopping at your regular favourites through the Giving Machine and support without paying a penny. Please visit <a href="http://www.TheGivingMachine.co.uk">www.TheGivingMachine.co.uk</a></p>
                                <p>Please <a href="/contact-us/">Contact Us</a> for additional information.</p> 
                          </div>
                        </div>
                    </div>
                    
                </div> -->

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
