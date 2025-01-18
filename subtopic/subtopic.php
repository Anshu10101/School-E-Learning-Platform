<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="s">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/logo-1400x959.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/mob/css/style.css">
  <link rel="stylesheet" href="../assets/mob/css/mbr-additional.css" type="text/css">
  
<title>Hansraj | E-Learning</title>

<script>
    history.pushState(null, null, 'subtopic.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'subtopic.php');
    });
		
</script>

<?php
include_once("..\include\connection.php");

session_start();
if($_SESSION['adminuser'] == "")
{
header("location:..\index.php");
}



?>
</head>
<body onload="myFunction()">
<section class="mbr-section mbr-section--relative" id="msg-box5-g" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 20px; padding-bottom: 0px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6 image-size" style="width: 17%;">
                    <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width"><img src="../assets/images/logo-1400x959.png" class="mbr-figure__img"></figure>
                </div>
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 content-size mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <div id="heead-1">
							<h3 class="mbr-header__text">MAHATMA HANSRAJ MODERN SCHOOL JHANSI.</h3>
							</div>
							<div id="heead-2">
							<img src="../assets/images/interactive-1400x413.png" height="100%" width="100%" />							</div>
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
                            <h5 class="mbr-header__text">
							<a href="../loghome.php" style="color:#CC3300;">HOME</a> >> Add new subtopic</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-7" style="background-color: rgb(255, 255, 255);">
    
    
    <div class="mbr-section__container container mbr-section__container--std-top-padding" style="padding-top: 31px;">
	
	<div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
			
	<form action="subtopic1.php" method="post">
				
				<div class="row row-sm-offset">
									
                            <div class="col-xs-12 col-md-6" id="hide1-2" style="visibility:visible">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-9-email">Select Class<span class="form-asterisk">*</span></label>
	<select name="class" class="form-control" required="" id="classdd" >
		<option value="" selected="selected">Select Class</option>
		<option value="Pre-Primary Class">Pre-Primary Class</option>
		<option value="Nursery Class">Nursery Class</option>
		<option value="L.K.G. Class">L.K.G. Class</option>
		<option value="U.K.G. Class">U.K.G. Class</option>
		<option value="Ist Class">Ist Class</option>
		<option value="IIst Class">IIst Class</option>
		<option value="IIIst Class">IIIst Class</option>
		<option value="IVth Class">IVth Class</option>
		<option value="Vth Class">Vth Class</option>
		<option value="VIth Class">VIth Class</option>
		<option value="VIIth Class">VIIth Class</option>
		<option value="VIIIth Class">VIIIth Class</option>
		<option value="IXth Class">IXth Class</option>
		<option value="Xth Class">Xth Class</option>
		<option value="XIth Class">XIth Class</option>
		<option value="XIIth Class">XIIth Class</option>
		<option value="">--- Other Class ---</option>
<?php
$roww = mysqli_query($conn, "select * from newclass");
while($row = mysqli_fetch_array($roww))
{
echo("<option value='".$row['class']."'>".$row['class']."</option>");
}
?>
	</select>	
								</div>
                            </div>
						
						<div class="col-xs-12 col-md-6" id="hide1-2" style="visibility:visible">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-9-email"><span class="form-asterisk"><br /></span></label>
					<input type="text" readonly="readonly" id="hide1-1" style="visibility:hidden" 
					class="form-control" value="" />					
								</div>
                            </div>
						
	<div><input type="submit" name="submit" value="Next" class="btn btn-primary" /></div>
									
	</form>	
    			</div>
        	  </div>
		   </div>
        </div>
    </div>
</section>	

  <script src="../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="../assets/jarallax/jarallax.js"></script>
  <script src="../assets/mob/js/script.js"></script>  
  
</body>
</html>