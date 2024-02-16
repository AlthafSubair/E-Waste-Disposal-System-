
<?php
require_once('header.php');
require_once('../ConnectionClass.php');
$obj=new connectionclass();
echo $email=$_SESSION['email'];
$qry="select * from customers where email='$email'";
$res=$obj->GetSingleRow($qry);
?>
<!-- /inner_content-->
				<div class="inner_content"  style="background-image: url(images/inner.png);">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs --
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main-page.html">Home</a><span>«</span></li>
									<li>Customer <span>«</span></li>
									<li>Dashboard</li>
								</ul>
							</div>
						</div>
					<-- //breadcrumbs -->
<h1>Welcome <?php echo $res['company_name']; ?></h1>
					
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->




<?php
require_once('footer.php');
?>