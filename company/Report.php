<?php
//require_once('../ConnectionClass.php');
require_once('header.php');

$type=$_REQUEST['type'];


?>

<!-- /inner_content-->
    <div class="inner_content" style="background-image: url(images/home1.png);">
        <!-- /inner_content_w3_agile_info-->

     <!-- breadcrumbs -->
      <div class="w3l_agileits_breadcrumbs">
       <div class="w3l_agileits_breadcrumbs_inner">
        <ul>
         <li><a href="home.php">Home</a><span>«</span></li>
         
         <li>Reports</li>
        </ul>
       </div>
      </div>
     <!-- //breadcrumbs -->

     <div class="inner_content_w3_agile_info two_in" style="margin-top: 0em;">
     
       <?php
        require_once('report_header.php');
       ?>




       <?php
       if($type=='new')
       {
        require_once('report_new.php');
       }
       elseif($type=='progressed')
       {
        require_once('report_progressed.php');
       }
       elseif($type=='collected')
       {
        require_once('report_collected.php');
       }

       
       //elseif($type=='expired')
       //{
       // require_once('report_expired.php');
      // }
       ?>

 
      
        </div>
     <!-- //inner_content_w3_agile_info-->
    </div>
  <!-- //inner_content-->
  <?php 

  require_once('footer.php');
  ?>