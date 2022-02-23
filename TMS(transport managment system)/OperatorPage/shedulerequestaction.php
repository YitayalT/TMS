<?php
include"../connection/connection.php";
session_start();
if (isset($_POST['Applay']))
	{
	$option =$_POST['option'];
	$ass =$_POST['asso'];
	$bord=$_POST['bord'];
	$level=$_POST['level'];
	$date=date('Y-m-d');
	$intial = $_POST['intial'];
	$destination = $_POST['destination'];
	$prmission= 'wait';
	$prepared= 'Ok';
	/*$query = mysql_query("SELECT REQUEST_FOR FROM shedule_request where REQUEST_FOR ='New User'");//check bored number have shedule
    if(mysql_fetch_array($query)>=1)
	{
	echo '<script type="text/javascript">alert("You  are not new user!! ");window:location=\'Sechedurequestsearch.php\';</script>';
	}
	else{
	*/
   $sql="insert into shedule_request values('$_SESSION[USER_ID]','$option','$ass','$bord','$level','$date','$intial','$destination','$prmission','$prepared')";

$result  = mysql_query($sql,$con);
	if(!$result)
	{
	echo "not approved".mysql_error();
	}
	else
	{	
echo '<script type="text/javascript">alert("Applay Seccesfully !! ");window:location=\'Sechedurequestsearch.php\';</script>';
}
}
//}
 ?>