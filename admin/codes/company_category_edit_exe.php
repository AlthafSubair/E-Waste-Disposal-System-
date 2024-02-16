<?php

require_once("../../connectionclass.php");
$obj = new Connectionclass;
$id = $_POST['cmpcatid'];
$company_category = $_POST['cat_name'];

$data = "SELECT COUNT(cmp_cat_name) AS catname FROM company_category where cmp_cat_name='$company_category'";
$re = $obj->GetSingleData($data);

if ($re == 0) {

    $query = "UPDATE company_category SET cmp_cat_name='$company_category' WHERE cmp_cat_id='$id'";
    $result = $obj->Manipulation($query);
} else {

    echo $obj->alert($company_category." Already Exist......", "../company_category.php");
}


if ($result['status'] == 'true') {
   
        echo $obj->alert("Company category ".$productName." updated successfully.", "../company_category.php");
} else {

    echo $obj->alert("something went wrong.......", "../editcompany.php");
}
