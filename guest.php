<html>
<center>
<form action="guest.php" method="POST">
<br/><br/><br/><br/>
<body background="image.jpeg">
<table border="3" CELLSPACING="4" CELLPADDING="4">
<tr>
<td><font color="#FA8072" style="font-family:arial;" font size="4">ENTER Patient Pid:</td>
<td><input type="text" name="pid"></td>
</tr>
<tr>
<td colspan="10" align="center" font size="4"><font color="#FA8072"><input type="submit" name="submit" value="View"></td>
</td>
</tr>

<?php
		$localhost='localhost';
		$username='root';
		$password='';
		$db='health';
		$conn=new mysqli($localhost,$username,$password,$db);
		if(isset($_POST['submit']))
		{
			$a=$_POST['pid'];
			$query="select * from patient where pid='$a'";
			$run=mysqli_query($conn,$query);
			?>
			<center>
			<br><br>
			<?php
				while($row=mysqli_fetch_array($run))
				{
					$a=$row['0'];
					$b=$row['1'];
					$c=$row['2'];
					$d=$row['3'];
					$e=$row['4'];
				?>
				<table border="3">
				<tr width="400s">
				<th><font color="#FA8072" style="font-family:arial;" font size="4">PID</th>
				<th><font color="#FA8072" style="font-family:arial;" font size="4">DID</th>
				<th><font color="#FA8072" style="font-family:arial;" font size="4">Room Number</th>
				<th><font color="#FA8072" style="font-family:arial;" font size="4">Bill Number</th>
				<th><font color="#FA8072" style="font-family:arial;" font size="4">Roll Number</th>
				<tr>
				<tr>
						<br/><br/><br/><br/><br/><br/>
						<td align="center"><font color="#FA8072"><?php echo $a;?></td>
						<td align="center"><font color="#FA8072"><?php echo $b;?></td>
						<td align="center"><font color="#FA8072"><?php echo $c?></td>
						<td align="center"><font color="#FA8072"><?php echo $d;?></td>
						<td align="center"><font color="#FA8072"><?php echo $e;?></td>
				</tr>
	
			<?php } ?>
			<?php } ?>
	</table>
</center>
</form>
</center>
</body>
</html>