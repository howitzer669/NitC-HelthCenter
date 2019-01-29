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
</head>
<body background="image.jpeg">
<form action="pupdate.php" method="POST">
<center>
</br></br>
<h1 style="color:#FA8072;">Update Patient's Details</h1>
</center>
</br></br></br></br></br>
<table height="300" width="500" border="3" bordercolor="black" align="center" bgcolor="lightblue"> 
<tr>
<td align="center">Patient's Id:</td>
<td align="center"><input type="text" name="pid" placeholder="Enter patient's id" required="*required"><br></td>
</tr>
<tr>
<td align="center">Doctor's Id:</td>
<td align="center"><input type="text" name="did" placeholder="Enter doctor's id" required="*required"><br></td>
</tr>
<tr>
<td align="center">Patient Room number:</td>
<td align="center"><input type="text" name="prno" placeholder="Enter patient's room no" required="*required" pattern="[0-9]*"><br></td>
</tr>
<tr>
<td align="center">Bill number:</td>
<td align="center"><input type="text" name="bno" placeholder="Enter Patient's bill no" required="*required" pattern="[0-9]*"><br></td>
</tr>
<tr>
<td align="center">Roll number:</td>
<td align="center"><input type="text" name="rno" placeholder="Enter student's rollno" required="*required"><br></td>
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
if($conn)
{
echo "connection established";
}
if(isset($_POST['submit']))
{
	$a=$_POST['pid'];
	$b=$_POST['did'];
	$c=$_POST['prno'];
	$d=$_POST['bno'];
	$e=$_POST['rno'];
	$query="update bill set pid='$a',did='$b',roomno='$c',billno='$d',rollno='$e' where pid='$a'"; 
	$run=mysqli_query($conn,$query);
	if($run)
	{
		echo "<script>alert('data updated')</script>";
	}
	else
	{
		echo "<script>alert('not updated')</script>";
	}
}
?>
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
<body background="image.jpeg">
<div class="ringMenu">
<ul>
  <li class="main"><a href="#main">Doctor</a></li>
  <li class="top"><a href="dinsert.php">Insert</a></li>
  <li class="right"><a href="dview.php">View</a></li>
  <li class="bottom"><a href="ddelete.php">Delete</a></li>
  <li class="left"><a href="dupdate.php">Update</a></li>
</ul>
<!-- /.ringMenu --></div>
<div class="ringMenu">
<ul>
  <li class="main"><a href="#main">Room</a></li>
  <li class="top"><a href="rinsert.php">Insert</a></li>
  <li class="right"><a href="rview.php">View</a></li>
  <li class="bottom"><a href="rdelete.php">Delete</a></li>
  <li class="left"><a href="rupdate.php">Update</a></li>
</ul>
<!-- /.ringMenu --></div>
<div class="ringMenu">
<ul>
  <li class="main"><a href="#main">Bill</a></li>
  <li class="top"><a href="binsert.php">Insert</a></li>
  <li class="right"><a href="bview.php">View</a></li>
  <li class="bottom"><a href="bdelete.php">Delete</a></li>
  <li class="left"><a href="bupdate.php">Update</a></li>
</ul>
<!-- /.ringMenu --></div>
<div class="ringMenu">
<ul>
  <li class="main"><a href="#main">Patient</a></li>
  <li class="top"><a href="pinsert.php">Insert</a></li>
  <li class="right"><a href="pview.php">View</a></li>
  <li class="bottom"><a href="pdelete.php">Delete</a></li>
  <li class="left"><a href="pupdate.php">Update</a></li>
</ul>
<!-- /.ringMenu --></div>
</body>
</html>
