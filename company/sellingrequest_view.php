<?php
require_once('header.php');
require_once('../ConnectionClass.php');

$obj = new connectionclass();
$id = $_GET['id'];
$email=$_SESSION['email'];

 $qry1 = "select * from request_items inner join ewaste_category on request_items.e_cat_id=ewaste_category.catid where req_id='$id'";
$result = $obj->GetTable($qry1);
//var_dump($result);

?>


<!-- /inner_content-->
<div class="inner_content" style="background-image: url(images/home1.png);">
	<!-- /inner_content_w3_agile_info-->

	<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="home.php">Home</a><span>«</span></li>

				<li>Selling Request</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->

	<div class="inner_content_w3_agile_info two_in">
		<h2 class="w3_inner_tittle">Requset items - <?php


													?></h2>
		<!-- tables -->

		<div class="agile-tables">
			<div class="w3l-table-info agile_info_shadow">

				<div>
					<a href="home.php?id=<?php echo $id;?>" class="btn btn-success"> ADD </a>
				</div>
				<?php

				if (count($result) > 0) {
				?>
					<table id="table">
						<thead>
							<tr>
								<th>#</th>

								<th>item title</th>
								<th>category</th>
								<th>discription</th>
								<th>quantity</th>
								<th>amount</th>

								<th>action</th>


							</tr>
						</thead>
						<tbody>

							<?php
							$i = 0;


							foreach ($result as $r) {



								// var_dump($result);
								$i++;
							?>
								<tr>
									<td><?php echo $i; ?></td>

									<td><?php echo $r["item_title"]; ?></td>
									<td><?php echo $r["catname"]; ?></td>
									<td><?php echo $r["description"]; ?></td>
									<td><?php echo $r["qty"]; ?></td>
									<td><?php echo $r["amount"]; ?></td>
									<td><a href="editewaste.php?id=<?php echo $r['req_item_id']; ?>" class="btn btn-info btn-block btn-xs"> EDIT </a>
										<a href="codes/request_item_delete_exe.php?id=<?php echo $r['req_item_id']; ?>" class="btn btn-danger btn-block btn-xs" onClick="return confirm('Are You Sure want to delete?');"> DELETE </a>
									</td>








									</td>


								<?php
							}

								?>
						</tbody>
					</table>

					<br>

					<div class="mt-3">
						<a href="codes/sellingrequest_snd_exe.php?id=<?php echo $id; ?>" class="btn btn-warning"> SEND </a>
						<a href="codes/cancel_sellingrequest_exe.php?id=<?php echo $id; ?>" class="btn btn-danger" onClick="return confirm('Are You Sure want to delete?');"> Cancel</a>
					</div>

			</div>
		<?php
				} else {
		?>

			<br>


			<div class="row">

				<table>
					<div class="alert alert-success mt-3">
						<strong>No Items Found</strong>
					</div>

			</div> <?php

				}
					?>

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