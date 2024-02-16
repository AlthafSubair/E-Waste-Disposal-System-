<?php

require_once("../../connectionclass.php");
$obj=new Connectionclass;
$empid=$_POST['empid'];
	$usertype=$_REQUEST['emptype'];
	$employee_type=$_POST['employee_type'];
	$Name =$_POST['emp_name'];
	$Phone_Number=$_POST['emp_phn'];
	$gender=$_POST['gender'];
	$City =$_POST['emp_city'];
	$email=$_POST['emp_email'];
	$district=$_POST['district'];

	$qry="update login set usertype='$employee_type' where username='$email'";
	$exe=$obj->Manipulation($qry);
	$qry1="update employee set emp_name='$Name',phone='$Phone_Number',gender='$gender',city='$City',district='$district' where emp_id='$empid'";
	$exe1=$obj->Manipulation($qry1);
	if($exe1['status']=="true" && $exe['status']=="true")
	{
		echo $obj->alert("Employee updated successfulLy","../employee_view.php?emp=".$usertype);
	}
	else
	{
		echo $obj->alert("failed","../employee_view.php?emp=".$usertype);
	}
?>