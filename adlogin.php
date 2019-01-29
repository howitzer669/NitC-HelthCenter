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

.admin {
  width: 110px;
  margin-top: -0px;
  margin-left:0px;
}

.admin:hover {}

.admin ul {
  list-style: none;
  position: relative;
  width: 60px;
  color: white;
}
.admin ul a {
  color: white;
}
.admin ul li {
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.admin ul li a {
  display: block;
  width: 240px;
  height: 60px;
  background-color:475710;
  text-align: center;
  line-height: 100px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  font-size:24px;
}
.admin ul li a:hover {
  background: rgba(230,150,20,0.7);
}

.admin ul li:not(.main) {
  -webkit-transform: rotate(-10deg) scale(0);
  -moz-transform: rotate(-10deg) scale(0);
  -o-transform: rotate(-10deg) scale(0);
  transform: rotate(-10deg) scale(0);
  opacity: 0;
}
.admin:hover ul li {
  -webkit-transform: rotate(0deg) scale(1);
  -moz-transform: rotate(0deg) scale(1);
  -o-transform: rotate(0deg) scale(1);
  transform: rotate(0deg) scale(1);
  opacity: 1;
}


#user{
	background-color:#ccc;
	font-size:40px;
	width:100%;
	float:left;
	
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
	float:left;
	margin-left:10px;
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
	
	#block2{
	width:20%;
	hight:100%;
	float:left;
	background-color:none;
	
	
}

#demo{
	float:right;
	width:200px;
	font-size:24px;
	color:white;
	margin-top:-1px;
	text-align:center;
	height:28px;
	background-color:#89966a;
	
}
 #ab{
	  float:right;
	  width:140px;
	  height:0px;
	  margin-right:0px;
	  
  }
#line{
	  width:123%;
	  height:20px;
  }

	  .menu{
	  margin-top:30px;
	  float:right;
	  margin-top:-10px;
	  background-color:none;
  }
   .tab_selected{

	  background-color:#3b8239;
	  border-radius:5px;
	  color:white;
	 margin-right:0px;
  }
  .tab{
	  
	  background-color:#ccc;
	   margin-right:0px;
  }
#search{
	
	float:left;
	margin-left:40px;
	margin-top:0px;
	width:auto;
	height:30px;
	background-color:none;
}
	</style>
    
</head>



<body background="life.jpg" bgcolor="green">
  






<div id ="logo">
<img src ="jmilog.jpg">
</div>
<div id ="logoleft">
<div id="line">
<fieldset style="width:px;height:7PX;margin-left:-10px;">
<p style="float:left;margin-top:-5px;margin-right:0px;font-size:12px;">Welcome Home 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Langauge
&nbsp;&nbsp;&nbsp;English|Hindi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;Font Size: A|A-|A+ </p>
</fieldset>

</div>
<h1 text="left" style="font-size:30px;">Health Center Jamia Millia Islamia University Delhi-110016</h1>
<h2 style="float:right;margin-top:-10px;margin-right:0px;">A Central University <h2>
<h5 style="float:right; margin-right:-215px;">(NAAC Acreedited 'A' Grade)<h5>
</div>
<p id="demo">Clock</p>

<script>
var myTimer = setInterval(myClock, 1000);
function myClock() {
    document.getElementById("demo").innerHTML =
    new Date().toLocaleTimeString();
}
</script>
<div id ="ab">

</div>
<div id ="search">
<input type="text" name="name" style="width:110px;height:30px;"><input type="submit" name ="submit" value="search"style="width:70px;height:30px;">
</div>

<div class="menu">

<div class="tab_selected"><a href="userwelcom.php"><input type="button" name="button" style="border-radius:6px;width:150px;height:30px; font-size:14px;color:white;background-color:#3b8239;" value="Home"></a>
</div>
<div class="tab"><a href="userwelcom.php"><input type="button" name="button" style="width:150px;height:30px; font-size:20px;color:green;margin-left:0px;" value="About jmi"></a>
</div>
<div class="tab"><a href="userwelcom.php"><input type="button" name="button" style="width:150px;height:22px; font-size:14px;color:green;" value="Study at Jmi"></a>
</div>
<div class="tab"><a href="userwelcom.php"><input type="button" name="button" style="width:150px;height:22px; font-size:14px;color:green;" value="Bulletin Bord"></a>
</div>
<div class="tab"><a href="userwelcom.php"><input type="button" name="button" style="width:150px;height:22px; font-size:14px;color:green;" value="University Reports"></a>
</div>
<!-- <div class="tab"><a href="/aboutjamia/rti/rti">RTI Act</a></div> -->



</div>








<div id ="user">
<?php
$localhost='localhost';
$username='root';
$password='';
$db='health';
$conn=new mysqli($localhost,$username,$password,$db) or die("unable to connect");
$user=$_SESSION['user'];
echo '<i> Welcome <i>'.$user;
?> 
</div>
<div id="block2">

<img src="download.jpg" alt="client">
<h3>WELCOME</h3>
<button><a href="new 1.php">LOGOUT</a></button>

</div>

<div class="admin" style="float:left;padding-left:1%;margin-left:0px;">
<ul >
  <li class="main"><a href="#main">Doctor</a></li>
  <li class="top"><a href="dinsert.php">Insert</a></li>
  <li class="right"><a href="dview.php">View</a></li>
  <li class="bottom"><a href="ddelete.php">Delete</a></li>
  <li class="left"><a href="dupdate.php">Update</a></li>
</ul>
<!-- /.admin --></div>
<div class="admin" style="float:left;padding-left:10%;margin-left:0px;">
<ul>
  <li class="main"><a href="#main">Room</a></li>
  <li class="top"><a href="rinsert.php">Insert</a></li>
  <li class="right"><a href="rview.php">View</a></li>
  <li class="bottom"><a href="rdelete.php">Delete</a></li>
  <li class="left"><a href="rupdate.php">Update</a></li>
</ul>
<!-- /.admin --></div>
<div class="admin" style="float:left;padding-left:10%">
<ul>
  <li class="main"><a href="pview.php">Patient</a></li>
   
</ul>
<!-- /.admin --></div>
<div class="admin" style="float:left;padding-left:10%;margin-left:2px;">
<ul>
  <li class="main"><a href="#main">Consultation</a></li>
  <li class="left"><a href="binsert.php">Insert</a></li>
  <li class="right"><a href="bview.php">View</a></li>
 </ul>
<!-- /.admin --></div>
</body>
</html>