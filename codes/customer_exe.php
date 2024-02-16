<?php
require_once("../connectionclass.php");
$obj=new Connectionclass;
$com_cat_id=$_POST['com_cat_id'];
$company_name=$_POST['companyname'];
$phone=$_POST['contact'];
$email=$_POST['email'];
$loc=$_POST['district'];
$state=$_POST['state'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$pass=$_POST['password'];
$pswd=$_POST['confirmpassword'];
$status="inactive";
$usertype="customer";


$data="SELECT COUNT(username) AS mail FROM login where username='$email'";
	$re=$obj->GetSingleData($data);
   
	if($re==0){
if($pswd === $pass){
 $insert="INSERT INTO customers (com_cat_id, company_name, phone, email, location, state, city, pincode) VALUES ('$com_cat_id','$company_name','$phone','$email','$loc','$state','$city','$pin')";
$res=$obj->Manipulation($insert);


$loins="INSERT INTO login (username,password,usertype,status) VALUES('$email','$pswd','$usertype','$status')";
$res=$obj->Manipulation($loins);

}else{
    echo $obj->alert("password mismatch.......","../registration.php");
}
    }
else{
    echo $obj->alert("Email already exist.......","../registration.php");
}


if($res['status']=='true')
{
echo $obj->alert("Registration successfully.......","../login/login.php");

}

else{

    echo $obj->alert("something went wrong.......","../registration.php");

}
?>
?>