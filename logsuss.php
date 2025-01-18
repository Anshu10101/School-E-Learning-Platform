<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="s">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-1400x959.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mob/css/style.css">
  <link rel="stylesheet" href="assets/mob/css/mbr-additional.css" type="text/css">
  
<title>Hansraj | E-Learning</title>
<script>
    history.pushState(null, null, 'loghome.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'loghome.php.php');
    });
</script>
<?php
session_start();
if($_SESSION['adminuser'] == "")
{
header("location:index.php");
}

include_once("include\connection.php");

$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];
$submit = $_REQUEST['submit'];


?>
</head>
<body>
<section class="mbr-section mbr-section--relative" id="msg-box5-g" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 20px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6 image-size" style="width: 17%;">
                    <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width"><img src="assets/images/logo-1400x959.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 content-size mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <div id="heead-1">
							<h3 class="mbr-header__text">MAHATMA HANSRAJ MODERN SCHOOL JHANSI.</h3>
							</div>
							<div id="heead-2">
							<img src="assets/images/interactive-1400x413.png" height="100%" width="100%" />							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="engine"></section>
<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-h" style="background-color: rgb(255, 250, 7);">
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 20px; padding-bottom: 0px;">
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-i" style="background-color: rgb(123, 35, 0);">
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 30px; padding-bottom: 0px;">
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-f" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 40px; padding-bottom: 20px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-8">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">Important Link</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-7" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 31px;">
        <div class="mbr-section__row row">			
			
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
               <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 31px;">
                    <div class="mbr-buttons mbr-buttons--center">
					<a href="logclass.php" 
					class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-danger" style="font-size:24px;
					border-radius: 20px 20px 20px 20px;">
					Add New Subject</a>					</div>
                </div>
            </div>
			
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
               <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 31px;">
                    <div class="mbr-buttons mbr-buttons--center">
					<a href="logtopic.php" 
					class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-warning" style="font-size:24px;
					border-radius: 20px 20px 20px 20px;">
					Add New Topics</a>					</div>
                </div>
            </div>
			
            <div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
               <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 31px;">
                    <div class="mbr-buttons mbr-buttons--center">
					<a href="logadmin.php" 
					class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-danger" 
					style="font-size:24px;border-radius: 20px 20px 20px 20px;">
					Change Password</a>					</div>
                </div>
            </div>
			
			<div class="mbr-section__col col-xs-12 col-md-3 col-sm-6">
               <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 31px;">
                    <div class="mbr-buttons mbr-buttons--center">
					<a href="lognews.php" 
					class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-warning" 
					style="font-size:24px;border-radius: 20px 20px 20px 20px;">
					Add Latest News</a>					</div>
                </div>
            </div>
			
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-7" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 31px;">
        <div class="mbr-section__row row">			
			
          <div class="alert alert-success" role="alert">
        	<center><b style="font-size:20px">Task Completed.</b></center>
      	  </div>
			
        </div>
    </div>
</section>	

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mob/js/script.js"></script>
  
  
</body>
</html>