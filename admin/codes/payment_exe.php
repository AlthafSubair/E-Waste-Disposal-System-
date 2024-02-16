<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;

$acc_onwer=$_POST['acc_onwer'];
$acc_no=$_POST['acc_no'];
$ifsccode=$_POST['ifsccode'];
$amount=$_POST['amount'];
$id=$_POST['id'];
$qry="select * from bank where ownername='$acc_onwer' && acc_no='$acc_no' && ifsccode='$ifsccode' ";
$result=$obj->GetSingleRow($qry);

$check="select* from selling_request where request_id='$id'";
$ch=$obj->GetSingleRow($check);



if($acc_onwer!=="ADMIN" && $result!=null && $ch['req_status'] !== "Completed"){
  
  
        $exe="select * from bank where acc_no ='12345678901'";
        $res=$obj->GetSingleRow($exe);  
        $total=$res['amount'] - $amount;
        $addtotal=$result['amount'] + $amount;
        $tot="update bank set amount='$total' where acc_no='12345678901'";
        $update=$obj->Manipulation($tot);
        $addtot="update bank set amount='$addtotal' where acc_no='$acc_no'";
        $addupdate=$obj->Manipulation($addtot);
        

        $com="update schedule_employee set sch_status='Completed' where req_id='$id'";
        $up=$obj->Manipulation($com);
        $sel="update selling_request set req_status='Completed' where request_id ='$id'";
        $rsel=$obj->Manipulation($sel);
    }
    else{
        echo $obj->alert("invalid account details or payment already done.......","../payment.php?id=$id");
}







if(isset($update) && $update['status']=='true')
{
echo $obj->alert("payment successfully.......","../view_update_amount.php");

}

else{

    echo $obj->alert("invalid account details.......","../payment.php?id=$id");

}


?>
