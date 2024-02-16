<?php

require_once('../ConnectionClass.php');
$obj=new connectionclass();

$catid =$_GET['catid'];

//if (isset($_POST['catid'])) {


 $qry = "SELECT * FROM ewaste_category WHERE catid=$catid";
$result2=$obj->GetSingleRow($qry);

echo $result2['price'];

//}

 
    
