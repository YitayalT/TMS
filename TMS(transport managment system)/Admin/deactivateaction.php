<?php
include('../connection/connection.php');
if(isset($_GET['status']))
{
$status1=$_GET['status'];
$select=mysql_query("select * from Account where USER_ID='$status1'");
while($row=mysql_fetch_object($select))
{
$status_var=$row->status;
if($status_var=='1')
{
$status_state=0;
}
else
{
$status_state=1;
}
$update=mysql_query("update Account set STATUS='$status_state' where USER_ID='$status1' ");
if($update)
{
header("Location:deactivateactiveuser.php");
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