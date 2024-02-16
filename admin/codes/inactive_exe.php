<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_GET['id'];
$act="select * from customers where cust_id='$id'";
$res=$obj->GetSingleRow($act) ;
$username=$res['email'];
$inactive = "inactive";
$update= "update login set status = '$inactive' where username='$username'";
$res=$obj->Manipulation($update);
if($res['status']=='true')
{
echo $obj->alert("Inactivate successfully.......","../customer_active_view.php");

}

else{

    echo $obj->alert("something went wrong.......","../customer_active_view.php");

}
?>