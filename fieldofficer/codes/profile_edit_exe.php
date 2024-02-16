<?php

require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_POST['id'];
$emp_name=$_POST['emp_name'];
$phone=$_POST['emp_phn'];
$gender=$_POST['gender'];
$city=$_POST['emp_city'];
$email=$_POST['emp_email'];
$district=$_POST['district'];
$query="UPDATE employee SET emp_name='$emp_name', phone='$phone', gender='$gender',city='$city', email='$email', district='$district' WHERE emp_id='$id'";
$result=$obj->Manipulation($query);
if($result['status']=='true')
{
echo $obj->alert("Profile edited successfully.......","../profile.php");

}

else{

    echo $obj->alert("something went wrong.......","../profile.php");

}
?>