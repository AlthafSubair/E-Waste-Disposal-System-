<?php

require_once('../../ConnectionClass.php');

$obj=new connectionclass();
 $id=$_GET['id'];
$status="send";

$qry2="select * from selling_request where request_id='$id'";
$res=$obj->GetSingleRow($qry2);
$email=$res['comp_email'];

$qry3="select * from customers where email='$email'";
$res1=$obj->GetSingleRow($qry3);
$c_id=$res1['cust_id'];

$qry="select * from Payment where cust_id='$c_id'";
$result2=$obj->GetTable($qry);

if($result2 != null){
 $qry1="UPDATE selling_request SET req_status='$status' Where request_id='$id'";
 $result=$obj->Manipulation($qry1);
}
else{
 //die;
    echo $obj->alert("please fill bank details.......","../Bank_details.php");

}
 if($result['status']=='true')
 {
 echo $obj->alert("Successfully sended selling request.......","../home.php");
 
 }
 
 else{
 
     echo $obj->alert("something went wrong.......","../home.php");
 
 }
 ?>
