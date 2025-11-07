<?php include('./home page-partial/menu.php'); ?>




<?php

            //  checking if id passed or not
            if(isset($_GET['category_id'])){

                $category_id    =   $_GET['category_id'];

                $sql= "SELECT title FROM tbl_category WHERE id =$category_id ";

            
               //  execution of query
                $res = mysqli_query($conn , $sql);
              // counting the rows 
                $row = mysqli_fetch_assoc($res);

                $category_title = $row['title'];

            }
            else{

            //  checking if id passed or not

              header('location:'.SITEURL);     
            }

    ?>

   <div class="offers-container search-by-category">
            <h2 id="card-container-homepage-h2">--- You Selected "<?php echo$category_title ; ?>"---</h2>
        <br /><br />
        <br />
        <div class="offers-container-inner ">
          <div class="card-container card-container-no-ani flex-wrap ">
            <!-- card no 1 to 3 -->
              <!--  displaying all foods in card container -->

            <?php
            $sql2 = "SELECT * FROM tbl_food WHERE category_id = $category_id";
            $res2 = mysqli_query($conn, $sql2);

            if($res2 === false){
                echo "<div class='error'>Query failed. Please try again later.</div>";
            } else {
                $count2 = mysqli_num_rows($res2);

                if($count2 > 0) {
                    while($row2 = mysqli_fetch_assoc($res2)) {
                        
                        $id = $row2['id'];
                        $title = $row2['title'];
                        $image_name = $row2['image_name'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        ?>

                        <div class="card-no-1 search-by-cat-card">
                            <div class="img-box">
                                <?php
                                if($image_name == ""){
                                    echo "<div class='error'>No image available.</div>"; 
                                } else {
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="<?php echo $title; ?>" />
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="flex-box-start">
                                <h3><?php echo $title; ?></h3>
                                <p>Price <?php echo $price; ?></p>
                            </div>
                            <p><?php echo $description; ?></p>
                            <a href="<?php echo SITEURL; ?>order.php?id=<?php echo $id; ?>" class="remaining">Order Now</a>
                        </div>

            <?php
        }
    } else {
        // ✅ This will now correctly show when no food found in this category
        echo "<div class='error'>No food available in this category.</div>";
    }
}
?>

          </div>
        </div>
      </div>




<?php include('./home page-partial/footer.php'); ?>