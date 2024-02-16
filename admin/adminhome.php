
<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj=new connectionclass();
$qry1="select * from Contact";
$result=$obj->GetTable($qry1);


?>
<!-- /inner_content-->
				<div class="inner_content"  style="background-image: url(images/hom1.png);">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs-- 
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="adminhome.php">Home</a><span>«</span></li>
									
									<li><?php echo $email; ?></li>
								</ul>
							</div>
						</div>
					 !--breadcrumbs -->
<h1 align="center">Welcome Admin</h1>

 </div>
					
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->




<?php
require_once('footer.php');
?>