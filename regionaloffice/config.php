<?php

$con=mysqli_connect("localhost","root","","db_regionaloffice") or die(mysqli_error($con));
if($con)
{
	//echo"connection  established";
}
else
{
	echo"connection Error...";
}
?>