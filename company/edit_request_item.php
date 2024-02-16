<?php
require_once('../ConnectionClass.php');
require_once('header.php');
$obj = new connectionclass();
$id = $_GET['id'];
$qry1 = "select * from request_items";
$result = $obj->GetTable($qry1);

$qry2 = "select * from request_items inner join ewaste_category on request_items.e_cat_id=ewaste_category.catid where req_item_id ='$id'";
$result2 = $obj->GetSingleRow($qry2);
$qry3 = "select * from ewaste_category";
$result1 = $obj->GetTable($qry3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Selling Request</title>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        function validateForm() {
            var textAreaInput = document.getElementById('textAreaInput').value;
            var pattern = /^[a-zA-Z\s]*$/;

            if (pattern.test(textAreaInput)) {
                document.getElementById('validationMessage').innerHTML = '';
                return true; // Allow form submission
            } else {
                document.getElementById('validationMessage').innerHTML = 'Invalid characters detected. Please enter only alphabets and white spaces.';
                return false; // Prevent form submission
            }
        }

        function validateTextArea() {
            var textAreaInput = document.getElementById('textAreaInput').value;
            var pattern = /^[a-zA-Z\s]*$/;
            var submitButton = document.getElementById('submitButton');

            if (pattern.test(textAreaInput)) {
                document.getElementById('validationMessage').innerHTML = '';
                submitButton.removeAttribute('disabled');
            } else {
                document.getElementById('validationMessage').innerHTML = 'Invalid characters detected. Please enter only alphabets and white spaces.';
                submitButton.setAttribute('disabled', 'disabled');
            }
        }

        function cancel() {
            window.history.back();
        }
    </script>
</head>

<body>
    <div class="inner_content" style="background-image: url(images/home1.png);">
        <div class="w3l_agileits_breadcrumbs">
            <div class="w3l_agileits_breadcrumbs_inner"></div>
            <ul>
                <li><a href="index.php">Home</a><span>«</span></li>
                <li>Selling</li>
            </ul>
        </div>
        <div class="inner_content_w3_agile_info two_in">
            <div class="forms-main_agileits">
                <div class="graph-form agile_info_shadow">
                    <h3 class="w3_inner_tittle two">New Selling Request </h3>
                    <div class="form-body">
                        <form method="post" action="codes/edit_request_item_exe.php" onsubmit="return validateForm();">
                            <label for="exampleInputPassword1">Item Title</label>
                            <input type="text" pattern="^[a-zA-Z]+$" class="form-control" id="exampleInputPassword1" value="<?php echo $result2['item_title'];?>"  readonly="" name="item_name">
                            <label for="exampleInputEmail1">Category</label>
                            <select class="form-control"  readonly="" required="" style="height: 46px;" name="catid" id="exampleInputEmail1">
                                <option value="<?php echo $result2['e_cat_id'];?>"><?php echo $result2['catname'];?></option>
                                <?php foreach ($result1 as $r) {
                                    if ($r['catid'] == $result2['e_cat_id']) {
                                        continue;
                                    }
                                ?>
                                    <option value="<?php echo $r['catid'] ?>"><?php echo $r['catname'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div>
                                <label for="exampleInputPassword1">Maximum Amount</label>
                                <input type="text" name="amount" readonly="" id="amount" class="form-control" readonly="">
                            </div>
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control" required="" name="dis" id="textAreaInput" oninput="validateTextArea()"><?php echo $result2['description'];?></textarea>
                            <div id="validationMessage" style="color: red;"></div>
                            <label for="exampleInputPassword1">Quantity</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" placeholder="" required="" name="qty" value="<?php echo $result2['qty'];?>">
                            <br>
                            <input type="hidden" name="r_id" value="<?php echo $result2['req_item_id']?>">
                            <input type="hidden" name="req_id" value="<?php echo $result2['req_id'];?>">
                            <input type="submit" value="SUBMIT" class="btn btn-success" id="submitButton" disabled>
                            <input type="button" value="cancel" class="btn btn-danger" onclick="cancel()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
require_once('footer.php');
?>
