<?php
include("dbconnect.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HOME</title>
        <meta name="viewport" content="width=device-width",initial-scale=1.0>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=<?$version?>">
        <script src="https://kit.fontawesome.com/a076d05399.js?v=<?$version?>"></script>
        <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
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
                <!-- <label id="icon">
                    <i class="fas fa-bars"></i>
                </label> -->
            </div>
        </header>
        <section  src='./img/lg2.jpg' 
    background-size=100% 100% ;
    height= 560px;
    width=auto;
   >
            <div class="content">
                <ul>
                    <li>Everyone<br>Can<br>participate</li>
                    <li><p>see all the upcoming college competitions and Enroll by registering here</p></li>
                </ul>
                
            </div>

        </section> 
        
        <div class="about">
            <h3>About Us</h3>
            <p>hello! this website enables students to free search and participate in diffent events conducted by various colleges.</p>
        </div>

    </body>
    
</html>