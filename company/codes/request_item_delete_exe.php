<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_GET['id'];
$qry2="select * from request_items  where req_item_id ='$id'";
 $result2=$obj->GetSingleRow($qry2);

$req=$result2['req_id'];
$query="DELETE FROM request_items WHERE req_item_id ='$id'";
$result=$obj->Manipulation($query);
if($result['status']=='true')
{
echo $obj->alert("Delete successfully.......","../sellingrequest_view.php?id=$req");

}

else{

    echo $obj->alert("something went wrong.......","../sellingrequest_view.php");

}
?>