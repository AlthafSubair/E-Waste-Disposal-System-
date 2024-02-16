<?php

require_once("../../connectionclass.php");
$obj=new Connectionclass;
//$r_id=$_POST['id'];
$total=$_POST['count'];
$req_id=$_POST['req'];
$status="update";
$qry="update schedule_employee set sch_status='$status' where req_id='$req_id'";
$res=$obj->Manipulation($qry); 
for($i=1;$i<=$total;$i++){
$price=$_POST['amount_'.$i];

$id=$_POST['id_'.$i];
 $query="UPDATE request_items SET  amount='$price' WHERE req_item_id='$id'";
$result=$obj->Manipulation($query);


if($result['status']=='true' && $res['status']=='true')
{
echo $obj->alert("Amount updated successfully.......","../view_request_item.php?id=$req_id");

}

else{

    echo $obj->alert("something went wrong.......","../view_request_item.php");

}
}
?>