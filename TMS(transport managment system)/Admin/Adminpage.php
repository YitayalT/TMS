<?php
include("../connection/connection.php");  
 session_start();
if(isset($_SESSION['USER_ID']))
 {
  $mail=$_SESSION['USER_ID'];
 } else {
 ?>

<script>
  alert('You are not logged In !! Please Login to access this page');
  alert(window.location='../login.php');
 </script>
 <?php
 }
 ?>				  
<?php 
/*
include"../connection/connection.php";
session_start();
if(isset($_SESSION["USER_ID"]))
{
	if((time() - $_SESSION['last_time']) > 30)
	{
		header("location:../logout.php");
	}	
	else{
	$_SESSION['last_time'] = time();
	echo"<h3 align='center'>automatic logout after1 minute</h3>";
	echo"<p align='center'><a href ='logout.php'>logout</a></p>";
		
	}
}
*/	
?>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet"
type="text/css"
href="../css/adminstyle.css">
</head>
<body>
<div id="container">

<header><table border="2px" color="white"><tr><td><img src="../images/b2.jpg" height="70px"width="150px"/>
</td><br><td><img src="../images/Adminn.png" width="1050" height="70px"/></td>
<td><img src="../images/b4.jpg" height="70px" width="150px"/>
</td></tr></table></header>
	<?php 
	include '../logoutlink.php';
	?>

	</div>
	<div id="main">
	<div id="sidebar1">
	<div id="admin">
<ul><li><a><?php echo htmlspecialchars($lang['admin']);?></a></li></ul>
	<ul>
	<li><a href="createaccount.php"target="myframe"><?php echo htmlspecialchars($lang['createa']);?></a></li>
	</ul>
	<ul>
	<li><a href="AccountUpadate.php"target="myframe"><?php echo htmlspecialchars($lang['update']);?></a></li>
	</ul>
	<ul>
	<li><a href="deactivateactiveuser.php"target="myframe"><?php echo htmlspecialchars($lang['deactivate']);?></a></li>
	</ul>
	<ul>
	<li><a href="activatedeactivateuser.php"target="myframe"><?php echo htmlspecialchars($lang['activate']);?></a></li>
	</ul>
	<ul>
	<li><a href="employeeregistration.php"target="myframe"><?php echo htmlspecialchars($lang['employee']);?></a></li>
	</ul>
	<ul>
	<li><a href="imageupload.php"target="myframe"><?php echo htmlspecialchars($lang['notice']);?></a></li>
	</ul>
	<ul>
	<li><a href="ViewUser.php"target="myframe"><?php echo htmlspecialchars($lang['user']);?></a></li>
	</ul>
</div>
</br></br></br>
	<?php
	include '../imagelink.php';
	?>
	</div>
	<div id="sidebar2">
		<?php 
	include '../timecalendar.php';
		?>
     
	</div>
	<div id="column1"> 
    <?php
	include '../ifram.php';
	?>
	</div>
	
	</div>
	</body>
	<footer>
	<?php 
	include '../footer.php';
	?>
	</footer>
</html>
