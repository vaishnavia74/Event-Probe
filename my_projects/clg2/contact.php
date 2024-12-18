<?php
include("dbconnect.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <title>CONTACT</title>
            <meta name="viewport" content="width=device-width",initial-scale=1.0>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
          
                <title>Contact Us page</title>
                <link rel="stylesheet"
                    href="contact.css">
            
    </head>
        <body>
        <header>
            <div class="navbar"> 
                <div class="logo">
                    <label> <a href="index.html"><img class="image" src="./img/lg1.jpg"  width=50px; height=50px; alt=""></a></label>
                    <p>College2023</p>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="event.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php 
                if(isset($_SESSION['user_name']) && ($_SESSION['user_name']==true))
                { 
                  
                  echo '<font color="yellow">welcome '.$_SESSION['user_name'];
                 echo' <a href="logout.php"><input type="submit" name="" value="Logout" style="background:red; color:white; font-size:18px; cursor:pointer;"></a>';
                }
                else{
                    echo '<li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>';

                }
                
                ?></ul>  
            </div>
        </header>
            <!-- <label id="icon">
                <i class="fas fa-bars"></i>
            </label> -->
    
                <section class="background firstsection">
                    <div class="box-main">
                        <div class="firstHalf">	
                            <p class="text-big">Contact Us</p>
            
                            <p class="text-small">
                                You can Contact Us if you face any problem
                            </p>
            
                            <br>
                            <p class="center"
                            style="text-decoration:none;
                                    color:rgb(255, 255, 255);">
                                +91 9889988789<br>
                                +91 9390084545<br>
                                     Available

                            </p>
            
                        </div>
                    </div>
                </section>
                
                    
                <footer class="background">
                    <p class="text-footer">
                        Copyright @-All rights are reserved
                    </p>
            
                </footer>
            </body>
            
            </html>
            