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
	
	#block2{
	width:20%;
	hight:100%;
	float:left;
	background-color:none;
	
	
}
	</style>
    
</head>



<body background="image.jpeg" bgcolor="green">
  






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

<div id="block2">

<img src="download.jpg" alt="client">
<h3 style="color:white;">WELCOME</h3>

  <button><a href="adlogin.php">Back ADMIN PAGE</a></button>

<!-- /.ringMenu -->
</div>


<form action="binsert.php" method="POST">
<center>
</br></br>
<h1 style="color:#FA8072;background-color:475710;border-radius:5px;width:68%;margin-left:90px;margin-top:-20px;height:60px;">Insert consultation Details</h1>
</center>

<table height="300" width="500" border="3" bordercolor="black" align="center" bgcolor="lightblue" style="margin-left:480px;"> 
<tr>
<tr>
<td align="center">Consultation no.:</td>
<td align="center"><input type="text" name="bno" placeholder="Enter consultation no" required="*required" pattern="[0-9]*"><br></td>
</tr>
<td align="center">Room no:</td>
<td align="center"><input type="text" name="dch" placeholder="Enter doctor's charges" required="*required" pattern="[0-9]*"><br></td>
</tr>
<tr>
<td align="center">Status:</td>
<td align="center"><input type="text" name="rch" placeholder="Enter status" required="*required" pattern="[a-zA-Z ]*"><br></td>
</tr>
<tr>
<td align="center">Bill Amount:</td>
<td align="center"><input type="text" name="pch" placeholder="Enter bill amount" required="*required" pattern="[0-9]*"><br></td>
</tr>

<tr>
<td align="center" colspan="20"><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
<?php
//connection
$localhost='localhost';
$username='root';
$password='';
$db='health';
$conn=new mysqli($localhost,$username,$password,$db) or die("unable to connect");
/*if($conn)
{
echo "connection established";
}*/
if(isset($_POST['submit']))
{
	$a=$_POST['bno'];
	$b=$_POST['dch'];
	$c=$_POST['rch'];
	$d=$_POST['pch'];
	$query="insert into approval values('$a','$b','$c','$d')"; 
	$run=mysqli_query($conn,$query);
	if($run)
	{
		echo "<script>alert('data inserted')</script>";
	}
	else
	{
		echo "<script>alert('check whether foreign key and primary key is repeated')</script>";
	}
}
?>
</form>



</body>
</html>
