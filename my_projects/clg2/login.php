<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>LOGIN</title>
        <meta name="viewport" content="width=device-width",initial-scale=1.0>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=<?$version?>">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    </head>
    <body>
        
        <header>
            <div class="navbar"> 
                <div class="logo">
                    <label> <a href="index.html"><img class="image" src="./img/lg1.jpg"  width=50px; height=50px; alt=""></a></label>
                    <p>College 2023</p>
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
    
        <section class="hai">
        <br>
            <div class="loginbox">
                <br>
                <img src="./img/avatar.png" class="avatar" alt=""  >
                <h1>Login Here</h1>
                <form method="post">
                    <p>Email</p>
                    <input type="email" name="username" placeholder="Enter the email-id">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password">
                    <input type="submit" name="submit" value="Login" style="margin-bottom:0px;">
    
                    <p style="padding-left: 15px; margin-top:4px; margin-bottom:4px; color:rgb(30, 30, 32) ; font-weight:italic;">Dont't have an account?</p>
                    <div class="r2"><a href="register.php">Register</a></div>
                </form>
            </div>
        </section>

    </body>
    
</html>
<?php include("dbconnect.php");
    echo "heelo";
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $pwd=$_POST['password'];
        $query="SELECT * FROM users WHERE email='$username' && password='$pwd'";
        $data= mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
        
        
        if($total==1)
        {
            $_SESSION['user_name']=$username;
            ?>
            <meta http-equiv = "refresh" content = "1; 
            url = http://localhost/my_projects/clg2/event.php" />
        <?php
        } 
        else
        {
            echo "login failed";
        }
    }
  

?>