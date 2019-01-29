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
<form action="rview.php" method="POST">
<center>
</br></br>
<h1 style="color:#FA8072;background-color:475710;border-radius:5px;width:68%;margin-left:90px;margin-top:-20px;height:60px;">View Room Detail's</h1>
</center>

<table height="100" width="500" border="3" bordercolor="black" align="center" bgcolor="lightblue"style="margin-left:480px;">
<tr>
<th>Roomno</th><th>Type</th>
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
$query="select * from room";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run))
{
			$a=$row[0];
			$b=$row[1];
			?>
			<tr>
				<td><?php echo $a ;?></td>
				<td><?php echo $b ;?></td>
			</tr>
			<?php } ?>
</table>
</form>
<br/>
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
</style>
</head>

</body>
</html>