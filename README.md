<!-- all refrence from vijay thapa Youtube channel -->


# 🥘 Food Ordering Website 
Creating a Complete Dynamic and Fully Functional Website using PHP programming language and MySQL Database.

# 🏃‍♂️ Run WebPage as front-end page(home-page)
[Click Here to Run Homepage ](https://food-order-project-02.netlify.app/)

# ⚙️ Technology Used
1. HTML5
2. CSS3
3. Core/Procedural PHP programming language
4. MySQL Relational Database


# 🧰 Features
1. Visitors/Users have to login to order food. //with php mailer
2. They can browse all the Categories and Food Items. 
3. They also can order easily from the website.
4. Admin can Manage Admin, Categories and Food Items
5. Admin can also Manage and Track Food Order and Delivery


## 📖 Project Run on your PC?


1. Download and Install XAMPP

[Click Here to Download](https://www.apachefriends.org/index.html)

2. Install any Text Editor ( Visual Studio Code)

### Installation

1. Download as as Zip or Clone this project
2. Move this project to Root Directory
```
Local Disc C: -> xampp -> htdocs -> 'food-order'
```
*Local Disk C is the location where xampp was installed*

3. Open XAMPP Control Panel and Start 'Apache' and 'MySQL'

4. Import Database named as "food-ordering"

a. Open 'phpmyadmin' in your browser
b. Create a Database
c. Import the SQL file provided with this project

5. Make Changes to settings

Go to 'config' folder and Open 'constants.php' file. Then make changes on following constants
```php
<?php 
//Start Session
session_start();

//Create Constants to Store Non Repeating Values
define('SITEURL', 'http://localhost/food-order/'); //Update the home URL of the project if you have changed port number or it's live on server
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');
    
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database 

?>
```

6. Now, Open the project in your browser. It will run perfectly.
   for email verfification
   put your gmail and app password
   in send-.php file
        $mail->Username = '';  // your Gmail
        $mail->Password = 'xxxx xxxx xxxx xxxx';   // your 16-digit app password

8. You can Login with 
    1. Username = admin
    2. Password = admin@7814

9. Enjoy with Project 😁
