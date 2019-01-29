<?php
session_start();
?>
<html>
<body background="image.jpeg">
<form action="login.php" method="POST">
<center>
</br></br>
<h1><font color="#CD5C5C" style="font-family:arial;">Verification Page</h1>
</center>
</br></br></br></br></br>
<table height="300" width="500" border="3" bordercolor="black" align="center" bgcolor="lightgreen">
<tr>
<td align="center"><font color="#CD5C5C" style="font-family:arial;" font size="4">User name:</td>
<td align="center" colspan="10"><input type="text" name="user" placeholder="enter username type" required="*required" pattern="[a-zA-Z ]*"></td>
</tr>
<tr>
<td align="center"><font color="#CD5C5C" style="font-family:arial;" font size="4">Password:</td>
<td align="center" colspan="10"><input type="password" name="password" placeholder="enter password type" required="*required"></td>
</tr>
<tr>
<td align="center"><font color="#CD5C5C" style="font-family:arial;" font size="4">Authentication Type:</td>
<td align="center" colspan="10">
<select name="type1" value="type">
<option value="null">Select Type</option>
<option value="Admin">Admin</option>
</select>
</td>
</tr>
<tr>
<td align="center" colspan="10"><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
<?php
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
	$user=$_SESSION['user'] = $_POST['user'];
	$pass=$_POST['password'];
	$ad=$_POST['type1'];
	if($ad=='Admin')
	{
		$query="select * from login where username='$user' AND password='$pass'";
		$run = mysqli_query($conn,$query);
		if(mysqli_num_rows($run))
		{
			echo "<script>alert('login sucess')</script>";
			echo "<script>window.open('my.html','_self')</script>";
		}
		else
		{
			echo "<script>alert('user name or password is incorrect')</script>";
		}
	}
	
}
		
?>
</form>
</body>
</html>
