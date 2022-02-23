
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
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>


<?php
$msg = "";
if(isset($_POST['upload'])){
	$target = "../images/".basename($_FILES['image']['name']);
	$da = date("y-m-d");
	$notice=$_POST['asso'];
	$image = $_FILES['image']['name'];
	$text = $_POST['text'];
	$sql = "INSERT INTO upload VALUES ('$da','$notice','$image','$text','$_SESSION[USER_ID]')";
     mysql_query($sql,$con);
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target )){
		$msg ="image is uplod seccessfully";
	}
	else{
		$msg = "in not uploded";
	}
	}

?>
<html>
<head>
<style>
.upload {
	padding:13px;
	margin-left:55px;
}
</style>
</head>
<body>
<div class="upload">
<fieldset>
<legend>Upload Form</legend> 
<form method="post" action="imageupload.php" enctype="multipart/form-data">
<style>
.request select{
	width:155px;
}
</style>
	<div class="request">
		<label>Notice_For</label></br>
		<select name="asso"required="required">
		<option></option>
		<option>For All </option>
        <?php
 $cdquery="SELECT *FROM association";
            $cdresult=mysql_query($cdquery,$con);
           while ($cdrow=mysql_fetch_array($cdresult)) {
     ?>
	 <option><?php echo $cdrow['ASSOCIATION_NAME'];?></option>
	 <?php
            
            }

            ?>
    
        </select>  
		</div>
<label>Image</label></br>
<input type="hidden"name="size"value="100000">
<input type="file"required="required"name="image"></br>
<label>Text</label></br>
<textarea name="text"required="required"cols="40"rows="4"></textarea>
</br></br>
<input type="submit" name="upload" value="Upload">
</form>
</fieldset>
</div>
</body>
</html>