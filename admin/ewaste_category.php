<?php
require_once('../connectionclass.php');
require_once('header.php');
$obj=new connectionclass();
$qry1="select * from ewaste_category";
$result=$obj->GetTable($qry1);
//var_dump($result);
?>

		<!-- /inner_content-->
				<div class="inner_content" style="background-image: url(images/home1.png);">

				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									<li>Ewaste category</li>
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
																		<form action="codes/ewaste_category_exe.php" method="post" enctype="multipart/form-data"> 
																		<div class="form-group" >
																				<label for="exampleInputEmail1"> Ewaste Title Name </label> 
																				<input type="text" pattern="^[A-Z][a-zA-Z ]*$" title="Characters only" class="form-control" id="exampleInputEmail1" placeholder="Enter ewaste category" name="item" required> </div> 
																				</div> 
																			<div class="form-group"> 
																				<label for="exampleInputEmail1"> Ewaste Category</label> 
																				<input type="text" pattern="^[A-Z][a-zA-Z ]*$" title="Characters only" class="form-control" id="exampleInputEmail1" placeholder="Enter ewaste category" name="catname" required> </div> 
                                                                                <div class="form-group"> 
																				<label for="exampleInputEmail1">Price</label> 
																				<input type="text" pattern="^\$?\d+(\.\d{2})?$" title="Enter valid price" class="form-control" id="exampleInputEmail1" placeholder="Enter ewsate price" name="price" required> </div> 
																				<div class="form-group" >
																				<div class="form-group"> 
																				<label for="exampleInputEmail1">image</label> 
																				<input type="file" title="image  "  placeholder="upload image" name="img" required> </div> 
																				  
																				<button type="submit" class="btn btn-default">Submit</button> 
																			</form> 
																	</div>

															</div>
																<!--/forms-inner-->
													  				
																	<!--//forms-inner-->
																</div> 
				

					
																<div class="agile-tables">
    <div class="w3l-table-info agile_info_shadow">
        <table id="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Price</th>
                    <th>Item</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Use foreach to iterate through the result
                $i = 0;
                foreach ($result as $row) {
                    $i++;
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["catname"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["item"]; ?></td>
                        <td><img src='data:image/jpeg;base64,<?php echo $row["image"]; ?>' alt='<?php echo $row["item"]; ?>' style='max-width: 100px; max-height: 100px;'></td>
                        <td><a href="edit_ewsate_category.php?catid=<?php echo $row['catid']; ?>"> EDIT </a></td>
                        <td><a href="codes/ewsate_category_delete_exe.php?catid=<?php echo $row['catid']; ?>" onClick="return confirm('Are You Sure want to delete?');"> DELETE </a></td>
                    </tr>
                <?php
                }
                if (empty($result)) {
                    echo "<tr><td colspan='7'>No records found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>



<?php
require_once('footer.php');
?>