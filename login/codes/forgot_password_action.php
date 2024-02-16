<?php
require_once("../../connectionclass.php");

 $email_id=$_POST['username'];
//echo $email_id;
$obj=new connectionclass();

$qry="select count(*) from login where username='$email_id' and status='active'";


//echo $qry;

$count=$obj->GetSingleData($qry);


if($count!=0)
{
	echo $obj->alert("Email ID  exist","../forgot_password.php");
}
else
{
	echo $obj->alert("Email ID doesnot exist","../forgot_password.php");
}
?>