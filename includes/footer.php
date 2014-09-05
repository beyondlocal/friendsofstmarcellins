<div id="footer" class="row-fluid clearfix">
    <p><a href="https://www.facebook.com/StMarcellins">Like Us</a> on Facebook</p>
    <p class="pull-left">Created by <a href="http://beyondlocal.co.uk/">Beyond Local Ltd</a></p>
    <p class="pull-right">Registered Charity: 1143214</p>
</div>

<!-- javascript -->


<!-- jQuery Version 1.11.0 -->
    <script src="/assets/js/jquery-1.11.0.js"></script>
    <script src="/assets/js/lightbox.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript">
    $('.carousel.slide').carousel()

    $(document).ready(function(){
		$("#accordion").collapse();
		$("#myCarousel").carousel();

	});

    //open all external link on new tab
    $('a').each(function() {
       var a = new RegExp('/' + window.location.host + '/');
       //added href length condition to make sure that the href was a true external link not an API call
       if(!a.test(this.href) && this.href.length > 0) {
           $(this).click(function(event) {
               event.preventDefault();
               event.stopPropagation();
               window.open(this.href, '_blank');
           });
       }
    });
	</script>
</body>

</html>