<?php include("dbconnect.php");?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>register</title>
        <meta name="viewport" content="width=device-width",initial-scale=1.0>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                    echo '<li><a href="login.php">login</a></li>
                    <li><a href="register.php">Register</a></li>';

                }
                
                ?></ul>  
                <!-- <label id="icon">
                    <i class="fas fa-bars"></i>
                </label> -->
            </div>
        </header>
    
        <section class="hai">
        <div class="regbox">
            <div class="reg">
                <h2>Register Here</h2> <br>
                <form id="register" action="register.php" method="post">
                    <label for=" name">Name:</label>

                    <input type="text" name="name" id="name" placeholder=" Enter your name" required>
                    <br><br>
                    <label for="username"> Username:</label>

                    <input type="text" name="username" id="username" placeholder=" Enter your UserId" required>
                    <br><br>
                    <label for="college"> College:</label>

                    <input type="text" name="college" id="clgname" placeholder=" Enter your college name" required>

                    <label for="rollnum"> College Roll No:</label>

                    <input type="text" name="rollno" id="rollno" placeholder=" Enter your rollnumber" required>
                    <br><br>
                    <label for="course"> Course:</label>

                    <input type="text" name="course" id="field" placeholder=" Enter your course" required>
                    <label for="branch"> Branch:</label>

                    <input type="text" name="branch" id="branch" required>
                    <br><br>
                    <label for="year"> year of studying:</label>

                    <input type="text" name="year" id="year" placeholder=" Curently studying year" required>
                    <br><br>
                    <label for="phone"> Phone Number:</label>

                    <input type="number" name="phone" id="phnum" placeholder=" Enter your phone number" required>
                    <br><br>
                    <label for="gender">Gender</label>
                    <br>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="male" value="male" required>
                    &nbsp;
                    <span id="male">Male</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="female" value="female" required>
                    &nbsp;
                    <span id="female">Female</span>
                    <br><br>
                    <label for="email"> Email:</label>

                    <input type="email" name="email" id="email" placeholder=" Enter your valid email" required>

                    <label for="password">Password: </label>
                    <input type="text" name="password" id="password" placeholder=" Enter 8-20 char" required>
                    <br><br>
                
                
               <!--     <div class="popup" id="popup-1">
                    <div class="overlay" ></div>
                    <div class="content">
                        <div class="close-btn">&times;</div>
                        <h3> Sucessfully Resigeterd</h3>
                    </div>-->
                    <input type="submit" value="Submit" name="submit" id="submit" onclick="say()" required>
              <!--   <div class="modal-box">
               
                 <button class="show-modal" > submit</button>
                   <!- <i class="fa-regular fa-circle-check"></i>
             <h3>Sucessfully registered</h3>
                 <div class="buttons">
                    <button class="close-btn">Ok</button>
                 </div>--
                 </div>-->
             <!--   <div class="popup" id="popup-1">
                    <div class="overlay" ></div>
                    <div class="content">
                        <div class="close-btn">&times;</div>
                        <h3> Sucessfully Resigeterd</h3>
                    </div>
                </div>
                <button onclick="togglePopup()" class="show-modal" id="submit">Submit</button>-->

                <!-- function tooglePopup(){
                    document.getElementById("popup-1").classList.toggle("active");
                }
            -->
                </form>
            </div>
        </div>


    </section>

        <div class="aboutlogin">
            <h3>About Us</h3>
            <p>hello! this website enables students to free search and participate in diffent events conducted by various
                colleges.</p>
        </div>
    
    </body>

   
   <!-- <script  src="jquery.js" charset="utf-8"></script>
           --> <!-- <script type="text/javascript">
        function tooglePopup(){
                    document.getElementById("popup-1").classList.toggle("active");
                }
                </script>-->

                <script>
                    function say(){
                        alert("successfull Registration");
                    }
                    </script>
</html>
<?php
         if(isset($_POST['submit']))
             {
                 $name=$_POST['name'];
                 $username=$_POST['username'];
                 $college=$_POST['college'];
                 $rollno=$_POST['rollno'];
                 $course=$_POST['course'];
                 $branch=$_POST['branch'];
                 $year=$_POST['year'];
                 $phone=$_POST['phone'];
                 $gender=$_POST['gender'];
                 $email=$_POST['email'];
                 $password=$_POST['password'];
         
                $sql= "INSERT INTO `users`(name,username,college,
                rollno,course,branch,year,phone,gender,email,password)
                values('$name','$username','$college','$rollno','$course','$branch',
                '$year','$phone','$gender','$email','$password')";
                $ins=mysqli_query($con,$sql);
                if($ins){
                 echo "data is inserted into database";
                } 
                else{
                 echo "failed";
                }
             }
?> 
        
  