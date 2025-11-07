<?php include('./home page-partial/menu.php'); ?>



   <div class="offers-container search-by-category">
            <h2 id="card-container-homepage-h2">--- Food Menu ---</h2>
        <br /><br />
        <br />
        <div class="offers-container-inner ">
          <div class="card-container card-container-no-ani flex-wrap ">
            <!-- card no 1 to 3 -->
              <!--  displaying all foods in card container -->

          <?php
              //  creating sql query to getting all the data from db
              $sql = "SELECT * FROM tbl_food WHERE active='Yes' LIMIT 20";
             
              //  execution of query
              $res = mysqli_query($conn , $sql);
              // counting the rows 
              $count = mysqli_num_rows($res);

              if($count>0){
                  while($row=mysqli_fetch_assoc($res)){
                    //  data available
                   // getting the values of id, imgae name and title

                $id           =   $row['id'];
                $title        =   $row['title'];
                $image_name   =   $row['image_name'];
                $price        =   $row['price'];
                $description  =   $row['description'];

                ?>
                    <div class="card-no-1 search-by-cat-card">
                    <div class="img-box">
                    <?php 
                        if($image_name==""){
                          //  image not availabe
                            echo "<div class='error'> No image Availabe.</div>"; 
                          
                        }
                        else{
                          //  image availabe
                          ?>
                               <img src="<?php echo SITEURL ;?>images/food/<?php echo$image_name;?>" alt="" />


                          <?php

                        }

                    ?>
                  </div>
                  <div class="flex-box-start">
                    <h3><?php echo $title; ?></h3>
                    <p>Price &#x20B9;<?php echo$price ;?></p>
                  </div>
                  <p> <?php echo $description; ?></p>

                  
                  <a href="<?php echo SITEURL; ?>order.php?id=<?php echo $id; ?>" alt="" class="remaining">Order Now</a>
                </div>
                <?php

                } 
               
              }
              else{
                //  data not available
                
                echo "<div class='error'> Food Not Added </div>"; 
              }

             ?>

          </div>
        </div>
      </div>

<?php include('./home page-partial/footer.php'); ?>