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
<style>
div {
    background-color: lightgrey;
    width: 300px;
    border: 3px solid black;
    padding: 25px;
    margin: 25px;
}
</style>
</head>
<body bgcolor="#FA8072">
<br/><br/><br/><br/><br/>
<div height:100px>
<h3>Doctor</h3>
<button><a href="dinsert.php">INSERT</a></button>
<button><a href="dview.php">VIEW</a></button>
<button><a href="ddelete.php">DELETE</a></button>
<button><a href="dupdate.php">UPDATE</a></button>
</div>
<div>
<h3>Patient</h3>
<button><a href="pinsert.php">INSERT</a></button>
<button><a href="pview.php">VIEW</a></button>
<button><a href="pdelete.php">DELETE</a></button>
<button><a href="pupdate.php">UPDATE</a></button>
</div>
<div>
<h3>Room</h3>
<button><a href="rinsert.php">INSERT</a></button>
<button><a href="rview.php">VIEW</a></button>
<button><a href="rdelete.php">DELETE</a></button>
<button><a href="rupdate.php">UPDATE</a></button>
</div>
</body>
</html>

