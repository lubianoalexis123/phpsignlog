<!Doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>login_signup</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="../../../Users/PC-User/Desktop/it11/Unnamed Site 3/signup.php" rel="stylesheet" type="text/css">
<style type="text/css">
#sign_in {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 25px;
}
#login {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 25px;
}
#user {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 15px;
}
#uname {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 15px;
}
#bgi {
	width: 100%;
	position: fixed;
	z-index: -100;
	left: 0px;
	top: 0px;
	min-height: 100%;
	min-width: 100%;
}
</style>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
<html>
<head>
<title>Basic Login using PHP and MySql</title>
</head>
<body>
<form method="post" action="login.php"> 
	  <p>        
	  <p><img src="background.jpg" alt="" name="bgi" width="1600" height="900" id="bgi">        
	  <p>        
  <blockquote>
	    <blockquote>
	      <blockquote>
	        <blockquote>
	          <p align="left" id="login">LOGIN	
              </p>
            </blockquote>
          </blockquote>
        </blockquote>
  </blockquote>
  <p align="center" id="user">        Username: 
    <input type="text" name="txtuname" />
Password:		  
  <input type="password" name="txtpword">
	<input type="submit" name="login" value="login">
     
</form>
    	 <blockquote>
    	   <blockquote>
    	     <blockquote>
    	       <blockquote>
    	         <p id="sign_in">&nbsp;</p>
  	         </blockquote>
  	         </blockquote>
  	       </blockquote>
       </blockquote>
<form method="post" action="signup.php">  
  <blockquote>
    <blockquote>
      <blockquote>
        <blockquote>
          <p id="sign_in"> SIGN IN
        </p>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
  <p align="center" id="uname">    Username:     
	<input type="text" name="txtuname" />
    Password:
	  <input type="password" name="txtpword">
	  <input type="submit" name="signup" value="Signup">
</form> 
</body>
