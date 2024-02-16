<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$com_cat_id=$_POST['com_cat_id'];
$company_name=$_POST['company_name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$loc=$_POST['loc'];
$stat=$_POST['state'];
$city=$_POST['city'];
$pin=$_POST['pin'];

 $insert="INSERT INTO customers (com_cat_id, company_name, phone, email, location, state, city, pincode) VALUES ('$com_cat_id','$company_name','$phone','$email','$loc','$stat','$city','$pin')";
$res=$obj->Manipulation($insert);

//var_dump($res);
//die();
if($res['status']=='true')
{
echo $obj->alert("insert successfully.......","../customer_view.php");

}

else{

    echo $obj->alert("something went wrong.......","../customer.php");

}
?>
