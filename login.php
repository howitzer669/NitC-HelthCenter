




<html>
<head>
<style>
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
	height:100px;
	background-color:#89966a;


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








<div id ="head">
<p><marquee scrollamount="16"> Welcome Admin Login Page</marquee></p>
</div>
<div id ="header">
</br></br>
<h1 style="float:right;"> <em> ADMIN AUTHENTICATION </em>&nbsp;</br>
<i>LOGIN PANEL</i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
  </h1>
<div id="form">
<h3 align="center">AUTHENTICATION</h3>
<form action="login.php" method="POST">

</br></br>
<table height="300" width="500" border="0" bordercolor="black" style="border-radius:20px;margin-top:-60px;" align="center" bgcolor="#7b7f16">
<tr>
<td>
<img src="User-key.png" style="width:80px;height:50px;">
</td>
<td align="center" colspan="10"><input type="text" name="user" style="width:140%;font-size:20px;margin-left:-100px;margin-top:0px;border-radius:10px;" placeholder="username" required="*required" pattern="[a-zA-Z ]*"></td>
</tr>
<tr>
<td>
<img src ="User_login.png" style="width:80px;height:50px;margin-top:-20px;">
</td>
<td align="center" colspan="10"><input type="password" name="password" style="width:140%;font-size:20px;margin-left:-100px;margin-top:-10px;border-radius:10px;" placeholder="password" required="*required"></td>
</tr>
<tr>
<td align="center"><font color="#CD5C5C" style="font-family:arial;width:200px;float:left;margin-left:-20px;" font size="4">Authentication Type:</td>

<td align="center" colspan="10" >
<select name="type1" value="type" style="font-size:16px;border-radius:6px;width:89%;">
<option value="null">Select Type</option>
<option value="Admin">Admin</option>
</select>
</td>
</tr>
<tr >
<td align="center" colspan="10"><input type="submit" name="submit" value="submit" style="font-size:16px;border-radius:6px;width:30%;"></td>
</tr>
</table>

</form>
</div>


<?php
error_reporting(0);
$localhost='localhost';
$username='root';
$password='';
$db='health';
$conn=new mysqli($localhost,$username,$password,$db) or die ('failed in connection');
/*{
	if($conn)
	{
		echo "connected";
	}
}*/
if(isset($_POST['submit']))
{
	$user=$_POST['user'];
	$pass=$_POST['password'];
	$ad=$_POST['type1'];
	if($ad=='Admin')
	{
		$query="select * from login where username='$user' AND password='$pass'";
		$run = mysqli_query($conn,$query);
		if(mysqli_num_rows($run))
		{
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['type']=$ad;
			echo "<script>alert('login sucess')</script>";
			echo "<script>window.open('adlogin.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('user name or password is incorrect')</script>";
		}
	}
	
}
		
?>

</div>
</body>
</html>
