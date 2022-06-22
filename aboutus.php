<?php
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



    
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zalego Academy/About us</title>
    <link rel="stylesheet" href="bootstrap-5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">


</head>
<body> 
    <!-- navigation bar here -->
    <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow ">
     <div class="container-fluid">
         <a href="#" class="navbar-brand">Zalego Academy</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false" link>
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                   <div class="navbar-nav">
                        <a href="index.php" class="nav-link">Home</a>
                        <a href="aboutus.php" class="nav-link active">About us</a>
                        <a href="#" class="nav-link">Contact us</a>
             </div>
 
            </div>
     </div>
    </nav> -->
    <main class="p-5 mb-4 bg-primary rounded-2">
        <h1 style="line-height: 20vh;">About us</h1>
        <p>This is a template for a marketing or informational website.
            It includes a large callout called a jumbotron and three supporting pieces of content.Use it as a starting point to create something more unique.
        
        </p>
        
        
    </main>

    <div class="container" p-5>
        <div class="row">
            <div class="col-lg-6">
                <h1>Our program</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, animi adipisci! Hic placeat rerum quas distinctio laudantium dolorem quasi dolore.</p>
            </div>
            <div class="col-lg-6">
                <img src="Images/download.jpeg" alt="study group" style="border-radius: 20px;">
            </div>
                   
        </div>
        <br>
        <h1>The programs</h1>
        <br>
        <div class="row">
            <div class="col-lg-4 mb-3 bg-light  ps-5">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Skill Delivery</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quos iusto dignissimos sed placeat aperiam harum iure aliquam distinctio ipsa!</p>
                      <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                  
                </div>
                
            </div>
             <div class="col-lg-4 mb-3 bg-light  ps-5">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Upskilling Program</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quos iusto dignissimos sed placeat aperiam harum iure aliquam distinctio ipsa!</p>
                      <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                  
                </div>
                
            </div> 
            <div class="col-lg-4 mb-3 bg-light  ps-5">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Path finding Program</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam quos iusto dignissimos sed placeat aperiam harum iure aliquam distinctio ipsa!</p>
                      <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                  
                </div>
                
            </div>

            
            
 
 
        </div>
        <br><br>
        <p style="text-align: center;color:grey;">
         Subscribe to get information, latest news about Zalego Academy</p>
         <br>
         <form action="aboutus.php" method="POST">
                <div class="row d-flex align-items-center">
                    <div class="mb-3 col-lg-6  d-flex align-items-center" >
                        <input type="text" class="form-control" name="email" placeholder="Your email address">
                    </div>
                    <div class="mb-3 col-lg-6 " >
                        <button class="btn btn-primary mb-3" name="subscribebutton">Subscribe</button>
                    </div>
                </div>
         </form>
         
         
         <!-- end contact us page -->
         <hr>
         <footer style="font-size: 20px;"><b>&copy;Company 2022</b></footer>





        

    </div>



    

















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <!-- <script src="bootstrap-5.2/js/bootstrap.bundle.js"></script> -->
    <script src="bootstrap-5.2/js/bootstrap.min.js"></script>
</body>
</html>