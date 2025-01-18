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
<?php
session_start();
if($_SESSION['adminuser'] == "")
{
header("location:index.php");
}

include_once("include\connection.php");

$lnews = $_REQUEST['lnews'];
$snews = $_REQUEST['snews'];
$nnews = $_REQUEST['nnews'];
$dnews = $_REQUEST['dnews'];
$submit = $_REQUEST['submit'];

if($submit == "Add")
{
$lnews = ucfirst($lnews);
$roww = mysql_query("select * from newss where news ='".$lnews."'");
$n = mysql_affected_rows();
	if($n=="0")
	{
	mysql_query("insert into newss values ('','".$lnews."')");
	$s = mysql_affected_rows($link);
		if($s>0)
			{ header("Location:lognews.php");}
		else
			{ header("Location:logerror.php");}
	}
	else
	{
	echo("<script>alert('This news ia already added !');</script>");
	}
}

if($submit == "Change")
{
$nnews = ucfirst($nnews);
$roww = mysql_query("select * from newss where news ='".$snews."'");
$n = mysql_affected_rows();
	if($n=="0")
		{ echo("<script>alert('Incorrect news selected !');</script>");
		}
	else
		{
			mysql_query("update newss set news='".$nnews."' where news='".$snews."'");
			$n = mysql_affected_rows($link);
			if($n>0)
				{
				header("location:lognews.php");
				}
			else
				{ 
				header("location:logerror.php");
				}
		}	
}

if($submit == "Remove")
{
	mysql_query("delete from newss where news='".$dnews."'");
	$n = mysql_affected_rows($link);
	if($n>0)
		{
		header("location:lognews.php");
		}
	else
		{ 
		header("location:logerror.php");
		}
}

?>
</head>
<body onload="myFunction()">
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
                            <h3 class="mbr-header__text">Add Latest News</h3>
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
			
	<form action="#" method="post">
				
				<div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
									<label class="form-control-label" for="form1-9-name">Enter News<span class="form-asterisk">*</span></label> 
	<input type="text" name="lnews" class="form-control" required="" />
								</div>
                            </div>

	<div><input type="submit" name="submit" value="Add" class="btn btn-primary" />
	<h6 style="color:#FF0000">Please enter as short as posible.</h6>
	</div>
	</form>	
    			</div>
        	  </div>
		   </div>
        </div>
    </div>
</section>

<hr size="2px;" width="100%" />
<hr size="2px;" width="100%" />

<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-f" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 40px; padding-bottom: 20px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-8">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">Edit Any News</h3>
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
			
	<form action="#" method="post">
				
				<div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-9-email">Select news<span class="form-asterisk">*</span></label>
	<select name="snews" class="form-control" required="" >
		<option value="" selected="selected">Select</option>
<?php
$roww = mysql_query("select * from newss");
while($row = mysql_fetch_array($roww))
{
echo("<option value='".$row['news']."'>".$row['news']."</option>");
}
?>
	</select>	
								</div>
                            </div>
							
							<div class="col-xs-12 col-md-12">
                                <div class="form-group">
									<label class="form-control-label" for="form1-9-name">New News<span class="form-asterisk">*</span></label> 
	<input type="text" name="nnews" class="form-control" required="" />
								</div>
                            </div>
	<div><input type="submit" name="submit" value="Change" class="btn btn-primary" />
	<h6 style="color:#FF0000">Please enter as short as posible.</h6></div>
	</form>	
    			</div>
        	  </div>
		   </div>
        </div>
    </div>
</section>

<hr size="2px;" width="100%" />
<hr size="2px;" width="100%" />
	
<section class="mbr-section mbr-section--relative mbr-section--short-paddings" id="msg-box1-f" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container mbr-section__container--isolated container" style="padding-top: 40px; padding-bottom: 20px;">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-left mbr-section__left col-sm-8">
                    <div class="mbr-section__container">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">Delete News</h3>
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
			
	<form action="#" method="post">
				
				<div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-9-email">Select News<span class="form-asterisk">*</span></label>
	<select name="dnews" class="form-control" required="" >
		<option value="" selected="selected">Select</option>
<?php
$roww = mysql_query("select * from newss");
while($row = mysql_fetch_array($roww))
{
echo("<option value='".$row['news']."'>".$row['news']."</option>");
}
?>
	</select>	
								</div>
                            </div>
							
	<div><input type="submit" name="submit" value="Remove" class="btn btn-primary" /></div>
	</form>	
    			</div>
        	  </div>
		   </div>
        </div>
    </div>
</section>

<hr size="2px;" width="100%" />
<hr size="2px;" width="100%" />

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mob/js/script.js"></script>
  
</body>
</html>