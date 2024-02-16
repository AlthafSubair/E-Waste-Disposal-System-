<?php
	session_start();
	$email=$_SESSION['email_id'];	
	require_once("../../connectionclass.php");
	//$current_password=$_POST['current_password'];
	$new_password=$_POST['pass'];
	$con=$_POST['cpass'];
//	echo $new_password;

//	echo $con;



	
	$obj=new connectionclass();
	
if($new_password==$con)
{
	//echo "done";
	$qry="update login set password='$new_password' where username='$email'";
	$result=$obj->Manipulation($qry);
	//echo $result['Status'];
	if($result['status']=="true")
	{
		echo $obj->alert("SUCCESSFULLY UPDATED","../login.php");
	}
	else
	{
		echo $obj->alert("NOT UPDATED,TRY AGAIN","../resetpassword.php");
	}
}
else
{
	echo "failed";
}
//{
	
	//echo $qry;
	
	//echo $result['Status'];
	
?>

