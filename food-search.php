<?php include('./home page-partial/menu.php'); ?>

        <?php 

            $search = mysqli_real_escape_string($conn, $_POST['search']);



        ?>

        <div class="hero-container search-food-hero">
        <div class="inner-hero-section flex-box-center">
          <div class="left-hero-section left-search-food-hero">

            <div class="left-hero-bottom search-food-left-bottom ">
              <form action="<?php echo SITEURL ;?>food-search.php" method="POST">
                <input
                  type="search"
                  name="search"
                  class="search-food-input"
                  method="POST"
                  placeholder="'<?php echo$search?>'"
                />
                <button type="submit" class="search-food-btn">

                  <svg width="34px" height="34px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#FFB30E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

                </button>
              </form>
            </div>
          </div>
        </div>
      </div>



        <div class="offers-container search-by-category">
            <h2 id="card-container-homepage-h2" style=" margin-top: 0px;">--- You Searched " <?php echo$search; ?> "---</h2>
        <br /><br />
        <br />
        <div class="offers-container-inner ">
          <div class="card-container card-container-no-ani flex-wrap ">
              <!--  displaying all searched foods in card container -->

          <?php

                    // getting search keyword 
                
                

              //  creating sql query to getting all the data from db
              $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%' AND active='Yes'";
 
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
                            echo "<div class='error' > No image Availabe. '$search'</div>"; 
                          
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
                    <p>Price <?php echo$price ;?></p>
                  </div>
                  <p> <?php echo $description; ?></p>

                  
                  <a href="<?php echo SITEURL; ?>order.php?id=<?php echo $id; ?>" alt="" class="remaining">Order Now</a>
                </div>
                <?php

                } 
               
              }
              else{
                //  data not available
                
                echo "<div class='error'> No Food Available.</div>"; 
              }

             ?>

          </div>
        </div>
      </div>










<?php include('./home page-partial/footer.php'); ?>
