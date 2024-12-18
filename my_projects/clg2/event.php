<?php
include("dbconnect.php");
session_start();
if(isset($_SESSION['user_name'])==true)
        {
            
           
            $email=$_SESSION['user_name'];

        }


?>
        <!DOCTYPE html>
        <html>

        <head>

            <head>
                <meta charset="utf-8">
                <title>EVENTS</title>
                <meta name="viewport" content="width=device-width" ,initial-scale=1.0>
                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=<?$version?>">
                <script src="https://kit.fontawesome.com/a076d05399.js"></script>
                <link rel="stylesheet" href="style.css">
            </head>

        <body>
            <link rel="stylesheet" href="event.css?v=<?$version?>">
            <header>
            <div class="navbar"> 
                <div class="logo">
                    <label> <a href="index.php"><img class="image" src="./img/lg1.jpg"  width=50px; height=50px; alt=""></a></label>
                    <p>College2023</p>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="event.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php 
                if(isset($_SESSION['user_name']) && ($_SESSION['user_name']==true))
                { 
                  
                  echo '<font color="red">welcome '.$_SESSION['user_name'];
                 echo' <a href="logout.php"><input type="submit" name="" value="Logout" style="background:red; color:white; font-size:18px; cursor:pointer;"></a>';
                }
                else{
                    echo '<li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>';

                }
                
                ?></ul> 

            </div>
        </header>
            <section>
                <div class="leftBox">
                    <div class="content">
                        <h1>TECHNICAL AND NON-TECHNICAL EVENTS</h1>
                        <p>College events usually provide an excellent platform to showcase all kinds of different
                            talents
                            ranging from arts, education, sports to socio-cultural awareness and most importantly a
                            bunch of
                            crazy memories with friends.</p>
                        <p>
                        <h3>2023 - Events </h3>
                        </p>
                    </div>
                </div>
                <div class="events">
                    <ul>
                        <li>
                            <div class="time">
                                <h2>18<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Online programming test</h3>
                                <p><b>TIME:</b> 10:00am to 11:30am</p>
                                <p><b>COLLEGE NAME:</b> PB Siddhartha College of Arts & Science, Vijayawada</p><br>
                    
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Online_programming_test" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit1" id="submit" >
                         </form>
                        

                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>18<br><span>Jan</span></h2>
                            </div>
                            <div class="details" font color='yellow'>
                                <h3>Treasure Hunt</h3>
                                <p><b>TIME:</b> 2:00pm to 3:00pm</p>
                                <p><b>COLLEGE NAME:</b> SRK Institute Of Technology, Vijayawada</p><br>

                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Treasure_Hunt" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit2" id="submit" >
                         </form>
                       

                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>19<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Poster Presentation</h3>
                                <p><b>TIME:</b> 12:30pm to 1:30pm</p>
                                <p><b>COLLEGE NAME:</b> Velagapudi Ramakrishna Siddhartha Engineering College (VRSEC), Vijayawada</p><br>
                                

                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Poster_Presentation" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit3" id="submit" >

                         
                         </form>
                        
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>19<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Who Am I?</h3>
                                <p><b>TIME:</b> 12:45pm to 1:30pm</p>
                                <p><b>COLLEGE NAME:</b> Andhra Loyola Institute Of Engineering And Technology ALIET, Vijayawada</p><br>
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Who_Am_ I" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit4" id="submit" >
                         </form>
                        
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>20<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Project Expo</h3>
                                <p><b>TIME:</b> 9:00am to 11:00am</p>
                                <p><b>COLLEGE NAME:</b> Maris Stella College, Vijayawada</p><br>
                               
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Project_Expo" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit5" id="submit" >
                        </form>
                        
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>21<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Code Hunt</h3>
                                <p><b>TIME:</b> 9:00am to 10:45am</p>
                                <p><b>COLLEGE NAME:</b> Nova College of Engineering & Technology, Vijayawada</p><br>
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Code_Hunt" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit6" id="submit" >
                         </form>
                       
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>21<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Paper Presentation</h3>
                                <p><b>TIME:</b> 3:00pm to 4:30pm</p>
                                <p><b>COLLEGE NAME:</b> NIMRA College of Engineering & Technology</p><br>
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Paper_Presentation" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit7" id="submit" >
                         </form>
                        
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>23<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Rangoli Making</h3>
                                <p><b>TIME:</b> 11:00am to 1:00pm</p>
                                <p><b>COLLEGE NAME:</b> MVR College Of Engineering And Technology, Vijayawada</p><br>
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Rangoli_Making" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit8" id="submit" >
                         </form>
                        
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>24<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Just Imagine</h3>
                                <p><b>TIME:</b> 3:30pm to 4:30pm</p>
                                <p><b>COLLEGE NAME:</b> Velagapudi Ramakrishna Siddhartha Engineering College (VRSEC), Vijayawada</p><br>
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Just_Imagine" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit9" id="submit" >
                         </form>
                        
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>25<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Collage Making</h3>
                                <p><b>TIME:</b> 3:30pm to 5:00pm</p>
                                <p><b>COLLEGE NAME:</b> Amrita Sai Institute Of Science And Technology, Vijayawada</p><br>
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Collage_Making" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit10" id="submit" >
                         </form>
                       
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>25<br><span>Jan</span></h2>
                            </div>
                            <div class="details">
                                <h3>Theme Photography</h3>
                                <p><b>TIME:</b> 1:00pm to 2:45pm</p>
                                <p><b>COLLEGE NAME:</b> PB Siddhartha College of Arts & Science, Vijayawada</p><br>
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Theme_Photography" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit11" id="submit" >
                         </form>
                       
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>3<br><span>Feb</span></h2>
                            </div>
                            <div class="details">
                                <h3>Path Finder</h3>
                                <p><b>TIME:</b> 2:00pm to 3:30pm</p>
                                <p><b>COLLEGE NAME:</b> Andhra Loyola Institute Of Engineering And Technology ALIET, Vijayawada</p><br>
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Path_Finder" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit12" id="submit" >
                         </form>
                        
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>6<br><span>Feb</span></h2>
                            </div>
                            <div class="details">
                                <h3>Marketing and Selling</h3>
                                <p><b>TIME:</b> 3:00pm to 4:30pm</p>
                                <p><b>COLLEGE NAME:</b> NIMRA College of Engineering & Technology, Vijayawada</p><br>
                                
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Marketing_and_Selling" value="enrolled" required >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit13" id="submit" >
                         </form>
                        
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <div class="time">
                                <h2>9<br><span>Feb</span></h2>
                            </div>
                            <div class="details">
                                <h3>Short Film Making</h3>
                                <p><b>TIME:</b> 2:00pm to 4:30pm</p>
                                <p><b>COLLEGE NAME:</b> SRK Institute Of Technology, Vijayawada</p><br>
                               
                         <form method="post">
                         &nbsp;&nbsp;&nbsp;
                         <input type="checkbox" name="Short_Film_Making" value="enrolled" >
                         &nbsp;
                         <input type="submit" value="Submit" name="submit14" id="submit" >
                         </form>
                         
                        
                            </div>
                            <div style="clear: both;"></div>
                        </li>
                        



                    </ul>
                </div>
            </section>

        </html>

        

        <?PHP
        
        
        if(isset($_SESSION['user_name'])==true)
        {
         
if(isset($_POST['submit1']))
{
    $event1=$_POST['Online_programming_test'];
    $upresult= "UPDATE `users` SET Online_programming_test='$event1' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}

if(isset($_POST['submit2']))
{
    $event2=$_POST['Treasure_Hunt'];
    $upresult= "UPDATE `users` SET Treasure_Hunt='$event2' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit3']))
{
    $event1=$_POST['Poster_Presentation'];
    $upresult= "UPDATE `users` SET Poster_Presentation='$event1' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit4']))
{
    $event2=$_POST['Who_Am_I?'];
    $upresult= "UPDATE `users` SET Who_Am_I?='$event2' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit5']))
{
    $event1=$_POST['Project_Expo'];
    $upresult= "UPDATE `users` SET Project_Expo='$event1' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit6']))
{
    $event2=$_POST['Code_Hunt'];
    $upresult= "UPDATE `users` SET Code_Hunt='$event2' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit7']))
{
    $event1=$_POST['Paper_Presentation'];
    $upresult= "UPDATE `users` SET Paper_Presentation='$event1' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit8']))
{
    $event2=$_POST['Rangoli_Making'];
    $upresult= "UPDATE `users` SET Rangoli_Making='$event2' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit9']))
{
    $event1=$_POST['Just_Imagine'];
    $upresult= "UPDATE `users` SET Just_Imagine='$event1' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit10']))
{
    $event2=$_POST['Collage_Making'];
    $upresult= "UPDATE `users` SET Collage_Making='$event2' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit11']))
{
    $event1=$_POST['Theme_Photography'];
    $upresult= "UPDATE `users` SET Theme_Photography='$event1' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit12']))
{
    $event2=$_POST['Path_Finder'];
    $upresult= "UPDATE `users` SET Path_Finder='$event2' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit13']))
{
    $event1=$_POST['Marketing_and_Selling'];
    $upresult= "UPDATE `users` SET Marketing_and_Selling='$event1' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
}
if(isset($_POST['submit14']))
{
    $event2=$_POST['Short_Film_Making'];
    $upresult= "UPDATE `users` SET 'Short_Film_Making='$event2' WHERE email='$email' ";
    $ins=mysqli_query($con,$upresult);
    echo $ins;
} }

?>