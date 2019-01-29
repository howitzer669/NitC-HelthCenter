<?php
error_reporting(0);
session_start();

if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];

}
else {
	header('location:userwelcom.php');
}
?>
<html>
<head>
<style>
#data{
	
	background-color:red;
}
#tab{
	
	font-size:20px;
   
opacity:.5;
background-color:none;	
	
}
	
#underspace{
	
	padding-bottom:10px;
	background-color:red;
	
	
}
#fot{
	
	width:;
	hight:400px;
	
	
	background-color:red;
}
</style>
</head>
<body background="green.jpg">
<!--<form action="pview.php" method="POST">-->
<center>
</br>
<h1>Your form Details</h1>
</center>
<div id ="tab">
<table style="padding:0px;" height="500px" width="700" border="1" colspan="7" bordercolor="black" align="center" bgcolor="lightblue">

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
		if(isset($_SESSION['date']))
		{
				$date=$_SESSION['date'];
                $query="select * from patient where email='$email' and date='$date'";
				
		}
else
	$query="select * from patient where email='$email'";

$run = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($run))
{
			$a=$row[1];
			$b=$row[2];
			$c=$row[3];
			$d=$row[4];
			$e=$row[5];
			$f=$row[7];
			$g=$row[8];
			$i=$row[9];
			$j=$row[10];
			$k=$row[11];
			$s1="select name from doctor where did='$g'"; 
	$s2=mysqli_query($conn,$s1);
	$s3=mysqli_fetch_array($s2);
	 $name=$s3['name'];
			
?>
			<tr  style="font-size:20px;">
<td style="padding: 20px"><?php echo "Mr/Miss ".$a; ?></td>

<td style="padding: 50px"><img src ="download.jpg"></td>
</tr>
			<tr style="font-size:20px;"><td style="padding: 10px">Patient's Name </td><td style="padding: 20px"><?php echo $a ;?></td></tr>
			<tr  style="font-size:20px;" > <td  style="padding: 20px">Age </td> <td style="padding: 20px"><?php echo $b ;?></td></tr>
			<tr  style="font-size:20px;"><td style="padding: 20px">Sex </td><td style="padding: 20px"><?php echo $c ;?></td></tr>
			<tr  style="font-size:20px;"> <td style="padding: 20px">Email  </td><td style="padding: 20px"><?php echo $d ;?></td></tr>			
			<tr style="font-size:20px;"> <td style="padding: 20px">Mobile No  </td><td style="padding: 20px"><?php echo $e;?></td></tr>
			<tr style="font-size:20px;"> <td style="padding: 20px">Registration Date </td><td style="padding: 20px"><?php echo $f;?></td></tr>
			<tr style="font-size:20px;"> <td style="padding: 20px">Doctor Name</td> <td style="padding: 20px"><?php echo $name ;?></td></tr>
						
			<tr style="font-size:20px;" > <td style="padding: 20px">Doctor Fees  </td><td style="padding: 20px"><?php echo $i;?></td></tr>
			<tr  style="font-size:20px;"> <td style="padding: 20px">Roll_no  </td><td style="padding: 20px"><?php echo $j;?></td></tr>
			<tr  style="font-size:20px;"><td style="padding: 20px">Desease</td><td style="padding: 20px"><?php echo $k;?></td></tr>
			
			<tr ><td align="center" style="padding:20px" colspan="10"><a href="userwelcom.php"><input type="button" name="button" style="font-size:20px;" value="Print your Form"></a></td>
</tr>

			<?php } ?>
</table>
</div>
<div id="fot">

<P> Copyright by Mushahid Khan .....@MK </p>
</div>
</body>
</html>