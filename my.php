<?php
session_start();
if(!$_SESSION['user'])
{
	header('location:login.php');
}
?>
<html> 
<head>

<style>
body {
	height: 100%;
}

ul , li {
  margin: 0;
  padding: 0;
}

.ringMenu {
  width: 100px;
  margin: 150px auto;
}

.ringMenu:hover {}

.ringMenu ul {
  list-style: none;
  position: relative;
  width: 100px;
  color: white;
}
.ringMenu ul a {
  color: white;
}
.ringMenu ul li {
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.ringMenu ul li a {
  display: block;
  width: 100px;
  height: 100px;
  background:#FA8072;
  text-align: center;
  line-height: 100px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
}
.ringMenu ul li a:hover {
  background: rgba(230,150,20,0.7);
}

.ringMenu ul li:not(.main) {
  -webkit-transform: rotate(-180deg) scale(0);
  -moz-transform: rotate(-180deg) scale(0);
  -o-transform: rotate(-180deg) scale(0);
  transform: rotate(-180deg) scale(0);
  opacity: 0;
}
.ringMenu:hover ul li {
  -webkit-transform: rotate(0) scale(1);
  -moz-transform: rotate(0) scale(1);
  -o-transform: rotate(0) scale(1);
  transform: rotate(0) scale(1);
  opacity: 1;
}
.ringMenu ul li.top {
  -webkit-transform-origin: 50% 152px;
  -moz-transform-origin: 50% 152px;
  -o-transform-origin: 50% 152px;
  transform-origin: 50% 152px;
  position: absolute;
  top: -102px;
  left: 0;
}
.ringMenu ul li.bottom {
  -webkit-transform-origin: 50% -52px;
  -moz-transform-origin: 50% -52px;
  -o-transform-origin: 50% -52px;
  transform-origin: 50% -52px;
  position: absolute;
  bottom: -102px;
  left: 0;
}
.ringMenu ul li.right {
  -webkit-transform-origin: -52px 50%;
  -moz-transform-origin: -52px 50%;
  -o-transform-origin: -52px 50%;
  transform-origin: -52px 50%;
  position: absolute;
  top: 0px;
  right: -102px;
}
.ringMenu ul li.left {
  -webkit-transform-origin: 152px 50%;
  -moz-transform-origin: 152px 50%;
  -o-transform-origin: 152px 50%;
  transform-origin: 152px 50%;
  position: absolute;
  top: 0;
  left: -102px;
}

#user{
	background-color:#ccc;
	font-size:40px;
	
}




#header{
	
		font-size:23px;
   height:250px;

	float:left;
background-color:475710;
text-align:right;

width:100%;
margin-top:0px;
	
	border-radius:3px;
	color:white;

}
#logo{
	
	float:left;
	hight:4%;
	width:auto;
	background-color:none;
	
}
#logoleft{
	background-color:none;
	float:right;
	margin-right:100px;
	width:auto;
	
}

#head{
	height:120px;
	float:left;
	font-size:30px;
	background-color:#eee;
	width:100%;
	border-radius:8px;
	color:red;
}
#fottor{
	
	hight :400px;
	width:;
	font-size:80px;
	
	
	
}
#form{
	height:200px;
	background-color:#ccc;


border-radius:5px;
float:left;
margin-top:-100px;
margin-left:180px;
}


  


	
	#tag{
		
		float:left;
		width:100%;
		height:20px;
		background-color:#ccc;
		text-align:center;
padding:1px 4px 50px 10px;	
	margin-top:-10px;
	border-radius:20px;
	text-width:200px;
	}
	#top{
		
	}

#fix{
	
	float:left;
	width:100%;
	background-color:none;
	margin-top:50px;
	height:300px;
}
	
	</style>
    
</head>



<body background="life.jpg" bgcolor="green">
  






<div id ="logo">
<img src ="jmilog.jpg">
</div>
<div id ="logoleft">
<h1>Health Center Jamia Millia Islamia University Delhi-110016</h1>
<center><h2>A Central University <h2></center>
<center><h5>(NAAC Acreedited 'A' Grade)<h5></center>
</div>










<div id ="user"><marquee>
<?php
$localhost='localhost';
$username='root';
$password='';
$db='health';
$conn=new mysqli($localhost,$username,$password,$db) or die("unable to connect");
$user=$_SESSION['user'];
echo "welcome  ". $user;
?> </marquee>
</div>

<button><a href="new 1.php">LOGOUT</a></button>

<div class="ringMenu" style="float:left;padding-left:10%;margin-left:50px;">
<ul >
  <li class="main"><a href="#main">Doctor</a></li>
  <li class="top"><a href="dinsert.php">Insert</a></li>
  <li class="right"><a href="dview.php">View</a></li>
  <li class="bottom"><a href="ddelete.php">Delete</a></li>
  <li class="left"><a href="dupdate.php">Update</a></li>
</ul>
<!-- /.ringMenu --></div>
<div class="ringMenu" style="float:left;padding-left:10%;margin-left:50px;">
<ul>
  <li class="main"><a href="#main">Room</a></li>
  <li class="top"><a href="rinsert.php">Insert</a></li>
  <li class="right"><a href="rview.php">View</a></li>
  <li class="bottom"><a href="rdelete.php">Delete</a></li>
  <li class="left"><a href="rupdate.php">Update</a></li>
</ul>
<!-- /.ringMenu --></div>
<div class="ringMenu" style="float:left;padding-left:10%">
<ul>
  <li class="main"><a href="pview.php">Patient</a></li>
</ul>
<!-- /.ringMenu --></div>
<div class="ringMenu" style="float:left;padding-left:10%">
<ul>
  <li class="main"><a href="#main">Consultation</a></li>
  <li class="left"><a href="binsert.php">Insert</a></li>
  <li class="right"><a href="bview.php">View</a></li>
 </ul>
<!-- /.ringMenu --></div>
</body>
</html>