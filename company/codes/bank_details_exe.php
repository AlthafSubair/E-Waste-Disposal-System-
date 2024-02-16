<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_POST['id'];
$acc_name=$_POST['acc_name'];
$acc_no=$_POST['acc_no'];
$ifsc=$_POST['ifsc'];
 $qry="select * from bank where ownername='$acc_name' && acc_no='$acc_no' && ifsccode='$ifsc'";

$result=$obj->GetSingleRow($qry);
// var_dump($acc_name,$acc_no);
// die;
if($acc_name!=="ADMIN" && $result!=null ){

$ins="INSERT INTO Payment (cust_id,acc_name,acc_no,ifsc)  VALUES
 ('$id','$acc_name','$acc_no','$ifsc')";
$result=$obj->Manipulation($ins);


}else{
   
    
    echo $obj->alert("invalid account details .......","../Bank_details.php?id=$id");
}

if($result['status']=='true')
{
echo $obj->alert("Bank details added successfully.......","../home.php");

}

else{

    echo $obj->alert("something went wrong.......","../complaint.php");

}
?>