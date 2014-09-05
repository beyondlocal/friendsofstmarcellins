<?php 
 error_reporting(E_ALL); 
 ini_set("display_errors", 1); 
?> 


<?php

    if(isset($_POST['email_address'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "markd@beyondlocal.co.uk";
    $email_cc = "ninac@beyondlocal.co.uk";
    $email_subject = "Enquiry from Friends of St Marcellins Website";
    $email_from = "no-reply@beyondlocal.co.uk";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
    	!isset($_POST['last_name']) ||
        !isset($_POST['email_address']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['category']) ||
        !isset($_POST['comments'])) {
        died('Whoops something is wrong');       
    }
     
    $name = $_POST['first_name'].' '.$_POST['last_name']; // required
    $enq_from = $_POST['email_address']; // required
    $telephone = $_POST['telephone']; // not required
    $category = $_POST['category'];//required
    $comment = $_POST['comments']; // required
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comment) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($enq_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Category: ".clean_string($category)."\n";
    $email_message .= "Comments: ".clean_string($comment)."\n";
     
     
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n".
    'CC: '.$email_cc."\r\n".
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);  
    }
 
  ?>

<?php
include('includes/header.php')
?>

<div class="container-fluid" id="content">
    <div class="row-fluid clearfix header-text">
        <div class="col-md-6">
            <a href="/">
                <img class="img-responsive" src="/assets/images/st-marcellins_logo.jpg">
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
                    <h2 style="text-align:center; padding-top:80px;">Thank you for your enquiry</h2>
                    <h3 style="text-align:center; border:none;">We will be in contact very soon.</h3>
                </div>
            </div>
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
</body>
</html>