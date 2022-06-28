<?php
include("enrollprocess.php");
$server="localhost";
$username="root";
$password="";
$database="zalego";



$conn= mysqli_connect($server,$username,$password,$database);
if( isset($_POST['subscribebutton'] ))
{
    //1. fetch form data
    $email= $_POST['email'];
   
    //submit form data
    $insertData = mysqli_query($conn,"INSERT INTO
        subscribers(email)
        VALUES('$email')");
    if($insertData)
    {echo "Data submitted";}
    else
    {echo "Data not submitted";}



    
;}

?>
<!DOCTYPE html>
<html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="bootstrap-5.2/css/bootstrap.min.css">
                <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
                <link rel="stylesheet" href="enrollstyle.css">
                <title>Document</title>
            </head>
    <body>
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow ">
         <div class="container-fluid">
              <a href="#" class="navbar-brand">Zalego Academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false" link>
                     <span class="navbar-toggler-icon"></span>
                      </button>
                         <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                           <div class="navbar-nav">
                                        <a href="index.php" class="nav-link">Home</a>
                                        <a href="aboutus.php" class="nav-link">About us</a>
                                        <a href="enroll.php" class="nav-link active"><button class="btn btn-primary">Register</button></a>
                                    </div>

                                </div>
                            
                            </div>   
             </nav> 
                 <main class="p-5 mb-4 bg-primary rounded-2">
                    <h1 style="line-height: 20vh;text-align:center;">JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
                    <div class="row">
                        <div class="col-lg-6"style="text-align: center;" >
                                <div class="time">
                                <i class="fa fa-calendar fa-4x" aria-hidden="true"> </i><span style="font-size:30px;">20th July 2022</span>
                               </div>
                        </div>
                        

			        </div>
                    <div class="row">
                        <div class="col-lg-6"style="text-align: center;" >
                                <div class="time">
                                <i class="fa fa-map-marker fa-4x" aria-hidden="true"> </i><span style="font-size:20px;">Zalego Academy,</span><br><span style="font-size:20px;">Devan Plaza</span>
                               </div>
                        </div>
                        

			        </div>
                    
                    
                    </main>
                    <div class="text" style="text-align:center;">
                        <span>Looking for a place to kickstart your career in Technology?</span>
                        <br><span>Whether you're a local,new in town or just cruising through we've got</span>
                        <br><span>loads of great tips and events for you</span>
                        <br><br>
                           

                                        <span style="color:grey;font-size:40px;"><b>Sign up today?</b></span>
                    </div>
                
                    <form action="enroll.php" method="POST">
                         <div class="card shadow" style="width:55rem;justify-content:center;margin-left:40vh;">
                           <div class="card-body">

                             <div class="row" >
                                <div class="mb-3 col-lg-6" >
                                 <label for="fullname" class="form-label"><b>
                                     Fullname:</b></label>
                                 <input type="text" name="fullname"  class="form-control" placeholder="Please enter your fullname">
                                 </div>

                                <div class="mb-3 col-lg-6">
                                <label for="phonenumber" class="form-label"><b>Phone number:</b></label>
                                                                                    <input type="number" name="phonenumber" class="form-control" placeholder="+2547......">
                                                                            </div> 
                                                                        </div>

                                                                        <div class="row">
                                                                                    <div class="mb-3 col-lg-6">
                                                                                        <label for="email" class="form-label"><b>
                                                                                            Email-address:
                                                                                        </b>

                                                                                        </label>
                                                                                        <input type="email" name="email"  class="form-control" placeholder="Please enter your email-address">
                                                                                    </div>
                                                                                    <div class="mb-3 col-lg-6" >
                                                                                    <label for="gender" class="form-label"><b>
                                                                                    What's your gender :</b>
                                                                                    </label>
                                                                                    <select class="form-select" aria-label="Default select example" name="gender" >
                                                                                        <option selected style="color:grey">...Please enter your gender...</option>
                                                                                        <option value="Male">Male</option>
                                                                                        <option value="Female">Female</option>
                                                                                    </select>
                                                                                    </div>

                                                                            </div>

                                                            

                                                                                    <div class="span pt-2" style="color:grey">
                                                                                    <span>In order to complete your registration  to the bootcamp, you are required to select one course you will be</span><br>
                                                                                    <span>undertaking. Pleasse NOTE that this will be your learning track during the 2-weeks immersion</span>
                                                                                    </div>
                                                                                    
                                                                                    <div class="mb-3 col-lg-6"   >
                                                                                                            <label for="courses" class="form-label" ><span style="text-align:left;"><b>
                                                                                                            What's your preferred course</b></span>
                                                                                                            </label>
                                                                                                            <select class="form-select" aria-label="Default select example" name="course" >
                                                                                                                <option selected style="color:grey">...Please enter your preffered course...</option>
                                                                                                                <option value="Web development">Web development</option>
                                                                                                                <option value="Cyber security">Cyber security</option>
                                                                                                                <option value="Data analysis">Data analysis</option>
                                                                                                                <option value="Android development">Android development</option>
                                                                                                                </select>
                                                                                                        </div>
                                                                                                        <span>You agree by providing your information you understand all our data privacy and protection policy</span><br>
                                                                                                            <span>outlined in our Terms & condition and the Privay Policy statements</span>
                                                                                                            <div class="mb-3 form-check">
                                                                                                                    <input type="checkbox" class="form-check-input" id="Terms">
                                                                                                                    <label class="form-check-label" for="Terms"><b>Agree Terms &Conditions</b></label>
                                                                                                            </div>
                                                                                                            <button class="btn btn-primary" name="submit" >SubmitApplication</button>
                                                                                    </div>
                                                                            </div>
                                                                          </div>
                                                    </form> 
                                                     <br><br>
                                                         
                             
                    
                                                          <p style="text-align: center;color:grey;">
                                                            Subscribe to get information, latest news about Zalego Academy</p>
                                                            <br>
                                                            <form action="enroll.php" method="POST">
                                                                    <div class="row d-flex align-items-center" style="margin-left:40vh" >
                                                                        <div class="mb-3 col-lg-6" >
                                                                            <input type="email" class="form-control" name="email" placeholder="Your email address">
                                                                        </div>
                                                                        <div class="mb-3 col-lg-6 " >
                                                                            <button class="btn btn-primary mb-3" name="subscribebutton">Subscribe</button>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                            <hr>
                                                             <footer style="font-size: 20px;"><b>&copy;Company 2022</b></footer> 








            <script src="jquery.min.js"></script>
            <script src="bootstrap-5.2/js/bootstrap.min.js"></script>
        </body>
</html>