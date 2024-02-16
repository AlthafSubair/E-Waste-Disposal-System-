<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_GET['catid'];
$q="SELECT * FROM ewaste_category WHERE catid='$id'";
$re=$obj->GetSingleRow($q);
$p=$re['item'];
$query="DELETE FROM ewaste_category WHERE catid='$id'";
$result=$obj->Manipulation($query);
if($result['status']=='true')
{
echo $obj->alert($p." delete successfully.......","../ewaste_category.php");

}

else{

    echo $obj->alert("something went wrong.......","../ewaste_category.php");

}
?>