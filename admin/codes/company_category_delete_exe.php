<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_GET['cmp_cat_id'];
$qry="select * from company_category where cmp_cat_id='$id'";
$res=$obj->GetSingleRow($qry);
$p=$res['cmp_cat_name'];
$query="DELETE FROM company_category WHERE cmp_cat_id='$id'";
$result=$obj->Manipulation($query);
if($result['status']=='true')
{
echo $obj->alert($p." delete successfully.......","../company_category.php");

}

else{

    echo $obj->alert("something went wrong.......","../company_category.php");

}
?>