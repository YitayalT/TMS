
<html>
<head>
<?php 
include"Language/lang.php";
?>
<meta charset="utf-8">
</head>
<style>
.ser form{
margin-left:558px;
padding:5px;
font-style:italic;
font-size:16px;
font-family:cambria;	
}
</style>
<body>
<div class="ser">
<form action="Viewindividualrequest.php" method="post">
<label><?php echo htmlspecialchars($lang['enterid']);?>:</label></br>
<input type="text" name="serach" placeholder="Enter Bord Number..." required="required"/>
<input type="submit" value=">>"/>
</form>
</div>
</body>
</html>

<?php
session_start();
include"connection/connection.php";
if(isset($_POST['serach'])){  
$searchq = $_POST['serach'];
$searchq = preg_replace("#[^0-9a-z]#i","",$searchq); 
$query = mysql_query("SELECT *FROM Request WHERE BORD_NO = '$searchq'") 
or die("could not sea");
$count = mysql_num_rows($query);
if($count==0){
 echo'<script type="text/javascript">alert("Terse is no such data in the database !! ");</script>';	
}
else{
		echo "<table id='vtable' style='width:700px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>First Name</th>
<th bgcolor='#336699'><font color='white' size='2'>Middle Name</th>
<th bgcolor='#336699'><font color='white' size='2'>Phone No</th>
<th bgcolor='#336699'><font color=white size='2'>Request to</th>
<th bgcolor='#336699'><font color=white size='2'>Request Id</th>
<th bgcolor='#336699'><font color=white size='2'>Accept</th>
</tr>";
	while($row= mysql_fetch_array($query)){
	echo"<tr>";
echo"<td>";echo $row["FIRST_NAME"]; echo"</td>";
echo"<td>";echo $row["MIDDLE_NAME"]; echo"</td>";
echo"<td>";echo $row["PHONE_NO"]; echo"</td>";
echo"<td>";echo $row["REQUEST_TO"]; echo"</td>";
echo"<td>";echo $row["REQUAST_ID"]; echo"</td>";
echo"<td>";echo $row["ACCEPTED"]; echo"</td>";		
	}
	
}
}
echo"</tr>";
	echo "</table>";
?>

