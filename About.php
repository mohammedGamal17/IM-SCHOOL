<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>IMschool || TEST YOUR SKILL </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span> <img src="image/WhatsApp Image 2020-04-11 at 6.37.58 PM.jpeg" width=200 height=70 alt="IMschool" ></span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7" ></div>
<div class="col-md-6 panel" style="background-color:white; min-height:430px;">
<img src="image/1.png" width=300 height=400 alt="IMschool" class="img-rounded">
<img src="image/2.jpg" width=300 height=400 alt="IMschool" class="img-rounded">

<div style="font-size:14px;text-shadow: 1px 0px  #333366;">
<br />
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
    Online examinations are an important method of evaluating the success potential of students. This research effort the individuals under consideration were students who would be enrolling in computer courses or Technologies Registrations. A prototype of a web-based placement examination system is described from the standpoint of the research effort, end user, and software development.
    An on-line educational system including exam processing and electronic journal features. An instructor builds a course based questions which on-line contain in identification of assignments. Which are compiled into an on-line exam syllabus? 
    Users enrolled in the platform may access the electronic details they provided and perform various functions with the on-line educational system in order to participate in the on-line examinations. Users can receive an on-line exam, having multimedia content, for the course, and they can electronically provide answers for the exam. And after Completion of their duration of exam they are provided  the grade or marks secured in their examinations. </p><br />
</div>
</div>
</div><!--End of row-->
</form>';}?>

<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="About.php" target="_blank">About us</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/2.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/profile.php?id=100004612066055" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Islam nour</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+201281831197</h4>
		<h4 style="font-family:'typo' ">islamgad999@gmail.com</h4>
		<h4 style="font-family:'typo' ">Software Engineer</h4></div></div>

    <div class="row">
		<div class="col-md-4">
		 <img src="image/1.png" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/profile.php?id=100004612066055" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Mohammed Gamal</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+201009363679</h4>
		<h4 style="font-family:'typo' ">mohammed_gamal7@outlook.com</h4>
		<h4 style="font-family:'typo' ">Software Engineer</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
