<?php
require_once('header.php');
require_once('../ConnectionClass.php');
$obj = new connectionclass();
$email = $_SESSION['email'];
$qry = "select * from customers where email='$email'";
$res = $obj->GetSingleRow($qry);

// Check if a search query is provided
$searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

// Fetch category names from the database
$sqlCategories = "SELECT DISTINCT catname FROM ewaste_category";
$resultCategories = $obj->GetTable($sqlCategories);

// Check if a category filter is provided
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';
?>

<head>
    <link rel="stylesheet" href="css/index.css" type="text/css">
</head>

<body>
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
    <div style="margin-top:20px">
        <!-- Search Bar -->
        <div class="search-bar">
            <form action="" method="get">
                <input type="text" class="search" name="search" placeholder="Search by title" value="<?= htmlspecialchars($searchQuery); ?>">
                
                <!-- Category Filter -->
                <select name="category" class="filter">
                    <option value="__all__" >All Categories</option>
                    <?php foreach ($resultCategories as $categoryRow) : ?>
                        <option value="<?= $categoryRow['catname']; ?>" <?= ($categoryRow['catname'] == $categoryFilter) ? 'selected' : ''; ?>>
                            <?= $categoryRow['catname']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>

        <?php
        // Loop through each category
        foreach ($resultCategories as $categoryRow) {
            $category = $categoryRow['catname'];
            $sql = "SELECT * FROM ewaste_category WHERE catname='$category'";
            $result = $obj->GetTable($sql);

            // Check if the category filter is applied or there are items for the current category
            $shouldDisplayCategory = $categoryFilter == '__all__' || $category == $categoryFilter || count($result) > 0;

            if ($shouldDisplayCategory) :
                
        ?>
        
                <br><?php
                if($category==$categoryFilter){
                ?>
                <div class="b-head">
                <h3 class="cat-heading" style="padding-top: 11px;">E-waste <?php echo $category; ?> Zone</h3>
                </div>
<?php
                }
                if($categoryFilter=='__all__'){
                    ?>
                    <div class="b-head">
                    <h3 class="cat-heading" >E-waste <?php echo $category; ?> Zone</h3>  
                    </div>
                <?php
                }?>  
                <div class="item-list-container" style=" padding-top: 23px;">
                    <?php
                    foreach ($result as $row) :

                        
                        // Check if the item title contains the search query and matches the category filter
                        if ((empty($searchQuery) || stripos($row['item'], $searchQuery) !== false) &&
                            ($categoryFilter == '__all__' || $categoryRow['catname'] == $categoryFilter)) :
                    ?>
                    <div class="ver">
                            <div class="pic-container-s">
                                <img class="pic-s" src="data:image/jpeg;base64,<?= $row['image']; ?>" alt="<?= $row['item']; ?>">
                                
                            </div>
                            <a style="color: #b72525;" href="sellingrequest.php?id=<?= $row['catid']; ?>">
                                    <h1 style="margin-top: -196px;color: black;margin-right: 487px; text-align:match-parent;"><?= $row['item']; ?>(<?= $row['catname']; ?>)</h1><br>
                                    <h3 style="margin-top: 4px;color: black;margin-right: 507px; text-align:match-parent;">Maximunm Amount:<?= $row['price']; ?></h3><br>
                                    <div class="note">
       <p style="margin-left: -223px;color:green;">*Note:The amount shown is subject to change based on condition of the item.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;please consider the current state of the item when assessing the the displayed amount<p>
       </div>
                            </div>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </div>
        <?php
            endif;
        }
        ?>
    </div>

</body>

</html>

<?php
require_once('footer.php');
?>

<style>

body{
        background-color:#eee;
        font-family: "Poppins", sans-serif;
        font-weight: 300;
       }

       .height{
        height: 100vh;
       }
       

       .search{
       position: relative;
       box-shadow: 0 0 40px rgba(51, 51, 51, .1);width: 60%;
       height: 35px;
      
       
         
       }

       .search input{

        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;


       }
       .filter{
        width: 10%;
        height: 35px;
        color: white;
        background-color: black;
       }
       .cat-heading{
        font-weight: bold;
  margin-left: 30px;
  padding-bottom: 86px;
  margin-top: 20px;
  padding-top: 12px;
       }
       .b-head{
        width: 100%;
  height: 53px;
  background-color: black;
  color: white;
       }
       </style>
       