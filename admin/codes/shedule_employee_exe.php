<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_POST['id'];
$emp_id=$_POST['emp_id'];
$coll_date=$_POST['coll_date'];
$sch_status="shedule";





$insert="INSERT INTO schedule_employee (req_id,emp_id,sch_date,collected_date,sch_status) values ('$id','$emp_id',CURDATE(),'$coll_date','$sch_status')";
$res=$obj->Manipulation($insert);
$query="UPDATE selling_request SET req_status='$sch_status' WHERE request_id ='$id'";
$result=$obj->Manipulation($query);

//var_dump($res);
if($res['status']=='true')
{
echo $obj->alert("Sheduled employee successfully.......","../view_shedule_employee.php");

}

else{

    echo $obj->alert("something went wrong.......","../shedule_employee.php");

}
?>