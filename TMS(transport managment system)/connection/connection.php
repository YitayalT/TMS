<?php
$con=mysqli_connect('localhost','root','');
if($con){
}
else
{
	echo "not connected";
}
$sel=mysqli_select_db('TMS',$con);
if(!$sel){
    echo 'TMS is not select ';
}
?>