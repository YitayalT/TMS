<?php
include"../connection/connection.php";
$id=$_GET['id'];
$sql="update Request set ACCEPTED='Rejected' where REQUAST_ID='$id'";
if(mysql_query($sql,$con))
{
	echo "you Rejected successfully";
	include('viewrequest.php');
}
else
{
	echo "problem".mysql_error();
}
?>