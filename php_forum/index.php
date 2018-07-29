<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link href="file:///C|/Users/Saida/Desktop/Tema projekt 3/Projekt 3 html css/Website/css/style.css" rel='stylesheet' type='text/css'>
    
    
</head>

<body>

<div id="wrapper"></div>

<div id="header"></div>

<div id="logo"><img src="img/logo.png"/></div>

<?php
if(isset($_SESSION['error'])) {
	echo "<span style='color: red;'>".$_SESSION['error']."</span><br><br>";
	unset($_SESSION['error']);
}
?>
<div id="login">
<form action="login.php" method="post">
	<p style="color: #fff;"> Brugernavn:<br>
	<input type="text" name="user"><br>
	
		Password:<br>
	<input type="password" name="pass">
	
	<input type="submit" value="Login">
</p></form></div>


<div id="boxx"><center><img src="img/banner.png"/></div></center>

<div id="boxxx"></div>
<div id="box1"></div>
<div id="box2"></div>
<div id="box3"></div>
<div id="boxxxx"></div>
<div id="word"></div>

<div id="boxxxxx"></div>
<div id="boxxxxxx"></div>
<div id="fabrik"><img src="img/fabrik.png"/></div>


<div id="h3"> 
  <p style="font-size: 36px; color: #297BB6; font-family: open sans; font-weight:regular;">Nye webdesign trends 2015 </p>
  
  <p style="color: #9C9CA1; font-family: open sans; font-weight:regular; font-size: 16px;">Skrevet d. 17/3-2015 af Peter Hansen </p>
  
  <p style="font-family: open sans; font-weight:regular; font-size: 18px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum  </p>
  
  <p style="color: #9C9CA1;font-family: open sans; font-weight:regular; font-size: 16px;">Tags: webdesign, trends, 2015</p>
</div>


<div id="h5">
 <p style="font-size: 36px; color: #297BB6; font-family:'Open Sans'; font-weight:Regular;  "> VELKOMMEN TIL ERHVERVSRETTET WEBFORUM !
 <br>
 For at oprette indlæg bedes du logge ind øverst oppe</p>
</div>

<div id="k1"></div>
<div id="k2"></div>
<div id="k3"></div>
<div id="k4"></div>
<div id="k5"></div>

<div id="tekst1">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </div>
<div id="tekst2">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </div>
<div id="tekst3">orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </div>


<div id="pensel"><img src="img/pensel.png"/></div>
<div id="figur"><img src="img/figur.png"/></div>
<div id="hat"><img src="img/hat.png"/></div>



<div id="boxxxxxxx"></div>
<div id="h2">Copyright Erhvervsrettet Webdesign Forum</div>

</body>
</html>

<style type=text/css>


#wrapper {
	width: 100%;


}	
#header {
	width:1500px;
	height:100px;
	background-color:#294870;
	margin: auto;


}
#logo {
	position: absolute;
	top: 9px;
	left:160px;
	
}
#login {
	position: absolute;
	top: 2px;
	right:142px;
	cursor: pointer;
	
}
#boxx{
	width:1500px;
	height: 322px;
	background-color:#ffffff;
	margin: auto;
}
#box1{
	width:378px;
	height: 390px;
	background-color:#eeeeee;
	position: absolute;
	left:160px;
	top: 490px;
	border-radius:10px;
	
		
}
#box2{
	width: 378px;
	height: 390px;
	background-color: white;
	position: absolute;
	left: 572px;
	top: 490px;
	border-radius: 10px;
	
}
#box3{
	width:378px;
	height: 390px;
	background-color:#eeeeee;
	position: absolute;
	left:980px;
	top: 490px;
	border-radius:10px;
	
	
}
#boxxx{
	width:1500px;
	height: 510px;
	background-color:#297bb6;
	margin: auto;
}

#word {
	position: absolute;
	top: 1075px;
	right: 130px;
	width: 664px;

	
}
#boxxxx{
	width:1500px;
	height: 660px;
	background-color:#ffffff;
	margin: auto;

}
#fabrik{
	position: absolute;
	top: 1710px;
	left: 169px;
}
#boxxxxx{
	width:1500px;
	height: 45px;
	background-color:#3d8eb9;
	margin: auto;
}
#boxxxxxx{
	width:1500px;
	height: 445px;
	background-color: #ffffff;
	margin: auto;
}


#h3{
	position: absolute;
	top: 1675px;
	left: 683px;
	color: black;
	width: 650px;
	height: 299px;
	
	
}
#h5{
	position: absolute;
	top: 950px;
	left: 163px;
	color: #808188;
	width: 645px;
	height: 479px;
	
}
#tekst1{
	position: absolute;
	left: 194px;
	top: 684px;
	width: 340px;
	font-size: 18px;
	color: #A7A7A7;
	font-family: open sans light;

	
}
#tekst2{
	position: absolute;
	left: 611px;
	top: 683px;
	width: 340px;
	font-size: 18px;
	color: #A7A7A7;
	font-family: open sans light;

	
	
}
#tekst3{
	position: absolute;
	left: 1007px;
	top: 683px;
	font-size: 18px;
	width: 340px;
	color: #A7A7A7;
	font-family: open sans light;

		
}
#pensel {
	position: absolute;
	left:159px;
	top: 490px;
}
#figur {
	position: absolute;
	left:572px;
	top: 490px;
}
#hat {
	position: absolute;
	left: 980px;
	top: 490px;


}
#boxxxxxxx{
	width:1500px;
	height: 180px;
	background-color: #3d8eb9;
	margin-bottom: 1px;
	
}
#h2{
	position: absolute;
	top: 2170px;
	left: 497px;
	color: white;
	font-size: 24px;
	font-family: open sans light;

	
}

