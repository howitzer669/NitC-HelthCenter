<?php
session_start();
if(!$_SESSION['user'])
{
	header('location:login.php');
}
?>
<html>
<head align="right">
<button align="center"><a href="new 1.php">LOGOUT</a></button>
<center>
<h1 style="color:#FA8072;">Insert Into Doctors Details</h1>
</center>
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
<body background="image.jpeg">

<form action="dinsert.php" method="POST">
<table height="300" width="900" border="3" bordercolor="black" align="center" bgcolor="lightblue"> 
<tr>
<tr>
<td align="center"><font face="Arial"><font size="3">Doctor's Id:</td>
<td align="center"><input type="text" name="did" placeholder="Enter doctor's id" required="*required"><br></td>
</tr>
<td align="center"><font face="Arial"><font size="3">Name:</td>
<td align="center"><input type="text" name="name" placeholder="Enter doctor's name" required="*required" pattern="[a-zA-Z. ]*"><br></td>
</tr>
<tr>
<td align="center"><font face="Arial"><font size="3">Specialization:</td>
<td align="center"><input type="text" name="special" placeholder="Enter doctor's Specialization" required="*required" pattern="[a-zA-Z ]*"><br></td>
</tr>
<tr>
<td align="center"><font face="Arial"><font size="3">Gender:</td>
<td align="center" colspan="10">
<select name="type" value="type">
<option value="null">Select Type</option>
<option value="male">male</option>
<option value="female">female</option>
</select>
</td>
</tr>
<tr>
<td align="center">Address:</td>
<td align="center"><input type="text" name="address" placeholder="Enter doctor's Address" required="*required" pattern="[a-zA-Z0-9 ]*"><br></td>
</tr>
<tr>
<td align="center">Mobno:</td>
<td align="center"><input type="text" name="mobno" placeholder="Enter doctor's mobno" required="*required" required ="*required" pattern="[789][0-9]{9}"><br></td>
</tr>
<tr>
<td align="center" colspan="20"><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
<p align="center">
<div class="ringMenu" style="float:left;padding-left:10%;margin-left:50px;">
<ul >
  <li class="main"><a href="my.php">Back</a></li>
<ul></p>
<!-- /.ringMenu --></div>
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
	$a=$_POST['did'];
	$b=$_POST['name'];
	$c=$_POST['special'];
	$d=$_POST['type'];
	$e=$_POST['address'];
	$f=$_POST['mobno'];
	$query="insert into doctor values('$a','$b','$c','$d','$e','$f')"; 
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
