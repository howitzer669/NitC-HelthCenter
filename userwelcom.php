<html>
<head>
<style>
	#guest {
	background-color:#89966a;	
	font-size:40px;
	color:red;	
	opacity:.8;
	float:left;
	width:100%;
	height:70px;
	}
	#block{
		
		background-color:green;
		height:490px;
		width:23.7%;
		opacity:.8;
		font-size:30px;
		float:right;
		padding:10px;
		margin-right:0px;
	}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 300px;
    background-color: none;
}

li a {
    display: block;
    color: #000;
    padding: 8px 2px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color:powderblue;
    color: black;
}
#image{
	
	font-size:20px;
   
opacity:.7;
height:100%;
float:left;
	width:50%;
background-color:none;
padding:10px 80px;	
}
#block2{
	width:10%;
	hight:auto;
	float:left;
	background-color:none;
	
	
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


#fottor{
	
	hight :400px;
	width:;
	font-size:80px;
	
	
	
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



<body background="image.jpeg" bgcolor="green">
  
















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
</br></br></br></br></br></br>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


<div id="guest"><marquee scrollamount="16">
<?php
error_reporting(0);
session_start();
$localhost='localhost';
$username='root';
$password='';
$db='health';
$conn=new mysqli($localhost,$username,$password,$db) or die("unable to connect");
if(isset($_SESSION['email'])&& isset($_SESSION['type']))
{
$email=$_SESSION['email'];
$type=$_SESSION['type'];
}
else header('location:userlogin.php');
if($type=='student')
	$q1="select name from student where email='$email'";
	else
$q1="select name from staff where email='$email'";
$q2=mysqli_query($conn,$q1);
 $q3=mysqli_fetch_array($q2);
  $name=$q3['name'];
echo "welcome  ". $name;?> </marquee></div>


</br>
<div id="block2">

<img src="download.jpg" alt="client">
<h3>WELCOME</h3>
</div>

<div id ="image">
<p ><h1 ><em>About The Jamia Health Centre</em> </h1> </p>

<p style ="font-size:24px;float:left">
Mr./Mrs.<?php  echo $name ?> ,we are glad to see you at Jamia Millia Health Centre.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
We are ready to help you in any situations.Our first priority just safe your life 
and provide the world's best Doctor's facilities to the paitient at JMIs health centre.
Thanks for visiting Here...</p>
</div>
<div id ="block">
<ul>

<li ><a href="book.php">Fill New Form </a></li></br>
<li><a href="userview.php">View Detailes</a></li></br>
<li><a href="new 1.php">Logout</a></li>
</ul>
</div>

</body>
<html>