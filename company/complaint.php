<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$email=$_SESSION['email'];

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
                  
                  <li>Complaint</li>
                  
                </ul>
            </div>



            <div class="inner_content_w3_agile_info two_in">
          

              <!--/forms-->
              <div class="forms-main_agileits">
                <div class="graph-form agile_info_shadow">
                  <h3 class="w3_inner_tittle two">Complaint </h3>
                  <div class="form-body">
                    <form method="post" action="codes/complaint_exe.php"> 
                      <label for="exampleInputPassword1">Complaint Type</label> 
                       
                    <select class="form-control" required="" style="height: 46px;" name="type">
                    <option >--select--</option>
                    <option value="Late or missed pickup">Late or missed pickup</option>
                    <option value="Payment issue">Payment issue</option>
                    <option value="Coustomer service issues">Coustomer service issues</option>
                    <option value="Other issues">Other issues</option>
                    </select>
                   
                    <div>
                      <label for="exampleInputPassword1">Complaint</label> 
                      <input type="text" name="com"   class="form-control" required="" >
                    </div>
                    <input type="hidden" name="email"value="<?php echo $email ?>">
                       <label for="exampleInputPassword1">Description</label> 
                       <textarea class="form-control" required="" name="dis"></textarea> 
                
                       <br>
                       <input type="submit" name="" value="SUBMIT" class="btn btn-success">
                       <input type="button" value="cancel"class="btn btn-danger" onclick="cancelto('home.php')">
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