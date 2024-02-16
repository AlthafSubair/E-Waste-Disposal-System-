<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj = new connectionclass();

$id = $_GET['id'];

$qry2 = "select * from request_items inner join ewaste_category on request_items.e_cat_id=ewaste_category.catid where req_item_id ='$id'";
$result = $obj->GetSingleRow($qry2);


?>
<style>
  .s_pic{
    height: 150px;
    width: 150px;
    margin-left: 200px;
    margin-top: 40px;
  }
  .s_main{
    display: flex;
  }
  .note,.s_img{
width:600px;
height: 200px;

  }
  .note{
    color: green;
    width: 800px;
    padding-left:10px;
    padding-top: 130px;
  }
</style>
<div class="inner_content" style="background-image: url(images/home1.png);">
        <div class="w3l_agileits_breadcrumbs">
            <div class="w3l_agileits_breadcrumbs_inner"></div>
            <ul>
                <li><a href="home.php">Home</a><span>«</span></li>
                <li>Selling Request edit</li>
            </ul>
        </div>
        <div class="forms-main_agileits">
      <div class="graph-form agile_info_shadow">
        <h3 class="w3_inner_tittle two"> <?= $result['item']; ?>(<?= $result['catname']; ?>)</h3>
<div class="s_main">
       <div class="s_img">
       <td> <img class="s_pic" src="data:image/jpeg;base64,<?= $result['image']; ?>" alt="<?= $result['item']; ?>" > </td>
       </div>
       <div class="note">
       <p>*Note:The amount shown is subject to change based on condition of the item.<br>please consider the current state of the item when assessing the the displayed amount<p>
       </div>
  </div>
  <td> <h3 style="padding-left:594px;padding-top:-11px;">Maxmium Amount :<?= $result['price']; ?></h3></td>
         </table>
        <div class="form-body">

        <form method="post" action="codes/edit_request_item_exe.php" >
           
           <input type="hidden" name="r_id" value=<?= $result['req_item_id']; ?>>
           <input type="hidden" name="req_id" value=<?= $result['req_id']; ?>>
          
              <label for="exampleInputPassword1">Description</label>
              <textarea class="form-control" required="" name="dis" pattern="[A-Za-z ]+"><?php echo $result['description'];?></textarea>
              <label for="exampleInputPassword1">Quantity</label>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="" required="" value="<?php echo $result['qty'];?>" name="qty">
              <br>
              <input type="submit" name="" value="SUBMIT" class="btn btn-success"onclick="showDisposalNotification()">
              <input type="button" value="cancel" class="btn btn-danger" onclick="cancelto('cart.php')">
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
  function cancelto(url) {
    window.location.href = url;
  }
  function showDisposalNotification() {
    alert("The selected item has been marked for disposal.");
  }
</script>