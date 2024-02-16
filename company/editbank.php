<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$email=$_SESSION['email'];
$qry="select * from customers where email='$email'";
$id=$_GET['id'];
$qry="SELECT * FROM Payment WHERE cust_id='$id'";
$result=$obj->GetSingleRow($qry);
$id=$result['cust_id'];
?>


<html>
<head>

   




</head>
<!-- /inner_content-->
        <div class="inner_content" style="background-image: url(images/home1.png);">
            <!-- /inner_content_w3_agile_info-->

          <!-- breadcrumbs -->
            <div class="w3l_agileits_breadcrumbs">
              <div class="w3l_agileits_breadcrumbs_inner">
                
              </div>
              <ul>
                  <li><a href="home.php">Home</a><span>«</span></li>
                  
                  <li>Bank details <span>«</span></li>   
                  <li>Edit</li>       
             
                </ul>
            </div>



            <div class="inner_content_w3_agile_info two_in">
          

              <!--/forms-->
              <div class="forms-main_agileits">
                <div class="graph-form agile_info_shadow">
                  <h3 class="w3_inner_tittle two">Bank details </h3>
                  <div class="form-body">
                    <form method="post" action="codes/bank_edit_exe.php"> 
                   
                      <label for="exampleInputPassword1">Accuont Holder Name</label> 
                      <input type="text" name="acc_name" pattern="[a-zA-Z ]+"  class="form-control" value="<?php echo $result['acc_name'] ?>" required="" >
                    </div>
                    <label for="exampleInputPassword1">Account Number</label> 
                      <input type="text" name="acc_no"  pattern="[0-9]+" class="form-control" value="<?php echo $result['acc_no'] ?>" required="" >
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    
                    <label for="exampleInputPassword1">Ifsc code</label> 
                      <input type="text" name="ifsc" pattern="[0-9]+" class="form-control"value="<?php echo $result['ifsc'] ?>" required="" >
                    </div>
                    </div>
                       <br>
                       <input type="submit" name="" value="SUBMIT" class="btn btn-success">
                       <input type="button" value="cancel"class="btn btn-danger" onclick="cancelto('index.php')">
                    </form> 
                  </div>
                </div>                                
              </div> 
            </div>
          </div>

          </html>
                          
            </div>


</div>


<?php

require_once('footer.php');
?>
<script>
	function cancelto(url){
		window.location.href = url;
	}
</script>