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
$sql="select USER_ID from Account";
$res=mysql_query($sql,$con);
if(mysql_num_rows($res)>0)
{
	$row=mysql_fetch_array($res);
	$userid=$row['USER_ID'];

*/
$query = mysql_query("SELECT *FROM Request where ACCEPTED ='accepted' and APPROVED='Approved' ORDER BY REQUASTED_DATE DESC Limit 9") 
or die("could not sea");
$count = mysql_num_rows($query);
if($count==0){
 echo'<script type="text/javascript">alert("Terse is no such data in the database !! ");</script>';	
}
else{
		echo "<table id='vtable' style='width:700px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>ID Number</th>
<th bgcolor='#336699'><font color='white' size='2'>First Name</th>
<th bgcolor='#336699'><font color='white' size='2'>Middle Name</th>
<th bgcolor='#336699'><font color=white size='2'>Phone number</th>
</tr>";
	while($row= mysql_fetch_array($query)){
	echo"<tr>";
echo"<td>";echo $row["REQUAST_ID"]; echo"</td>";
echo"<td>";echo $row["FIRST_NAME"]; echo"</td>";
echo"<td>";echo $row["MIDDLE_NAME"]; echo"</td>";
echo"<td>";echo $row["PHONE_NO"]; echo"</td>";
	}
$sql2=Mysql_query("SELECT * FROM employee ORDER BY EID DESC Limit 13");
while($rr=mysql_fetch_array($sql2)){
	echo"<tr>";
echo"<td>";echo $rr["EID"]; echo"</td>";
echo"<td>";echo $rr["FIRST_NAME"]; echo"</td>";
echo"<td>";echo $rr["MIDDLE_NAME"]; echo"</td>";	
echo"<td>";echo $rr["PHONE_NO"]; echo"</td>";
}
}
echo"</tr>";
	echo "</table>";
?>

