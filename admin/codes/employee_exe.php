<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;

$employee_type=$_POST['employee_type'];
	$Name =$_POST['emp_name'];
	$Phone_Number=$_POST['emp_phn'];
	$gender=$_POST['gender'];
	$City =$_POST['emp_city'];
	$Email =$_POST['emp_email'];
	$district=$_POST['district'];
	
	$data="SELECT COUNT(username) AS mail FROM login where username='$Email'";
	$re=$obj->GetSingleData($data);
   
	if($re==0)
   {
	
		$qry1="insert into employee(employee_type,emp_name,phone,gender,city,email,district) values('$employee_type','$Name','$Phone_Number','$gender','$City','$Email','$district')";
		
		$qry2="insert into login(username,password,usertype,status) value('$Email','$Phone_Number','$employee_type','active')";
		
		$exe1=$obj->Manipulation($qry1);
		$exe2=$obj->Manipulation($qry2);
		
   }

	
	//var_dump($exe2);
	

else{

	echo $obj->alert("Email Already Exist......","../employee.php");
	
}
	
	    
    if($exe1['status']=="true" && $exe2['status']=="true")
	{

		//echo "successful";
		echo $obj->alert("Employee Registration Successful.","../employee_view.php?emp=fieldofficer");
	}
	else
	{
		echo $obj->alert("Failed","../employee.php");
	}
	
	
 ?>
