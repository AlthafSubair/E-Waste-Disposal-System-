<?php

require_once("../../connectionclass.php");
$obj=new Connectionclass;
$cust_id=$_POST['id'];

	$pincode =$_POST['pin'];
	$company_name=$_POST['com_name'];
	$phone =$_POST['com_phn'];
	$location=$_POST['com_loc'];
	$city=$_POST['com_city'];

	$qry1="update customers set company_name='$company_name',phone='$phone',location='$location',city='$city',pincode='$pincode' where cust_id='$cust_id'";
	$exe1=$obj->Manipulation($qry1);
    if($exe1['status']=="true")
	{
		echo $obj->alert("Profile updated successfully","../profile.php");
	}
	else
	{
		echo $obj->alert("something went wrong.......","../profile_edit.php");
	}
   
?>