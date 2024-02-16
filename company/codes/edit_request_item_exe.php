<?php

require_once("../../connectionclass.php");
$obj=new Connectionclass;
$r_id=$_POST['r_id'];
$req=$_POST['req_id'];

$description=$_POST['dis'];
$qty=$_POST['qty'];

$query="UPDATE request_items SET  description='$description',qty='$qty' WHERE req_item_id ='$r_id'";
$result=$obj->Manipulation($query);

if($result['status']=='true')
{
echo $obj->alert("Request item updated successfully.......","../sellingrequest_view.php?id=$req");

}

else{

    echo $obj->alert("something went wrong.......","../edit_request_item.php");

}
?>