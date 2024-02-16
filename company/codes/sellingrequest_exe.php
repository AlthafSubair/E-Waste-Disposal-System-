<?php
session_start();
require_once('../../ConnectionClass.php');
$obj = new connectionclass();

$item_name = $_POST['item_name'];
$category = $_POST['catid'];

$discription = $_POST['dis'];
$qty = $_POST['qty'];

$email = $_SESSION['email'];
$status = "pending";


$qry = "select * from selling_request where comp_email='$email' and req_status='$status'";
$req = $obj->GetSingleRow($qry);


if ($req == null) {
    $insert = "INSERT INTO selling_request (comp_email, req_date, req_status) VALUES ('$email', CURDATE(), '$status' )";
    $res = $obj->Manipulation($insert);
    $qry = "select * from selling_request where comp_email='$email' and req_status='$status'";
    $req = $obj->GetSingleRow($qry);

    $requestid = $req['request_id'];

    $ins = "INSERT INTO request_items (req_id,item_title,e_cat_id,description,qty)  VALUES
 ('$requestid','$item_name','$category', '$discription', '$qty')";
    $reque = $obj->Manipulation($ins);
} else {
    $requestid = $req['request_id'];
    
    $data = "SELECT COUNT(item_title) AS count FROM request_items WHERE req_id = '$requestid' AND item_title = '$item_name' AND e_cat_id= '$category'";
    $re = $obj->GetSingleData($data);
    if ($re != 0) {
       

        echo $obj->alert("Please edit quantity ......", "../cart.php");
    
  
    }
    else{
        $ins = "INSERT INTO request_items (req_id,item_title,e_cat_id,description,qty)  VALUES
        ('$requestid','$item_name','$category', '$discription', '$qty')";
           $res = $obj->Manipulation($ins);
        
    }
}

//var_dump($res);
//die();
if ($res['status'] == 'true') {

    echo $obj->alert($item_name." added to cart successfully.......", "../sellingrequest_view.php?id=$requestid");
} else {

    echo $obj->alert("something went wrong.......", "../sellingrequest.php?id=$requestid");
}






