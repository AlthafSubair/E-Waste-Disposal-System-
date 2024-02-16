<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj = new connectionclass();
$id=$_REQUEST['id'];
$qry1 = "select * from ewaste_category where catid='$id'";
$result = $obj->GetSingleRow($qry1);
//var_dump($result);
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

<html>

<head>
  <script src="js/jquery-2.1.4.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      //alert('hello');
      $('#cat_name').change(function() {


        var catid = $(this).val();

        //alert(catid);



        $.ajax({
          url: 'connection_amt.php',
          method: 'get',
          data: {
            catid: catid
          },
          dataType: 'html',
          Type: 'get',
          success: function(responds) {


            $("#amount").val(responds);

          },
          error: function(x, y, z) {
            alert(y);
          }


        });



      });

    });
  </script>



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

      <li>Selling</li>

    </ul>
  </div>



  <div class="inner_content_w3_agile_info two_in">


    <!--/forms-->
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




          <form method="post" action="codes/sellingrequest_exe.php" >
           
         <input type="hidden" name="catname" value=<?= $result['catname']; ?>>
         <input type="hidden" name="item_name" value=<?= $result['item']; ?>>
         <input type="hidden" name="price" value=<?= $result['price']; ?>>
         <input type="hidden" name="catid" value=<?= $result['catid']; ?>>
            <label for="exampleInputPassword1">Description</label>
            <textarea class="form-control" required="" name="dis" pattern="[A-Za-z ]+"></textarea>
            <label for="exampleInputPassword1">Quantity</label>
            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="qty">
            <br>
            <input type="submit" name="" value="SUBMIT" class="btn btn-success" onclick="showDisposalNotification('<?= $result['catname']; ?>')">
            <input type="button" value="cancel" class="btn btn-danger" onclick="cancelto('index.php')">
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
  function showDisposalNotification(categoryName) {
    alert("The selected item has been marked for " + categoryName);
  }
</script>