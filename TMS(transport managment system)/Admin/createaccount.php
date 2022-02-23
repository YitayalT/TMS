<?php
session_start();
include "../connection/connection.php";
$userName = $_SESSION['USER_ID'];
if (isset($_POST['create'])) {
	$userid=$_POST['userId'];
    $uname = $_POST['username'];
    $password = $_POST['password'];
	$rpass=$_POST['rpassword'];
	  $pass = base64_encode('$password');
    $roll = $_POST['rol'];
    $emai = $_POST['email'];
    $stat = '0';
     $adminid=$_SESSION['USER_ID'];                                                 
    $query3 = mysql_query("SELECT * FROM Account where USER_NAME='$uname' || USER_ID='$userid'");
    if(mysql_fetch_array($query3)>0)
	{
		echo '<script type="text/javascript">alert("Account are already exist !! ");</script>';
	}//end if there is an account
	else//if doesnot predefind account
	{
		if($roll=='operator')
		{
			$sql="select REQUAST_ID from Request where REQUAST_ID='$userid' && APPROVED='Approved'";
			$result=mysql_query($sql,$con);
			if(mysql_fetch_array($result) > 0)
			{
				$save="insert into Account values('$userid','$uname','$pass','$roll','$emai','$stat','$adminid')";
				$saved=mysql_query($save,$con);
				if($saved)
				{
					echo '<script type="text/javascript">alert("Account created Seccesfully !! ");</script>';
				}
				else{
					echo "error".mysql_error();
				}
			}//end if operator exist
			else{
				echo '<script type="text/javascript">alert("You are not Legal member/not appreoved !! ");</script>';
			}
			
		}//end if role is opertator
		else if($roll == 'sysadmin' ||$roll == 'Employee'|| $roll == 'assomanager' || $roll== 'distermanager' || $roll =='devmanager')
		{
			$sql1="select EID from Employee where EID='$userid'";
			$result1=mysql_query($sql1,$con);
			if(mysql_fetch_array($result1) > 0)
			{
		$save2="insert into Account values('$userid','$uname','$pass','$roll','$emai','$stat','$adminid')";
				$saved2=mysql_query($save2,$con);
				if($saved2)
				{
					echo '<script type="text/javascript">alert("Account created Seccesfully !! ");</script>';
				}
				else{
					echo "error".mysql_error();
				}
			}//end if operator exist
			else{
				echo '<script type="text/javascript">alert("Yuo are not legal member of Employee!! ");</script>';
			}	
		}
	}//end if have not account
    }
?>
<html>
<head>
<link rel="stylesheet"
type="text/css"
href="../css/f.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="../js/jquery-3.3.1.js" type="text/javascript"></script>
 <script src="../js/createaccvalidation.js" type="text/javascript"></script>
 <meta charset="utf-8">
<?php include'../Language/lang.php';?>
</head>
<body>
<div class="header">
<h1><?php echo htmlspecialchars($lang['createኡ']);?></h1>
</div>
<form method="POST"action="createaccount.php" onsubmit="return Validate()"name="vform"id="cform">
<div class="input-group">
<label><?php echo htmlspecialchars($lang['id']);?></label>
<input type="text" name="userId" id="uid" placeholder=""onkeyup="numbersOnly(this)">
<span><i id="userId_error"></i></span>
</div>
<div class="input-group">
<label><?php echo htmlspecialchars($lang['username']);?></label>
<input type="text" name="username"class="textInput"id="un">
<span><i id="uname_error"></i></span>
</div>

<div class="input-group">
<label><?php echo htmlspecialchars($lang['password']);?></label>
<input type="password" name="password"id="pass"><span><i id="pass_error"></i></span>
</div>
<div class="input-group">
<label><?php echo htmlspecialchars($lang['repass']);?></label>
<input type="password" name="rpassword"id="repass"><span><i id="repass_error"></i></span>
</div>

<div class="selectrol">
<label style="font-size: 16pt" ><?php echo htmlspecialchars($lang['role']);?></label></br>
<select name="rol" style="font-size: 12pt" id="form_role">
        <option>please choose</option>
		<option>sysadmin </option>
        <option> assomanager </option>
        <option>devmanager </option>
        <option> distermanager </option>
        <option> operator</option>	
		<option>Employee</option>
	</select><span  id="role_error_message"></span>
</div>
<div class="input-group">
<label> <?php echo htmlspecialchars($lang['emial']);?></label>
<input type="text"id="em"name="email"><span><i id="email_error"></i></span>
</div>

<div class="input-group">
<button type="submit" name="create" class="btn"><?php echo htmlspecialchars($lang['create']);?></button>
<button type="reset" name="Reset" class="btn"><?php echo htmlspecialchars($lang['reset']);?></button>
</div>
</form>
</body>
</html>
<script>
function lettersOnly(input){
var regex=/[^a-z]/gi;
input.value=input.value.replace(regex,"");
}
function numbersOnly(input){
var regex=/[^0-9]/gi;
input.value=input.value.replace(regex,"");
}
</script>
