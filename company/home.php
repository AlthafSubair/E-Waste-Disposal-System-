<?php
require_once('header.php');
require_once('../ConnectionClass.php');
$obj = new connectionclass();
$email = $_SESSION['email'];
$qry = "select * from customers where email='$email'";
$res = $obj->GetSingleRow($qry);
?>

<head>
    <link rel="stylesheet" href="css/index.css" type="text/css">
</head>

<body>

    <div class="slideshow-container">
        <div class="mySlides">
            <img src="images/s1.jpg" class="img">
        </div>

        <div class="mySlides">
            <img src="images/h1.jpg" class="img">
        </div>
    </div>

    <?php
    // Fetch category names from the database
    $sqlCategories = "SELECT DISTINCT catname FROM ewaste_category";
    $resultCategories = $obj->GetTable($sqlCategories);

    // Loop through each category
    foreach ($resultCategories as $categoryRow) {
        $category = $categoryRow['catname'];
        $sql = "SELECT * FROM ewaste_category WHERE catname='$category'";
        $result = $obj->GetTable($sql);
    ?>

        <br>
        <div class="b-head">
                    <h3 class="cat-heading" >E-waste <?php echo $category; ?> Zone</h3>  
                    </div>
        <div class="item-slider-container">
            <table class="item-slider-table">
                <tr>
                    <?php
                    $count = 0;
                    foreach ($result as $row) :
                        if ($count < 10) { // Continue the loop until $row is less than 10
                    ?>
                            <td>
                                <div class="pic-container">
                                    <img class="pic" src="data:image/jpeg;base64,<?= $row['image']; ?>" alt="<?= $row['item']; ?>">
                                    <br>
                                    <a style=" color: #b72525;" href="sellingrequest.php?id=<?php echo $row['catid']; ?>"><h4 style="margin-top: 20px;"><?= $row['item']; ?></h4></a><br>
                                    <h6 style="margin-top: 4px;">Rs<?= $row['price']; ?></h6>
                                </div>
                                </td>
                        <?php
                        } else { // Add another box with custom code after 10 iterations
                        ?>
                            <td>
                                <div style class="custom-box">
                                    <!-- Your custom code here -->
                                    <a href="items.php?category=<?= urlencode($row['catname']); ?>">
                                    <h3>view All</h3>
        
                                </div>
                            </td>
                    <?php
                            break; // Exit the loop after adding the custom box
                        }
                        $count++;
                    endforeach; ?>
                </tr>
            </table>
        </div>

    <?php
    }
    ?>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000); // Change slide every 5 seconds
        }
    </script>
    <style>
          .b-head{
        width: 100%;
  height: 53px;
  background-color: black;
  color: white;
       }
       .cat-heading{
        font-weight: bold;
  margin-left: 30px;
  padding-bottom: 86px;
  margin-top: 20px;
  padding-top: 12px;
       }
    </style>

</body>

</html>

<?php
require_once('footer.php');
?>
