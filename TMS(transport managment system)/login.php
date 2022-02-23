<html>
<head>
<meta charset="utf-8">
<title>Login form</title>
<link rel="stylesheet"
type="text/css"
href="style.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
 <script src="js/login.js" type="text/javascript"></script>
 <style type="text/css">
#unameerror{
color:red;
margin-left:145px;
font-size:17px;
}
#passError{
	color:red;
	margin-left:145px;
	font-size:17px;
}
</style>
<?php include'Language/lang.php';?>
<meta charset="utf-8">
</head>
<body bgcolor="#bbb">
<div class="loginBox">
 <div class="glass">
   <img src="images/2.png" class="user">
   <form action="login.php" method="post" onSubmit = "return validate()" name="myform"target="_top" id="userlog">
   <div class="inputBox">
   <input type="text"name="uname"autocomplete="off"placeholder="<?php echo htmlspecialchars($lang['username']);?>"id="uname"> <!--autocomplete="off"-->
   <span><i class="fa fa-user" aria-hidden="true" id="unameerror"></i></span>
   </div>
      <div class="inputBox">
   <input type="password"name="upassword"placeholder="<?php echo htmlspecialchars($lang['pass']);?>"id="password">
   <span><i class="fa fa-user" aria-hidden="true"id="passError"></i></span>
   </div>
   <input type="submit"name="login"value="<?php echo htmlspecialchars($lang['log']);?>">
   </form>
   </div>
   </div>
</body>
</html> 

<?php
session_start();
include 'connection/connection.php';
if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['upassword'];
    $pass = base64_encode($password);
    $query = mysql_query("SELECT *FROM Account where USER_NAME='$username' and PASSWORD='$pass'");
    if (!$query) {
        echo mysql_error();
    }
    if (mysql_num_rows($query) > 0) {
        $activate = mysql_query("SELECT *FROM Account where USER_NAME='$username' and STATUS='0'");
        if (mysql_num_rows($activate) > 0) {
            $result = mysql_query("SELECT * FROM Account WHERE USER_NAME='$username' and PASSWORD='$pass'");
            if (mysql_num_rows($result) > 0) {
                while ($row = mysql_fetch_assoc($result)) {
                    $_SESSION['USER_NAME'] = $username;
                    $_SESSION['ROLE'] = $row['ROLE'];
                    $_SESSION['USER_ID'] = $row['USER_ID'];
					//$_SESSION['last_time'] = time();
                    if ($row['ROLE'] == 'sysadmin') {
                  
					 echo "<script>window.location='Admin/Adminpage.php';</script>";
                    } 
					else if
					($row['ROLE'] == 'assomanager') {
                     header("Location:AssoManagerPage/AssociationManpage.php");
                    } 
					else 
						if ($row['ROLE'] == 'devmanager') {
                        header("Location:DevtProcessManPage/dev't process manager.php");
                    }
					else 
						if ($row['ROLE'] == 'Employee') {
                        header("Location:DisterEmployee/Employeepage.php");
                    }
					else 
						if ($row['ROLE'] == 'distermanager') {
                        header("Location:DistributerManagerPage/DistributerManPage.php");
                    }
					else 
						if ($row['ROLE'] == 'operator') {
                        header("Location:OperatorPage/Operatorpage.php");
                    }
					
                }
            }
else {
	echo '<script type="text/javascript">alert("You are entered incorrect password!");window:location=\'index.php\';</script>';
            }			
        } 
		else {
            echo '<script type="text/javascript"> alert("Sorry Your Account is Deactivated Contact With Adminstrator!");window:location=\'index.php\';</script>';
              }
    } 
	else {
        echo '<script type="text/javascript"> alert("user name not exist!");window:location=\'index.php\';</script>';
    }
}
mysql_close($con);
?>