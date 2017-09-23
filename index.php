<!D<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="../../../Users/PC-User/Desktop/it11/Unnamed Site 3/signup.php" rel="stylesheet" type="text/css">
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
	  <p>        
	  <p>        
	  <p id="login">LOGIN	
	  <p>        Username: 
	    <input type="text" name="txtuname" />
Password:		  
  <input type="password" name="txtpword">
		<input type="submit" name="login" value="login">
      <p id="sign_in">SIGN IN
</form>
    	
    <form method="post" action="signup.php"> 
	<p>Username:     <input type="text" name="txtuname" />
      Password:
		<input type="password" name="txtpword">
		<input type="submit" name="signup" value="Signup">
</form> 
</body>
