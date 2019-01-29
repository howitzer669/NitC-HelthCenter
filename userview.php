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
#home{
	float:right;
	hight:50px;
	font-size:30px;
	background-color:red;
}


	#guest {
	background-color:#95a07a;	
	font-size:40px;
	color:green;	
	opacity:.9;
	float:left;
	width:100%;
	height:70px;
	}


#block2{
	width:10%;
	hight:auto;
	float:left;
	
	background-color:none;
	
	
}
#tab{
	
	width:400px;
	float:right;
	height:auto;
	
}
#pait{
width:300px;
	
}
#full{
	background-color:C4D64D;
	opacity:.8;
	float:left;
	width:81%;
	height:auto;
margin-left:80px;
	
	
	
	
}
	table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
	
}





/* Change the link color on hover */



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
#logoright{
	
	float:left;
	width:80%;
	
	height:70px;
	background-color:none;
	color:;
	

	
}

#fottor{
	
	hight :400px;
	width:;
	font-size:80px;
	
	
	
}



#balance{
	
	
	float:right;
	width:10%;
	height:400px;
	background-color:none;
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



<body background="life.jpg" bgcolor="white">
  
















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








<div id="guest"><marquee scrollamount="16">

<?php
session_start();
$localhost='localhost';
$username='root';
$password='';
$db='health';
$conn=new mysqli($localhost,$username,$password,$db) or die("unable to connect");
if(isset($_SESSION['email'])&& isset($_SESSION['type']))
{
$email=$_SESSION['email'];
$type=$_SESSION['type'];
}
else header('location:userlogin.php');
if($type=='student')
	$q1="select name from student where email='$email'";
	else
$q1="select name from staff where email='$email'";
$q2=mysqli_query($conn,$q1);
 $q3=mysqli_fetch_array($q2);
  $name=$q3['name'];
 echo "welcome  ". $name;?> </marquee></div>

























<div id="block2">

<img src="download.jpg" alt="client">
<h3>WELCOME</h3>
<div id ="home">
<a href="userwelcom.php"><input type="button" name="button" style="width:150px;height:30px; font-size:14px;color:green;" value="Go To Home Page"></a>

</div>
</div>
<div id ="logoright">

<center>

<h1><em><u style="color:red;">View Patient's Details</u></em></h1>

</center>
</br></br>

</div>


<!--<body background="white.jpg">
<form action="pview.php" method="POST">-->
<div id="full">


<fieldset style="float:left;margin-left:-77px;background-color:#7b7f16;">
<table id="tab" border="1" bordercolor="black" align="center" style="width:100%;">
<tr style="font-size:20px;border-collapse: collapse;">
<th>Patient's Name</th><th>Age</th><th>Sex</th><th>Email</th><th>Mobile No</th><th>Registration Date </th><th>Doctor's Name</th><th>Doctor's fees</th><th>Roll_no</th><th>Desease</th>
</tr>
<?php
//connection
//$localhost='localhost';
//$username='root';
//$password='';
//$db='health';
//$conn=new mysqli($localhost,$username,$password,$db) or die("unable to connect");
/*if($conn)
		{
			echo "connection established";
		}*/
		$k=0;
		if(isset($_SESSION['date'])&&$k=0)
		{
				echo $date=$_SESSION['date'];
                $query="select * from patient where email='$email' and date='$date'";
				$k=1;
		}
else
	
	$query="select * from patient where email='$email'";
$run=mysqli_query($conn,$query);
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
			<tr style="font-size:20px;">
				<td style="padding: 20px"><?php echo "<p style='color:white;'>".$a."</p>"  ;?></td>
				<td style="padding: 20px"><?php echo"<p style='color:white;'>".$b."</p>"  ;?></td>
				<td style="padding: 20px"><?php echo"<p style='color:white;'>".$c."</p>"  ;?></td>
				<td style="padding: 20px"><?php echo "<p style='color:white;'>".$d."</p>" ;?></td>
				<td style="padding: 20px"><?php echo"<p style='color:white;'>".$e."</p>"   ;?></td>
				<td style="padding: 20px"><?php echo"<p style='color:white;'>".$f."</p>"  ;?></td>
				<td style="padding: 20px"><?php echo"<p style='color:white;'>".$name."</p>"   ;?></td>
				
				<td style="padding: 20px"><?php echo"<p style='color:white;'>".$i."</p>"  ;?></td>
				<td style="padding: 20p"><?php echo"<p style='color:white;'>".$j."</p>"   ;?></td>
				<td style="padding: 20px"><?php echo "<p style='color:white;'>".$k."</p>"  ;?></td>
			
			</tr>
			<?php } ?>
		
</table>
</fieldset>
</form>
</div>

<div id ="balance">

</div>
</body>
</html>