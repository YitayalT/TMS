<?php
include"../connection/connection.php";
$id=$_GET['id'];
$sql="update shedule_request set PREPARED='Done' where OPERATOR_ID='$id'";
if(mysql_query($sql,$con))
{
	echo '<script type="text/javascript">alert("Approve Seccesfully !! ")window:location=\'SchedulePreparation.php\';</script>';
	include('Shedulerequestapprove.php');
}
else
{
	echo "problem".mysql_error();
}
?>