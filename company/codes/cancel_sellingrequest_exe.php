<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_GET['id'];
$qry2="select * from request_items  where req_id ='$id'";
 $result2=$obj->GetTable($qry2);
 $qry="select * from selling_request  where request_id  ='$id'";
 $result3=$obj->GetTable($qry);


$query="DELETE FROM request_items WHERE req_id ='$id'";
$result=$obj->Manipulation($query);
$del="DELETE FROM selling_request WHERE request_id  ='$id'";
$result1=$obj->Manipulation($del);

if($result['status']=='true' && $result1['status']=='true')
{
echo $obj->alert(" Selling request cancelled successfully.......","../cart.php");

}

else{

    echo $obj->alert("something went wrong.......","../sellingrequest_view.php?id=$id");

}
?>