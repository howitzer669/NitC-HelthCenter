<?php
session_start();?>
<html>
<head>
<style>
   #guest{
	background-color:#ccc;	
	font-size:40px;
	color:green;
	width:100%;
	height:73px;
	float:left;
	opacity:.6;
	margin-top:-3px;
	}  
	#form{
		margin-top:0px;
		background-color:none;
		text-align:center;
			opacity:.9;
			width:70%;
			margin-left:200px;
	}
	#block2{
	width:auto;
	hight:2px;
	float:left;
	margin-top:0px;
}
#home{
	float:right;
	hight:50px;
	font-size:30px;
	background-color:red;
}



	#block{
		
		background-color:green;
		height:600px;
		width:20%;
		opacity:.8;
		font-size:30px;
		float:right;
		padding:10px;
		margin-right:0px;
	}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 300px;
    background-color: none;
}

li a {
    display: block;
    color: #000;
    padding: 8px 2px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color:powderblue;
    color: black;
}
#image{
	
	font-size:20px;
   
opacity:.7;
hight:600px;
float:left;
	width:50%;
background-color:none;
padding:10px 80px;	
}
#block2{
	width:10%;
	hight:0px;
	float:left;
	
	
	
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

}
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



<body background="life.jpg" bgcolor="green">
  
















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
</br></br></br></br></br></br>





<div id="guest"><marquee scrollamount="16">
<?php




$localhost='localhost';
$username='root';
$password='';
$db='health';
$conn=new mysqli($localhost,$username,$password,$db) or die("unable to connect");

if(isset ($_SESSION['email'])&&isset ($_SESSION['type']))
{
$email=$_SESSION['email'];
$type=$_SESSION['type'];
}
else header('location:userlogin.php');

if($type=='student')
	$q1="select name,mobno from student where email='$email'";
	else 
$q1="select name,mobno from staff where email='$email'";
$q2=mysqli_query($conn,$q1);
 $q3=mysqli_fetch_array($q2);
  $name=$q3['name'];
  $mobno=$q3['mobno'];
echo"welcome ". $name;?></marquee></div>
</br>
<div id="block2">
<img src="download.jpg" alt="client">
<h3> WELCOME</h3>
  <div id ="home">
<a href="userwelcom.php"><input type="button" name="button"  style="width:150px;height:30px; font-size:14px;color:green;" value="Back To Home Page"></a>

</div>
</div>
</br></br></br></br>
<h1 align="center" style="height:70px;background-color:475710;margin-top:-31px;"><i><u>Make an appointment with the Doctor</i></h1>

</br></br>
<div id ="form">


<form action="book.php" method="POST">
<fieldset align="center" style="height:800px ;background-color:#7b7f16;width:100%;margin-top:-60px;border-radius:8px;">

<table width="100%" border="0"  style="border-radius:20px;" height="600px" align="center"bgcolor="#7b7f16" >
  <tr >
    <td style="color:white;"><h1><b>Patient Name<font color="red">*</font>:</b></h1></td>
    <td>
      <input type="text" name="name" value ="<?php echo $name ?>" style="width:450px;height:30px;border-radius:6px; font-size:20px;"  required="*required" pattern="[a-zA-Z ]*"></td>
  </tr>
  
    <tr>
    <td style="color:white;"><h1><b>Age:<font color="red"> *</font>:</h1></b></td>
    <td><label for="age"></label>
      <input type="number" name="age" style="width:450px;height:30px; font-size:20px;border-radius:6px; "  required="*required" pattern="[0-9]*"></td>
  </tr>
  


    <tr>
    <td style="color:white;"><h1><b>Sex: </h1></b></td>
    <td >
     <input type="radio" name="Sex" value="Female" checked>
<!--<?php if (isset($Sex) && $Sex=="female") echo "checked";?>-->
	<b>Female</b>
<input type="radio" name="Sex" value="Male" checked>
<!--<?php if (isset($Sex) && $Sex=="male") echo "checked";?>-->
	<b>Male</b>
	  </td>
      
   </tr>
  
  
  <tr>
    <td style="color:white;"><h1><b>Email <font color="red"> *</font>:</h1></b></td>
    <td><label for="Email"></label>
      <input type="email" name="email" value ="<?php echo $email ?>" style="width:450px;height:30px;border-radius:6px;  font-size:20px;"required ="*required" ></td>
  </tr>
  
  <tr>
    <td style="color:white;"><h1><b>Mobile <font color="red"> *</font>:</h1></b></td>
    <td><label for="Mobile"></label>
      <input type="text" name="Mobile" value ="<?php echo $mobno ?>" id="Mobile"  style="width:450px;height:30px; border-radius:6px; font-size:20px;" required ="*required" pattern="[789][0-9]{9}"></td>
  </tr>
  
  <tr>
    <td style="color:white;"><h1><b>Date of Consultation <font color="red"> *</font>:</h1></b></td>
    <td><label for="Date"></label> 
      <input type="Date" name="Date" id="Date" style="width:450px ;height:30px; border-radius:6px; font-size:20px;" required="*required"></td>
  </tr> 
  <tr>
  <td style="color:white;"><h1><b> Consultant : </h1></b></td>
	<td >
	<select name="Doctor_Name" style="width:450px ;height:30px; font-size:20px;border-radius:6px; ">
	<option value=""> please select </option>
	
  <?php
    $d1="select name from doctor";
	$d2=mysqli_query($conn,$d1);
	while($d3=mysqli_fetch_array($d2))
	 {
		echo '<option>'   . $d3['name'] . '</option>';
	 } 
	 
	 ?>

	</select>
  
  </tr> 
 
    <tr>
    <td style="color:white;" ><h1><b>Doctor Fees</h1></b></td>
    <td><select name="fess" style="width:450px ;height:30px; font-size:20px;border-radius:6px; ">
	<option value="">please select</option>
	<option value="200">Fess charge 200 </option>
	</select>
	</td>
    
  </tr>
	
 
  
 
    <tr>
    <td style="color:white;" ><h1><b>Roll No</h1></b></td>
    <td><label for="roll"></label>
      <input type ="text" name="roll" id="rool" style="width:450px;height:30px; font-size:20px;border-radius:6px; " required="*required"></td>
  </tr>
  
  
  
  <tr style="width:100%;">
    <td style="color:white;"><h1><b>your medical problem :</h1></b></td>
    <td ><label for="Message"></label>
      <textarea name="Message" id="Message" cols="61" rows="3" ></textarea></td>
  </tr>
  <tr >


   <td>&nbsp;</td> <td style="margin-top:2opx;">
	</br></br></br></br>
	<input type="submit" name="submit" value="Submit" style="width:400px;height:30px; border-radius:10px; font-size:20px;" ></td>
	
  </tr>
</br></br>

</table>

</fieldset>
</form>
</div>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	$sex=$_POST['Sex'];
	$email1=$_POST['email'];
	if($email!=$email1)
	{
		echo "<script>alert('Enter correct email')</script>";
			echo "<script>window.open('book.php','_self')</script>";
	}
	$mobno=$_POST['Mobile'];
	$date=$_POST['Date'];
	$doctorname=$_POST['Doctor_Name'];
	$fess=$_POST['fess'];
	$rollno=$_POST['roll'];
	$desease=$_POST['Message'];
	$s1="select did from doctor where name='$doctorname'"; 
	$s2=mysqli_query($conn,$s1);
	$s3=mysqli_fetch_array($s2);
	 $did=$s3['did'];
	 
	 $s1="select max(pc_no) from patient"; 
	$s2=mysqli_query($conn,$s1);
	$s3=mysqli_fetch_array($s2);
	 $i=$s3[0];
	 $i++;
    
	$query="INSERT INTO `patient`VALUES ('$i','$name','$age','$sex','$email','$mobno','$type','$date','$did','$fess','$rollno','$desease')";
	$_SESSION['date']=$date;
	if($conn->query($query))
	{
		echo "<script>window.alert('Welcome your form have been Register sucessfully....!!!')</script>";
		echo "<script>window.open('pview1.php','_self')</script>";
	}
	else
	{
		echo "<script>alert('check whether foreign key and primary key is repeated')</script>";
	}
}
?>

