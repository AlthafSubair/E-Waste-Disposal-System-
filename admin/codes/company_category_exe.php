
<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$company_category=$_POST['cat_name'];

 $data="SELECT COUNT(cmp_cat_name) AS catname FROM company_category where cmp_cat_name='$company_category'";
 $re=$obj->GetSingleData($data);


if($re==0)
{
$insert="INSERT INTO company_category (cmp_cat_name) values ('$company_category')";
$res=$obj->Manipulation($insert);
}
else{

    echo $obj->alert($company_category." Already Exist......","../company_category.php");

}

if($res['status']=='true'){
echo $obj->alert(" Successfully added ".$company_category." to Company Category","../company_category.php");

}

else{

    echo $obj->alert("something went wrong......","../company_category.php");

}

?>


