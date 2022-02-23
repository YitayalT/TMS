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
if (isset($_POST['Applay']))
	{
	$bordno = $_POST['bord'];
	$asso = $_POST['aname'];
	$id=$_POST['id'];
	$workp= $_POST['intial'];
	$dest= $_POST['destination'];
	$le= $_POST['level'];
	$perepar= date("y-m-d");
	$distanc= $_POST['distance'];
	$tari=$_POST['tarif'];
	$query3 = mysql_query("SELECT * FROM Schedule where BORD_NUMBER='$bordno'");//check bored number have shedule
    if(mysql_fetch_array($query3)>0)
	{
	echo '<script type="text/javascript">alert("You  are not new user!! ");window:location=\'SearchForSchedule.php\';</script>';
	}
	else{
   $sql=("insert into Schedule values('$_SESSION[USER_ID]','$bordno','$asso','$id',
         '$workp','$dest','$le','$perepar','$distanc','$tari','Null')") ;

$result  = mysql_query($sql,$con);
	if(!$result)
	{
	echo "not registerd".mysql_error();
	}
	else
	{	
echo '<script type="text/javascript">alert("Prepared Seccesfully !! ");window:location=\'SearchForSchedule.php\';</script>';
}
	}}

 ?>