<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$type=$_POST['type'];
$com=$_POST['com'];
$dis=$_POST['dis'];
$email=$_POST['email'];

$ins="INSERT INTO complaint (type,comp,description,date,mail)  VALUES
 ('$type','$com','$dis',CURDATE(),'$email')";
$result=$obj->Manipulation($ins);

if($result['status']=='true')
{
echo $obj->alert("Complaint registered.......","../home.php");

}

else{

    echo $obj->alert("something went wrong.......","../complaint.php");

}
?>