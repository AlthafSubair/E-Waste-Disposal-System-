<?php
session_start();
require_once("../../connectionclass.php");
$obj=new ConnectionClass();
 $catname=$_POST['catname'];
 $price=$_POST['price'];
 $qry1="insert into ewaste_category(catname,price )VALUES(Electronic waste,household);";
 $exe=$obj->GetSingleData($qry1);
 $_SESSION['email']=$catname;

 //var_dump($exe);
 echo $exe;
 if($exe=='admin')
 {
 	header("location:../../admin/index.php");
 }
else
{
   echo $obj->alert("invalid username or password","../login.php");
}
?>