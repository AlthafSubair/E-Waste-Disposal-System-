<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_POST['id'];
$acc_name=$_POST['acc_name'];
$acc_no=$_POST['acc_no'];
$ifsc=$_POST['ifsc'];
$query="UPDATE Payment SET acc_name ='$acc_name', acc_no='$acc_no', ifsc='$ifsc' WHERE cust_id ='$id'";
$result=$obj->Manipulation($query);
if($result['status']=='true')
{
echo $obj->alert("Bank details updated successfully.......","../home.php");

}

else{

    echo $obj->alert("something went wrong.......","../editbank.php");

}

?>