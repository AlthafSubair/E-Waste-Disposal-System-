<?php

require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_POST['id'];
$emp_name=$_POST['emp_id'];
$coll_date=$_POST['coll_date'];

 $query="UPDATE schedule_employee SET emp_id ='$emp_name', collected_date='$coll_date' WHERE sch_emp_id ='$id'";
$result=$obj->Manipulation($query);

if($result['status']=='true')
{
echo $obj->alert("Updated sheduled employee successfully.......","../view_shedule_employee.php");

}

else{

    echo $obj->alert("something went wrong.......","../view_shedule_employee.php");

}

?>