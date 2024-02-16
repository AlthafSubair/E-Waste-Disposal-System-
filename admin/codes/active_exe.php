<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_GET['id'];
$act="select * from customers where cust_id='$id'";
$res=$obj->GetSingleRow($act) ;
$username=$res['email'];
$active = "active";
$update= "update login set status = '$active' where username='$username'";
$res=$obj->Manipulation($update);
if($res['status']=='true')
{
echo $obj->alert("Activate successfully.......","../customer_view.php");

}

else{

    echo $obj->alert("something went wrong.......","../customer_view.php");

}
?>
