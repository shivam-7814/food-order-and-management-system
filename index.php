<?php include('../food-order/config/constants.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food-Order-System-HomePage-Order-Food</title>
    <link rel="stylesheet" href="<?php echo SITEURL; ?>/css/homepage.css" />


    <link rel="icon" type="image/x-icon" href="<?php echo SITEURL;?>images/homepage/imgs/burger-svg.svg">
  </head>
  <body class="index-class">
    <div class="main-container">
      <!--   nav container starts -->
      <div class="outer-nav">
        <nav class="nav-container flex-box">
          <div class="left-nav flex-box">
            <div  class="bhojanlogo-pc">
              <svg height="54px" width="54px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <circle style="fill:#FEE187;" cx="256" cy="256" r="256"></circle> <circle style="fill:#FEE187;" cx="256" cy="256" r="256"></circle> </g> <g> <path style="fill:#FFB30E;" d="M276.97,511.14c130.212-10.559,232.865-118.551,234.977-250.98L395.609,145.318l-52.336,33.671 l7.482,7.482l-87.126,52.012L88.319,278.919l23.961,49.916l-7.702,6.703L276.97,511.14z"></path> <polygon style="fill:#FFB30E;" points="315.763,135.327 302.545,114.352 294.357,85.333 240.674,89.347 315.763,162.047 "></polygon> </g> <path style="fill:#930000;" d="M322.801,175.84c-2.167,0-4.184-1.37-4.906-3.539L290.63,90.505h-46.697 c-2.857,0-5.172-2.315-5.172-5.172s2.315-5.172,5.172-5.172h50.424c2.226,0,4.203,1.424,4.906,3.537l28.444,85.333 c0.903,2.708-0.56,5.639-3.27,6.54C323.894,175.754,323.343,175.84,322.801,175.84z"></path> <path style="fill:#C92F00;" d="M286.689,341.333h80.843c3.986,0,7.34-2.979,7.811-6.937l21.83-183.377 c0.557-4.68-3.098-8.797-7.811-8.797H264.857c-4.713,0-8.37,4.117-7.811,8.797l21.83,183.377 C279.349,338.354,282.705,341.333,286.689,341.333z"></path> <path style="fill:#930000;" d="M262.465,196.525l16.413,137.871c0.471,3.956,3.827,6.937,7.811,6.937h80.844 c3.986,0,7.34-2.981,7.811-6.937l16.413-137.871H262.465z"></path> <path style="fill:#E09112;" d="M99.556,256c0-47.128,38.205-85.333,85.333-85.333s85.333,38.205,85.333,85.333H99.556z"></path> <path style="fill:#F17228;" d="M184.889,170.667c-0.433,0-0.86,0.026-1.293,0.033V256h86.626 C270.222,208.872,232.017,170.667,184.889,170.667z"></path> <path style="fill:#E09112;" d="M96.97,305.457c0,7.127,0.855,14.053,2.462,20.685c2.232,9.218,10.464,15.725,19.947,15.725h131.019 c9.483,0,17.715-6.508,19.947-15.725c1.607-6.632,2.462-13.559,2.462-20.685H96.97z"></path> <path style="fill:#F17228;" d="M183.596,305.457v36.411h66.801c9.483,0,17.715-6.508,19.947-15.725 c1.607-6.632,2.462-13.559,2.462-20.685L183.596,305.457L183.596,305.457z"></path> <path style="fill:#B54324;" d="M99.556,284.444h170.667c7.854,0,14.222-6.368,14.222-14.222l0,0c0-7.854-6.368-14.222-14.222-14.222 H99.556c-7.854,0-14.222,6.368-14.222,14.222l0,0C85.333,278.076,91.701,284.444,99.556,284.444z"></path> <path style="fill:#C92F00;" d="M270.222,256h-86.626v28.444h86.626c7.854,0,14.222-6.368,14.222-14.222 C284.444,262.368,278.076,256,270.222,256z"></path> <path style="fill:#D35933;" d="M99.556,312.889h170.667c7.854,0,14.222-6.368,14.222-14.222l0,0c0-7.854-6.368-14.222-14.222-14.222 H99.556c-7.854,0-14.222,6.368-14.222,14.222l0,0C85.333,306.521,91.701,312.889,99.556,312.889z"></path> <path style="fill:#B54324;" d="M270.222,284.444h-86.626v28.444h86.626c7.854,0,14.222-6.368,14.222-14.222 S278.076,284.444,270.222,284.444z"></path> </g></svg>
            </div>
           <a href="index.php"><h1>Bhojan</h1></a>
          </div>

          <div class="right-nav flex-box">
            <a href="index.php">Home</a>
            <a href="categories.php">Category</a>
            <a href="foods.php">Foods</a>
            <a href="#subscribe-form" style="transition: all 0.4s ease;" id="`contact-btn">Contact us</a>
          </div>
        </nav>
      </div>
      <!--  hero-section starts here -->
      <div class="hero-container">
        <div class="inner-hero-section flex-box">
          <div class="left-hero-section">
            <h1>Enjoy Our<br />Delicious Meal</h1>
            <br />
            <h2>
              Within a few clicks, find meals that are accessible near you
            </h2>


            <div class="left-hero-bottom">
              <form action="<?php echo SITEURL ;?>food-search.php" method="POST">
                <input
                  type="search"
                  name="search"
                  class="search-food-input"
                  method="POST"
                  placeholder="Seach Foods here"
                />
                <button type="submit" class="search-food-btn">

                  <svg width="34px" height="34px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#FFB30E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

                </button>
              </form>
            </div>
          </div>
          <div class="right-hero-section">
            <img src="<?php echo SITEURL ;?>images/homepage/imgs/hero-header.png" alt="" />
          </div>
        </div>
      </div>
      <!-- our offers starts here -->
      <div class="offers-container">
        <?php 
                    if(isset($_SESSION['ordered-food']))
                    {
                        echo   $_SESSION['ordered-food'];
                        unset(  $_SESSION['ordered-food']);
                    }
                ?>
                
        <h2>--- Popular Items ---</h2>
        <br /><br />
        <br />
        <div class="offers-container-inner">
          <div class="card-container">
            <!-- card no 1 to 3 -->

            <div class="card-no-1">
              <div class="img-box">
                <img src="<?php echo SITEURL ;?>images/homepage/imgs/chinese-food.jpg" alt="" />
                <p class="offer-tag">
                 <span class="offer-tag-p">Hot</span>
                </p>
              </div>

              <h3>Chinese Foods</h3>
              <a href="foods.php" alt="" class="remaining">Order Now</a>
            </div>
            <div class="card-no-1">
              <div class="img-box">
                <img src="<?php echo SITEURL ;?>images/homepage/imgs/indian-food.jpg" alt="" />
                <p class="offer-tag">
                   <span class="offer-tag-p">Hot</span>

                </p>
              </div>

              <h3>Indian Foods</h3>
              <a href="foods.php" alt="" class="remaining">Order Now</a>
            </div>
            <div class="card-no-1">
              <div class="img-box">
                <img src="<?php echo SITEURL ;?>images/homepage/imgs/desserts.jpg" alt="" />
                <p class="offer-tag">
                 <span class="offer-tag-p">Hot</span>
                </p>
              </div>

              <h3>Desserts & Beverages</h3>
              <a href="foods.php" alt="" class="remaining">Order Now</a>

            </div>
          </div>
        </div>
      </div>
      <!--  How it works starts here -->
      <div class="how-it-works-container">
        <br /><br /><br />
        <h1>--- How it Works ---</h1>
        <br /><br /><br /><br />
        <div class="how-it-works">
          <div class="how-it-works-card">
            <svg
              width="124px"
              height="124px"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M18 11C18 14.866 14.866 18 11 18C7.13401 18 4 14.866 4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11Z"
                  fill="#FFB30E"
                ></path>
                <path
                  d="M20 20L18 18"
                  stroke="#FFB30E"
                  stroke-width="2"
                  stroke-linecap="round"
                ></path>
              </g>
            </svg>
            <br />
            <h4>Search Food</h4>
            <br />
            <p>Search and select the food<br />you wants to order.</p>
          </div>
          <div class="how-it-works-card">
            <svg
              fill="#FFB30E"
              version="1.1"
              id="Layer_1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="124px"
              height="124px"
              viewBox="0 0 256 241"
              enable-background="new 0 0 256 241"
              xml:space="preserve"
              stroke="#FFB30E"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M254,188V2H2v186h111v29H75v22h106v-22h-38v-29H254z M19,19h217v151H19L19,19z M75.397,68.237l8.796,68.658h29.376 l8.71-68.658H86.327l-7.173-24.85l-3.928,1.11l6.832,23.654L75.397,68.237z M126.463,108.287c0,0-1.11-9.991,14.176-9.991h24.338 c15.2,0,14.176,9.991,14.176,9.991H126.463z M179.066,126.903c0,0,1.025,9.991-14.176,9.991h-24.252 c-15.286,0-14.176-9.991-14.176-9.991H179.066z M128.769,122.036c-2.476,0-4.526-1.964-4.526-4.526c0-2.476,1.964-4.526,4.526-4.526 h48.334c2.476,0,4.526,1.964,4.526,4.526c0,2.476-2.049,4.526-4.526,4.526H128.769z M182.653,150.387H73.347v-8.283h109.306V150.387 z"
                ></path>
              </g>
            </svg>
            <h4>Choose Order</h4>
            <br />
            <p>Check over hundreds of menus to <br />pick your favorite food</p>
          </div>
          <div class="how-it-works-card">
            <svg
              fill="#FFB30E"
              height="124px"
              width="124px"
              version="1.1"
              id="Capa_1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 481.8 481.8"
              xml:space="preserve"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <g>
                  <g>
                    <g>
                      <path
                        d="M384.759,213.6c-4.7-3.7-46.2-49.4-69.7-70.7c-0.1-0.1-0.1-0.1-0.1-0.2V44.3c0-24.4-19.9-44.3-44.3-44.3h-145.1 c-22.7,0-41.2,18.6-41.2,41.2V272c0,24.4,19.9,44.3,44.3,44.3h42.2h10.7c1.8,0,3.3-1.6,3.1-3.4l-2.3-19.6 c-0.2-1.6-1.5-2.7-3.1-2.7h-3.9h-2.4c-1.7,0-3.1-1.4-3.1-3.1V25.3c0-1.7,1.4-3.1,3.1-3.1h98c9.9,0,18,8.1,18,18v214.2v21.1 c0,6.8-4.7,12.6-11,14.4c-0.1,0-0.1,0-0.2,0c-10.7-5.8-23.3-30.6-25.2-34.5c-0.2-0.3-0.3-0.7-0.3-1c-0.7-6.3-7.8-67.3-40.3-67.3 c-0.9,0-1.8,0-2.7,0.1c0,0-26,2.2-4.5,76.3c0,0.2,0.1,0.3,0.1,0.5l9.5,82.1c0,0.1,0,0.2,0.1,0.4c0.8,3.1,11.6,45,39.5,74.7 c0.5,0.6,0.8,1.3,0.8,2.1v7.1c0,0.2-0.1,0.3-0.3,0.3h-2.5c-6.1,0-11.1,5-11.1,11.1v28.9c0,6.1,5,11.1,11.1,11.1h117.7 c6.1,0,11.1-5,11.1-11.1V442c0-6.1-5-11.1-11.1-11.1c-0.2,0-0.3-0.1-0.3-0.3c3.9-36.2,17.9-160,25.4-169.7c0.2-0.3,0.4-0.6,0.5-1 C396.559,255.4,403.059,227.9,384.759,213.6z M130.659,287.7c0,1.6-1.3,2.8-2.8,2.8c-9.8,0-17.8-8-17.8-17.8V40 c0-9.8,8-17.8,17.8-17.8c1.6,0,2.8,1.3,2.8,2.8V287.7z"
                      ></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
            <h4>Pay advanced</h4>
            <br />
            <p>
              It's quick, safe, and simple.Select <br />several methods of
              payment
            </p>
          </div>
          <div class="how-it-works-card">
            <svg fill="#FFB30E" width="124px" height="124px" viewBox="0 -3.84 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 115.21" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M29.03,100.46l20.79-25.21l9.51,12.13L41,110.69C33.98,119.61,20.99,110.21,29.03,100.46L29.03,100.46z M53.31,43.05 c1.98-6.46,1.07-11.98-6.37-20.18L28.76,1c-2.58-3.03-8.66,1.42-6.12,5.09L37.18,24c2.75,3.34-2.36,7.76-5.2,4.32L16.94,9.8 c-2.8-3.21-8.59,1.03-5.66,4.7c4.24,5.1,10.8,13.43,15.04,18.53c2.94,2.99-1.53,7.42-4.43,3.69L6.96,18.32 c-2.19-2.38-5.77-0.9-6.72,1.88c-1.02,2.97,1.49,5.14,3.2,7.34L20.1,49.06c5.17,5.99,10.95,9.54,17.67,7.53 c1.03-0.31,2.29-0.94,3.64-1.77l44.76,57.78c2.41,3.11,7.06,3.44,10.08,0.93l0.69-0.57c3.4-2.83,3.95-8,1.04-11.34L50.58,47.16 C51.96,45.62,52.97,44.16,53.31,43.05L53.31,43.05z M65.98,55.65l7.37-8.94C63.87,23.21,99-8.11,116.03,6.29 C136.72,23.8,105.97,66,84.36,55.57l-8.73,11.09L65.98,55.65L65.98,55.65z"></path> </g> </g></svg>
            <h4>Enjoy meals</h4>
            <br />
            <p>Food is made and delivered <br />directly to your home.</p>
          </div>
        </div>

        <!--  Daily Discounts---- Live Tracking ---Quick Delivery -->
        <div class="our-features-container">
          <div class="our-features">
            <div class="featured-card">
              <img src="<?php echo SITEURL ;?>images/homepage/imgs/discounts.png" alt="" />
              <h1>Daily <br />Discount</h1>
            </div>
            <div class="border-left"></div>
            <div class="featured-card">
              <img src="<?php echo SITEURL ;?>images/homepage/imgs/live-tracking.png" alt="" />
              <h1>Live <br />Tracking</h1>
            </div>
            <div class="border-left"></div>
            <div class="featured-card">
              <img src="<?php echo SITEURL ;?>images/homepage/imgs/quick-delivery.png" alt="" />
              <h1>Quick <br />Delivery</h1>
            </div>
          </div>
        </div>
      </div>
      <!--  search by category -->
       <div class="offers-container search-by-category">
        <h2>--- Search by Category ---</h2>
        <br /><br />
        <br />
        <div class="offers-container-inner">
          <div class="card-container flex-wrap">
            <!-- card no 1 to 3 -->
             <?php
              //  creating sql query to getting all the data from db
              $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' LIMIT 3";
             
              //  execution of query
              $res = mysqli_query($conn , $sql);
              // counting the rows 
              $count = mysqli_num_rows($res);

              if($count>0){
                while($row=mysqli_fetch_assoc($res))
                {
                   //  data available
                // getting the values of id, imgae name and title

                $id           =   $row['id'];
                $title        =   $row['title'];
                $image_name   =   $row['image_name'];

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
                             <img src="<?php echo SITEURL ;?>images/category/<?php echo$image_name;?>" alt="" />

                          <?php

                        }

                    ?>
                  </div>

                  <h3><?php echo $title; ?></h3>
                  <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>" alt="" class="remaining">Order Now</a>
                </div>
                <?php

                }


               
               
              }
              else{
                //  data not available
                
                echo "<div class='error'> Category Not Added </div>"; 
              }

             ?>

          </div>
        </div>
      </div>
      
      <!-- serach by food -->
      <div class="search-by-food-container flex-box-center">
        <div class="search-by-food">
          <div class="search-h1-btn flex-box-center">
            <h1>--- Food Menu ---</h1>
            <div class="btn-container-view flex-box-center">
              <a href="foods.php">VIEW ALL ></a>
              <div class="btn-container">
                <button type="button" href="" id="btnLeft" class="scroll-btn">
                  <svg
                    height="40px"
                    width="40px"
                    version="1.1"
                    id="_x32_"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 512.00 512.00"
                    xml:space="preserve"
                    fill="#ffb800"
                    stroke="#ffb800"
                    stroke-width="0.00512"
                  >
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke="#CCCCCC"
                      stroke-width="2.048"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                      <style type="text/css">
                        .st0 {
                          fill: #ffb800;
                        }
                      </style>
                      <g>
                        <path
                          class="st0"
                          d="M154.52,265.848l90.964,69.014c2.329,1.766,4.674,2.702,6.78,2.702c2.148,0,4.022-0.974,5.276-2.741 c1.199-1.688,1.807-3.99,1.807-6.844v-26.424c0-6.952,5.656-12.608,12.607-12.608h75.036c8.705,0,15.788-7.085,15.788-15.788 v-34.313c0-8.703-7.083-15.788-15.788-15.788h-75.036c-6.951,0-12.607-5.656-12.607-12.608v-26.425 c0-7.065-3.659-9.584-7.082-9.584c-2.106,0-4.451,0.936-6.78,2.702l-90.964,69.014c-3.416,2.59-5.297,6.087-5.297,9.849 C149.223,259.762,151.103,263.259,154.52,265.848z"
                        ></path>
                        <path
                          class="st0"
                          d="M256,0C114.842,0,0.002,114.84,0.002,256S114.842,512,256,512c141.158,0,255.998-114.84,255.998-256 S397.158,0,256,0z M256,66.785c104.334,0,189.216,84.879,189.216,189.215S360.334,445.215,256,445.215S66.783,360.336,66.783,256 S151.667,66.785,256,66.785z"
                        ></path>
                      </g>
                    </g>
                  </svg>
                </button>
                <button type="button" href="" id="btnRight" class="scroll-btn">
                  <svg
                    height="40px"
                    width="40px"
                    version="1.1"
                    id="_x32_"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 512 512"
                    xml:space="preserve"
                    fill="#000000"
                  >
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g
                      id="SVGRepo_tracerCarrier"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></g>
                    <g id="SVGRepo_iconCarrier">
                      <style type="text/css">
                        .st0 {
                          fill: #ffb800;
                        }
                      </style>
                      <g>
                        <path
                          class="st0"
                          d="M165.013,288.946h75.034c6.953,0,12.609,5.656,12.609,12.608v26.424c0,7.065,3.659,9.585,7.082,9.585 c2.106,0,4.451-0.936,6.78-2.702l90.964-69.014c3.416-2.589,5.297-6.087,5.297-9.844c0-3.762-1.881-7.259-5.297-9.849 l-90.964-69.014c-2.329-1.766-4.674-2.702-6.78-2.702c-3.424,0-7.082,2.519-7.082,9.584v26.425c0,6.952-5.656,12.608-12.609,12.608 h-75.034c-8.707,0-15.79,7.085-15.79,15.788v34.313C149.223,281.862,156.305,288.946,165.013,288.946z"
                        ></path>
                        <path
                          class="st0"
                          d="M256,0C114.842,0,0.002,114.84,0.002,256S114.842,512,256,512c141.158,0,255.998-114.84,255.998-256 S397.158,0,256,0z M256,66.785c104.334,0,189.216,84.879,189.216,189.215S360.334,445.215,256,445.215S66.783,360.336,66.783,256 S151.667,66.785,256,66.785z"
                        ></path>
                      </g>
                    </g>
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <div class="scroll-wrapper">


            <div id="cardContainer" class="scroll-container">




            
          <!--  displaying all foods in card container -->

          <?php
              //  creating sql query to getting all the data from db
              $sql = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 20";
             
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

                ?>
                 <a href="<?php echo SITEURL; ?>order.php?id=<?php echo $id; ?>"><div class="scroll-card card">

                 <?php
                 if($image_name==""){
                  //  if image not available

                    echo "<div class='error'> No image Availabe.</div>"; 

                 }
                 else{
                          //  image availabe
                ?>
                    <img src="<?php echo SITEURL ;?>images/food/<?php echo$image_name;?>" alt="" />

                <?php

                 }

                 ?>

                <h2><?php echo $title; ?></h2>

              </div></a>
              <?php



                  }
              }
              else{
                
                echo "<div class='error'> Food Not Added </div>"; 

              }

              ?>


             
            </div>
          </div>
        </div>
      </div>

      <!-- are you ready to order food  -->
      <div class="are-you-ready">
        <h2>Are you ready to order
          <br>with the best deals?</h2>
        <a href="#" class="proceed-to-order">Proceed to order ></a>
        <img src="<?php echo SITEURL ;?>images/homepage/imgs/cta-two-bg.png" alt="">
      </div>
       <!-- bottom three cards -->
        <div class="three-card-container">

          <!-- card no 1 -->
          <div class="three-card-box">
            <div class="three-card flex-box">

              <div class="left-three-card">
                <h1>Best deals <span id="crispy"> Crispy <br>Sandwiches</span> </h1>
                <p>Enjoy the large size of sandwiches. Complete your meal with the perfect slice of sandwiches.</p>
                <a href="foods.php"  class="proceed-to-order">Proceed to Order</a>
              </div>
              <div class="right-three-card">
                <img src="<?php echo SITEURL ;?>images/homepage/imgs/crispy-sandwiches.png" alt="">
              </div>
            </div>
          </div>
          <!-- card no 2 -->
          <div class="three-card-box">
            <div class="three-card flex-box">

             
              <div class="right-three-card">
                <img src="<?php echo SITEURL ;?>images/homepage/imgs/fried-chicken.png" alt="">
              </div>
               <div class="left-three-card">
                <h1>Celebrate parties <br> with <span id="crispy">Fried Chicken</span> </h1>
                <p>Get the best fried chicken smeared with a lip smacking lemon chili flavor. Check out best deals for fried chicken.</p>
                <a href="foods.php"  class="proceed-to-order">Proceed to Order</a>
              </div>
            </div>
          </div>
          <!-- card 3 -->
          <div class="three-card-box">
            <div class="three-card flex-box">

              <div class="left-three-card">
                <h1>Wanna eat hot n <br><span id="crispy">spicy Pizza </span> </h1>
                <p>Enjoy the large size of sandwiches. Complete your meal with the perfect slice of sandwiches.</p>
                <a href="foods.php"  class="proceed-to-order">Proceed to Order</a>
              </div>
              <div class="right-three-card">
                <img src="<?php echo SITEURL ;?>images/homepage/imgs/pizza.png" alt="">
              </div>
            </div>
          </div>

        </div>

      <!--  testimonial review -->
      <div class="outertestcontainer flex-box-center">
        <div class="internal-test-box">
            <h2 class="text-title">What Others Say About Us</h2>
            <div class="test-content" id="test-content-id">
               
                
                <div class="test-card">
                    <p class="test-txt">
                      "Perfect balance of spices in every dish. Feels like home-cooked food! Highly recommend.”
                    </p>
                       <img src="<?php echo SITEURL;?>images/homepage/testimonial-imgs/test-03.svg" alt="avtar1" class="avt">

                    <h3 class="test-name">Soniya Sharma</h3>
                    <p class="test-txt">
                       College Student
                    </p>
                </div>
                <div class="test-card">
                    <p class="test-txt">
                     “The burger was juicy and fresh, fries were crispy. Delivery took a little longer than expected but worth the wait.” 
                    </p>
                    <img src="<?php echo SITEURL;?>images/homepage/testimonial-imgs/test-01.svg" alt="avtar1" class="avt">
                    <h3 class="test-name">Shivansh Verma</h3>
                    <p class="test-txt">
                        English Teacher
                    </p>
                </div>
                <div class="test-card">
                    <p class="test-txt">
                      “The food was absolutely delicious! Fast delivery and everything was still hot. Will definitely order again!”
                    </p>
                       <img src="<?php echo SITEURL;?>images/homepage/testimonial-imgs/test-02.svg" alt="avtar1" class="avt">

                    <h3 class="test-name">Simran Saini</h3>
                    <p class="test-txt">
                       PhD Studnet
                    </p>
                </div>
                <div class="test-card">
                    <p class="test-txt">
                    "The packaging was neat, and the delivery boy was polite. Tried their pasta for the first time — tasted like authentic Italian!"
                    </p>
                    <img src="<?php echo SITEURL;?>images/homepage/testimonial-imgs/test-04.svg" alt="avtar1" class="avt">
                    <h3 class="test-name">Kalpana Saini</h3>
                    <p class="test-txt">
                       Govt. Teacher
                    </p>
                </div>
                <div class="test-card">
                    <p class="test-txt">
                    "The food was good and warm when it arrived. Just wish the portion size was a bit bigger for the price."
                    </p>
                       <img src="<?php echo SITEURL;?>images/homepage/testimonial-imgs/test-s.svg" alt="avtar1" class="avt">

                    <h3 class="test-name">Shivam Maurya</h3>
                    <p class="test-txt">
                       <i>PHP</i> Devloper
                    </p>
                </div>
                <div class="test-card">
                    <p class="test-txt">
                      "Great variety of dishes! Loved the desserts section. The delivery took a bit longer than expected but worth the wait."
                    </p>
                       <img src="<?php echo SITEURL;?>images/homepage/testimonial-imgs/test-06.svg" alt="avtar1" class="avt">

                    <h3 class="test-name">Gurpreet Singh</h3>
                    <p class="test-txt">
                       BCA Student
                    </p>
                </div>
            </div>
          </div>
      </div>


         

        <!-- footer -->

              <!-- floating content in homepage -->

              <!--  login button -->
                <div class="login-floating-container">
                  <div class="login-visible">
                    <svg fill="#FFB30E" width="64px" height="64px" viewBox="-8.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>left</title> <path d="M7.094 15.938l7.688 7.688-3.719 3.563-11.063-11.063 11.313-11.344 3.531 3.5z"></path> </g></svg>
                  </div>
                <a href="user-login.php" style="text-decoration : none;">
                <div class="  ">
                  
                  <svg width="48px" height="48px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><circle class="cls-1" cx="9.61" cy="5.8" r="4.3"></circle><path class="cls-1" d="M1.5,19.64l.7-3.47a7.56,7.56,0,0,1,7.41-6.08,7.48,7.48,0,0,1,4.6,1.57"></path><circle class="cls-1" cx="16.77" cy="16.77" r="5.73"></circle><polyline class="cls-1" points="19.64 14.86 16.3 18.2 14.39 16.3"></polyline></g></svg>
               
                  <h4>Login</h4>
                </div>
                 </a>
                </div>

                     <div class="loader-container">
                      <div class="loader"></div>
                    </div>       
                    
                    
    <script>
              const scrollContent = document.getElementById('test-content-id');

              // Duplicate the cards for infinite scroll
              scrollContent.innerHTML += scrollContent.innerHTML;

              let scrollPosition = 0;
              const step = 790; // width + margin
              const interval = 3000; // every 3 seconds = 3000ms

              setInterval(() => {
                scrollPosition += step;

                // Reset when half of total scroll width reached
                if (scrollPosition >= scrollContent.scrollWidth / 2) {
                  scrollPosition = 0;
                }

                scrollContent.style.transform = `translateX(-${scrollPosition}px)`;
              }, interval);


                // login btn visible styling
              const loginArrowBtn = document.querySelector('.login-visible');  
              const loginContainer = document.querySelector('.login-floating-container');

              a = true;

              loginArrowBtn.addEventListener('click', function(){

                if(a==true){

                loginContainer.style.transform = 'translateX(0px)';
                a = false;
                }
                else{
                loginContainer.style.transform = 'translateX(116px)';
                a = true;

                }

              })
              </script>
              <?php
                  if(isset(  $_SESSION ['script']))
                    {

                      echo  $_SESSION['script'];
                      unset( $_SESSION['script']);
                  }
              ?>
        
  <?php include('./home page-partial/footer.php'); ?>


    
