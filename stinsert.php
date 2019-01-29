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
<body bgcolor="#FA8072">
<form action="pinsert.php" method="POST">
<center>
</br></br>
<h1>Insert Into Patient's Details</h1>
</center>
</br></br></br></br></br>
<table height="300" width="500" border="3" bordercolor="black" align="center" bgcolor="lightblue"> 
<tr>
<tr>
<td align="center">Patient's Id:</td>
<td align="center"><input type="text" name="pid" placeholder="Enter patient's id" required="*required" pattern="[a-zA-Z0-9]*"><br></td>
</tr>
<td align="center">Doctor's Id:</td>
<td align="center"><input type="text" name="did" placeholder="Enter doctor's id" required="*required" pattern="[a-zA-Z ]*"><br></td>
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
	$query="insert into patient values('$a','$b','$c','$d','$e')"; 
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
