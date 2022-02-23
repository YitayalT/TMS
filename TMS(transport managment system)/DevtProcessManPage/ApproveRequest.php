<?php
include"../connection/connection.php";
$id=$_GET['id'];
$sql="update Request set APPROVED='Approved' where REQUAST_ID='$id'";
if(mysql_query($sql,$con))
{
	echo " Approved successfully";
	include('Viewtorequesttoapprove.php');
}
else
{
	echo "problem".mysql_error();
}
?>