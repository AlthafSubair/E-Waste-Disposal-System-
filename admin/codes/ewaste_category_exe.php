<?php
require_once("../../connectionclass.php");
$obj = new Connectionclass;

// Function to base64 encode an image file
function base64EncodeImage($imagePath)
{
    $imageData = file_get_contents($imagePath);
    $base64Image = base64_encode($imageData);
    return $base64Image;
}

// Retrieve data from the form
$productName = $_POST['item'];
$price=$_POST['price'];
$ewaste_category=$_POST['catname'];
$imagePath = $_FILES['img']['tmp_name'];

// Base64 encode the image
$base64Image = base64EncodeImage($imagePath);

$data="SELECT COUNT(catname) AS catname FROM ewaste_category where catname='$ewaste_category' AND item='$productName'";
 $re=$obj->GetSingleData($data);

 if($re==0)
 {
// Insert the new product into the database
$insert = "INSERT INTO ewaste_category (catname, price, image, item) VALUES ('$ewaste_category', '$price', '$base64Image', '$productName')";
$res = $obj->Manipulation($insert);
 }
 else{

    echo $obj->alert(" Already Exist......","../ewaste_category.php");

}
if ($res['status'] == 'true') {
    echo $obj->alert(" Successfully added ".$productName." to Ewaste Category", "../ewaste_category.php");
} else {
    echo $obj->alert("Something went wrong.", "../ewaste_category.php");
}
?>