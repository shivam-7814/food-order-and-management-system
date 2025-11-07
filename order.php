
<?php 
        ob_start(); 
        include('./home page-partial/menu.php');
       include('./user-login-check.php');
?>

<?php

        if(isset($_GET['id'])){

            // get id of the food 
            $food_id = $_GET['id'];

            $sql = "SELECT * FROM tbl_food WHERE id = $food_id";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);
             if($count >0){

              $row=mysqli_fetch_assoc($res);

              //  data available

                $id           =   $row['id'];
                $title        =   $row['title'];
                $image_name   =   $row['image_name'];
                $price        =   $row['price'];

             }
             else{
               header('location:'.SITEURL.'index.php');

             }
            
        }
        else{

          // redirection on homepage

               header('location:'.SITEURL.'index.php');

        }
    ?>


  <!-- checking btn clicked or not -->

         <?php
               if(isset($_POST['submit']))
                {
                    // Get all the details from the form

                    $food = $_POST['food'];
                    $price = $_POST['price'];
                    $qty = $_POST['qty'];

                  $total      =    $qty * $price;    // getting total amount

                  $order_date =   date("Y-m-d h:i:s A"); // order time and date and year

                  $status = "Ordered";      // types of status  


                    $customer_name = $_POST['customer_name'];
                    $customer_contact = $_POST['customer_contact'];
                    $customer_email = $_POST['customer_email'];
                    $customer_address = $_POST['customer_address'];

                    //  Now saving all data in db

                    $sql2 = "INSERT INTO tbl_order SET

                        food = '$food',
                        price = $price,
                        qty = $qty,
                        total = $total,
                        order_date = '$order_date',
                        status = '$status',
                        customer_name = '$customer_name',
                        customer_contact = '$customer_contact',
                        customer_email = '$customer_email',
                        customer_address = '$customer_address'
                    ";

                    // query execution

                  $res2 = mysqli_query($conn, $sql2);

                  // checking qurey execution
                  
                      if($res2 == true) {
                          $_SESSION['ordered-food'] = "<div class='success margin-40'>ThankYou, Your Order Placed Successfully.</div>";
                          header('location:' . SITEURL );
                      }
                      else
                      {
                          echo "<div class='error'>Unable to Process Now.</div>"; 
                        }
                  }
              {
                echo "<div class='error'>Unable to Process Now.</div>"; 
                
              }
         ?>



 <div class="three-card-container">

          <!-- card no 1 -->
          <div class="three-card-box">
            <div class="three-card flex-box-column order-styling">

                <form action="" method="POST" >
                  <?php
              
                    if(isset($_SESSION['no-user-login-message']))
                        {
                            echo $_SESSION['no-user-login-message'];
                            unset($_SESSION['no-user-login-message']);
                        }
            ?>
                <h1>fill this form to order</h1>
                    <fieldset>
                      <div class="card-no-1 search-by-cat-card">
                    <div class="img-box flex-box-center">
                    <?php 
                        if($image_name==""){
                          //  image not availabe
                            echo "<div class='error'>No image Availabe.</div>"; 
                          
                        }
                        else{
                          //  image availabe
                          ?>
                          
                               <img src="<?php echo SITEURL ;?>images/food/<?php echo$image_name;?>" style="object-fit: cover;" alt="" />


                          <?php

                        }

                    ?>
                  </div>
                  <div class="flex-box-start">
                    <h3><?php echo $title; ?></h3>
                    <input type="hidden" name="food" id="" value="<?php echo$title; ?>">
                    <p style="color: black; font-size: 20px"> &#x20B9; <?php echo$price ;?></p>
                    <input type="hidden" name="price" id="" value="<?php echo$price; ?>"> 

                  </div>
                </div>

                    </fieldset>
                    
                    <fieldset class="field-set-bottom">

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" max="20" min="1" value="1" required>

                        <div class="order-label">Full Name</div>
                        <input type="text" name="customer_name" placeholder="E.g. Shivam Maurya"  required>

                        <div class="order-label">Phone Number</div>
                        <input type="tel" name="customer_contact" placeholder="E.g. 7814xxxxxx" id="mobile-number" required>

                        <div class="order-label">Email</div>
                        <input type="email" name="customer_email" placeholder="E.g. example123@gmail.com"  required>

                        <div class="order-label">Address</div>
                        <textarea name="customer_address" rows="6"  placeholder="E.g. Street, City, Country"  required></textarea>
                        <br><button type="submit" style="border: none;" name="submit"  class="proceed-to-order" value="Confirm Order">Confirm Order</button>
                        <p>Total Price : <span id="total-price">₹ <?php echo $price; ?></span></p>
                        <input type="hidden" name="price" id="price" value="<?php echo $price; ?>">
                    </fieldset>

                </form>

              </div>
            </div>
          </div>

    <script>
            const input = document.getElementById("mobile-number");

            input.addEventListener("input", function() {
              // Always start with "+91 "
              if (!this.value.startsWith("+91 ")) {
                this.value = "+91 ";
              }

              // Remove everything except digits after the prefix
              const afterCode = this.value.slice(4).replace(/\D/g, '');
              this.value = "+91 " + afterCode;

              // Limit to +91 + space + 10 digits = 14 characters total
              if (afterCode.length > 10) {
                this.value = "+91 " + afterCode.slice(0, 10);
              }
            });


             const qtyInput = document.querySelector('input[name="qty"]');
            const price = parseFloat(document.getElementById("price").value);
            const totalPriceDisplay = document.getElementById("total-price");

            function updateTotal() {
              const qty = parseInt(qtyInput.value) || 0;
              const total = qty * price;
              totalPriceDisplay.textContent = `₹ ${total.toFixed(2)}`;
            }

            // Update instantly when user types or uses arrows
            qtyInput.addEventListener("input", updateTotal);
            qtyInput.addEventListener("change", updateTotal);

            // Initialize default value on load
            updateTotal();

    </script>
<?php include('./home page-partial/footer.php'); ?>
<?php ob_end_flush(); ?>



