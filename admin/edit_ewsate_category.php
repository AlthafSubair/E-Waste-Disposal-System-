<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$qry1="select * from ewaste_category";
$result=$obj->GetTable($qry1);
//var_dump($result);
$catid=$_REQUEST['catid'];
$qry2="select * from ewaste_category where catid='$catid'";
$result2=$obj->GetSingleRow($qry2);

//var_dump($result2);
?>

		<!-- /inner_content-->
        <div class="inner_content" style="background-image: url(images/home1.png);">

<!-- /inner_content_w3_agile_info-->

<!-- breadcrumbs -->
    <div class="w3l_agileits_breadcrumbs">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="index.php">Home</a><span>«</span></li>
                <li>Ewaste Category <span>«</span></li>
                <li>Edit</li>
            </ul>
        </div>
    </div>
<!-- //breadcrumbs -->

<div class="inner_content_w3_agile_info two_in">


       <!--/forms-->
       <div class="forms-main_agileits">
														
                                                        <div class="graph-form agile_info_shadow">
                                                         <h3 class="w3_inner_tittle two">Ewaste Category </h3>
                                                                <div class="form-body">
                                                                    <form action="codes/ewsate_category_edit_exe.php" method="post" enctype="multipart/form-data"> 
                                                                    <div class="form-group" >
                                                                            <label for="exampleInputEmail1"> Ewaste Title Name </label> 
                                                                            <input type="text" pattern="^[A-Z][a-zA-Z ]*$" title="Characters only" class="form-control" id="exampleInputEmail1" placeholder="Enter ewaste category" name="item" value="<?php echo $result2['item']; ?>" required> </div> 
                                                                            </div> 
                                                                        <div class="form-group"> 
                                                                            <label for="exampleInputEmail1"> Ewaste Category</label> 
                                                                            <input type="text" pattern="^[A-Z][a-zA-Z ]*$" title="Characters only" class="form-control" id="exampleInputEmail1" placeholder="Enter ewaste category" name="catname" value="<?php echo $result2['catname']; ?>" required> </div> 
                                                                            <div class="form-group"> 
                                                                            <input type="hidden" name="catid" value="<?php echo $catid ?>">   
                                                                            <label for="exampleInputEmail1">Price</label> 
                                                                            <input type="text" pattern="^\$?\d+(\.\d{2})?$" title="Enter valid price" class="form-control" id="exampleInputEmail1" placeholder="Enter ewsate price" name="price" value="<?php echo $result2['price']; ?>" required> </div> 
                                                                            <div class="form-group" >
                                                                           <div class="form-group">
<div class="form-group">
    <label for="exampleInputEmail1">Current Image</label>
    <img src='data:image/jpeg;base64,<?php echo $result2["image"]; ?>' alt='<?php echo $result2["item"]; ?>' style='max-width: 100px; max-height: 100px;'>
    <!-- <?php
    // Display the current image if it exists
   
        // $imagePath = '../images' . $result2['image'];
        // echo '<img src="' . $imagePath . '" alt="Current Image" style="max-width: 200px; max-height: 200px;">';
  
    ?> -->
</div>

<div class="form-group">
    <label for="exampleInputEmail1">New Image</label>
    <input type="file" title="image" name="img" required>
    <small class="form-text text-muted">Upload a new image if needed.</small>
</div>

                                                                            <button type="submit" class="btn btn-default">Submit</button> 
                                                                        </form> 
                                                                </div>

                                                        </div>
                                                            <!--/forms-inner-->
                                                                  
                                                                <!--//forms-inner-->
                                                
                                            </div> 



                
                
                 
            </div>
            

    </div>
        <!-- //tables -->

        <!-- /social_media-->
      
    <!-- //social_media-->
</div>
<!-- //inner_content_w3_agile_info-->
</div>
<!-- //inner_content-->



<?php
require_once('footer.php');
?>
				