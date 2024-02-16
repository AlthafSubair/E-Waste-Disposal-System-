<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_POST['id'];
$npswd=$_POST['npswd'];
$cpswd=$_POST['cpswd'];
if($npswd === $cpswd){
$query="UPDATE login SET password='$cpswd' WHERE username='$id'";
$result=$obj->Manipulation($query);
}
if($result['status']=='true')
{
echo $obj->alert("update successfully.......","../../login/login.php");

}

else{

    echo $obj->alert("something went wrong.......","../change_password.php");

}
?>