<?php
session_start();
if(!$_SESSION['user'])
{
	header('location:login.php');
}
?>
<html>
<head>
<button><a href="new 1.php">LOGOUT</a></button>
<center>
<h1 style="color:#FA8072;">View From Author</h1>
</center>
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

<form action="dview.php" method="POST">
<table height="200" width="900" border="3" bordercolor="black" align="center" bgcolor="lightblue">
<tr>
<th width="30%"><font size="6">Did</th><th width="70%"><font size="6">Name</th><th width="80%"><font size="6">Specialization</th><th width="80%"><font size="6">Gender</th><th width="80%"><font size="6">Address</th><th width="80%"><font size="6">Mobno</th>
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
$query="select * from doctor";
$run=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run))
{
			$a=$row[0];
			$b=$row[1];
			$c=$row[2];
			$d=$row[3];
			$e=$row[4];
			$f=$row[5];
			?>
			<tr>
				<td align="center"><font face="Arial"><font size="3"><?php echo $a ;?></td>
				<td align="center"><font face="Arial"><font size="3"><?php echo $b ;?></td>
				<td align="center"><font face="Arial"><font size="3"><?php echo $c ;?></td>
			    <td align="center"><font face="Arial"><font size="3"><?php echo $d ;?></td>
				<td align="center"><font face="Arial"><font size="3"><?php echo $e ;?></td>
				<td align="center"><font face="Arial"><font size="3"><?php echo $f ;?></td>
			</tr>
			<?php } ?>
</table>
</form>

<div class="ringMenu" style="float:left;padding-left:10%;margin-left:50px;">
<ul >
  <li class="main"><a href="my.php">Back</a></li>
<ul></p>
<!-- /.ringMenu --></div>

</body>
</html>