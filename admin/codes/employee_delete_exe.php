<?php
require_once("../../connectionclass.php");
$obj=new Connectionclass;
$id=$_GET['empid'];



$act="select * from employee where emp_id='$id'";
$re=$obj->GetSingleRow($act) ;
$username=$re['email'];

$qry="DELETE FROM login WHERE username='$username'";
$result=$obj->Manipulation($qry);
$query="DELETE FROM employee WHERE emp_id='$id'";
$res=$obj->Manipulation($query);

if($res['status']=='true' && $result['status']=='true')
{
echo $obj->alert("Removed Employee successfully.......","../employee_view.php?emp=fieldofficer");

}

else{

    echo $obj->alert("something went wrong.......","../employee_view.php?emp=fieldofficer");

}
?>