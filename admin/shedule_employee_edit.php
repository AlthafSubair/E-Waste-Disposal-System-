<?php
require_once('header.php');
require_once('../connectionclass.php');
$obj=new Connectionclass();

$qry1="select * from employee";
$result=$obj->GetTable($qry1);
$id=$_GET['id'];
$qry2="select * from schedule_employee inner join employee on schedule_employee.emp_id=employee.emp_id  where sch_emp_id ='$id'";
$result2=$obj->GetSingleRow($qry2);
?>
		</head>
<!-- /inner_content-->
        <div class="inner_content" style="background-image: url(images/home1.png);">
            <!-- /inner_content_w3_agile_info-->

          <!-- breadcrumbs -->
            <div class="w3l_agileits_breadcrumbs">
              <div class="w3l_agileits_breadcrumbs_inner">
                
              </div>
              <ul>
                  <li><a href="index.php">Home</a><span>«</span></li>
                  
                  <li>Scheduled Employee Details <span>«</span></li>
                  <li>Edit</li>
                  
                </ul>
            </div>



            <div class="inner_content_w3_agile_info two_in">
          

              <!--/forms-->
              <div class="forms-main_agileits">
                <div class="graph-form agile_info_shadow">
                  <h3 class="w3_inner_tittle two"> Scheduled Employee edit </h3>
                  <div class="form-body">
                    <form method="post" action="codes/edit_shedule_employee_exe.php"> 
                      

                      <label for="exampleInputEmail1">Employee Name</label> 
                    <select class="form-control" required="" style="height: 46px;" name="emp_id" id="cat_name">

                    <option value="<?php echo $result2['emp_id'];?>"><?php echo $result2['emp_name'];?></option>
                      <?php
                      foreach ($result as $r) 
                      {
                        if($r['emp_id']==$result2['emp_id']){
                          continue;
                      }
                      ?>
                      <option value="<?php echo $r['emp_id'] ?>"><?php echo $r['emp_name'] ?></option>

                      <?php

                    }
                      ?>

             
                      
                    </select>
                   
                    <label for="exampleInputPassword1">collected date</label> 
                       <input type="date" min="<?= date('Y-m-d') ?>" class="form-control" id="exampleInputPassword1" placeholder="" required=""  name="coll_date"  value="<?php echo $result2['collected_date'];?>">
                    </div>
                       <input type="hidden" name="id" value="<?php echo $id ?>">
                       <input type="submit" name="" value="SUBMIT" class="btn btn-success">
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