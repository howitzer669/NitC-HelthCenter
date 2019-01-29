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
	color:#c12345;
	
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



<form action="bview.php" method="POST">
<center>
</br></br>
<h1 style="color:white;background-color:475710;border-radius:5px;width:68%;margin-left:90px;margin-top:-20px;height:60px;">View Patient's Details</h1>
</center>

<table height="100" style="font-size:20px;text-align:center;background-color:skyblue;border-collapse: collapse;margin-top:-20px;float:left;" width="500" border="1" bordercolor="black" align="center">
<tr >
<th>Pc_No</th><th>Name</th><th>Age</th><th>Sex</th><th>Email</th><th>Mobno</th><th>Type</th><th>Date</th><th>Did</th><th>Fees</th><th>Rollno</th><th>Disease</th>
</tr>
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
$query="select * from patient";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run))
{
			$a=$row[0];
			$b=$row[1];
			$c=$row[2];
			$d=$row[3];
			$e=$row[4];
			$f=$row[5];
			$g=$row[6];
			$h=$row[7];
			$i=$row[8];
			$j=$row[9];
			$k=$row[10];
			$l=$row[11];
		
			?>
			<tr>
				<td><?php echo $a ;?></td>
				<td><?php echo $b ;?></td>
				<td><?php echo $c ;?></td>
				<td><?php echo $d ;?></td>
				<td><?php echo $e ;?></td>
				<td><?php echo $f ;?></td>
				<td><?php echo $g ;?></td>
				<td><?php echo $h ;?></td>
				<td><?php echo $i ;?></td>
				<td><?php echo $j ;?></td>
				<td><?php echo $k ;?></td>
				<td><?php echo $l ;?></td>
			
			</tr>
			<?php } ?>
</table>
</form>
<br/>


</body>
</html>