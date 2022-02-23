<?php
include"../connection/connection.php";
$id=$_REQUEST['id'];
$sql="update shedule_request set PERMISSION='No' where OPERATOR_ID='$id'";
if(mysql_query($sql,$con))
{
	echo "you Reject Successfully";
	include('Schedulepermissionview.php');
}
else
{
	echo "problem".mysql_error();
}
?>