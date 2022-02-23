<?php
include('../connection/connection.php');
if(isset($_GET['status']))
{
$status1=$_GET['status'];
$select=mysql_query("select * from Account where USER_ID='$status1'");
while($row=mysql_fetch_object($select))
{
$status_var=$row->status;
if($status_var=='0')
{
$status_state=1;
}
else
{
$status_state=0;
}
$update=mysql_query("update Account set STATUS='$status_state' where USER_ID='$status1' ");
if($update)
{
header("Location:activatedeactivateuser.php");
}
else
{
echo mysql_error();
}
}
?>
<?php
}
?>