<?php
include("process.php")
?>


<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Bootsrap grid layout</title>
    <link rel="stylesheet" href="bootstrap-5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    navigation bar here 
   <nav class="navbar navbar-expand-lg bg-light fixed-top shadow ">
      <div class="container-fluid">
        <a href="#" class="navbar-brand">Zalego Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false" link>
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
            <div class="navbar-nav">
                <a href="index.php" class="nav-link active">Home</a>
                <a href="aboutus.php" class="nav-link">About us</a>
                <a href="enroll.php" class="nav-link"> <button class="btn btn-primary">Register</button></a>
            </div>

        </div>
    
       </div>   
    </nav> -->
   <!-- end navigation bar -->

   <main class="p-5 mb-4 bg-primary rounded-2">
       <h1 style="line-height: 20vh;">Welcome,Wilson</h1>
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit a pariatur voluptatem? Est, repellendus adipisci!</p>
       <button class="btn btn-secondary">Learn more</button>
       
   </main>
   <br><br>
   <div class="container">
       <div class="row">
           <div class="col-lg-4">
               <h2>Heading 1</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam laboriosam illo velit, consequuntur natus voluptatibus fuga repellat alias ea mollitia, beatae doloribus tenetur animi maxime nesciunt ipsa vel dolorum possimus?</p>
               <button class="btn btn-primary">Learn more</button>
           </div>
           <div class="col-lg-4">
             <h2>Heading 2</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam laboriosam illo velit, consequuntur natus voluptatibus fuga repellat alias ea mollitia, beatae doloribus tenetur animi maxime nesciunt ipsa vel dolorum possimus?</p>
             <button class="btn btn-primary">Learn more</button>
            </div>
            <div class="col-lg-4">
                <h2>Heading 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam laboriosam illo velit, consequuntur natus voluptatibus fuga repellat alias ea mollitia, beatae doloribus tenetur animi maxime nesciunt ipsa vel dolorum possimus?</p>
                <button class="btn btn-primary">Learn more</button>
            </div>


       </div>

       <!-- contact us page here -->
       <div class="row pt-5">
           <h1>Contact us</h1>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, porro velit. Inventore consequuntur nisi animi!</p>
           <form action="index.php" method="POST">
                <div class="row">
                    <div class="mb-3 col-lg-6" >
                            <label for="firstname" class="form-label">firstname</label>
                            <input type="text" name="firstname"  class="form-control" placeholder="Please enter your first name">
                    </div>

                    <div class="mb-3 col-lg-6">
                             <label for="lastname" class="form-label">lastname</label>
                              <input type="text" name="lastname" class="form-control" placeholder="Please enter your last name">
                    </div> 
                </div>

                   <div class="row">
                           <div class="mb-3 col-lg-6" >
                               <label for="phone-number" class="form-label">
                                   phone number
                               </label>
                               <input type="number" name="phonenumber"class="form-control" placeholder="Please enter your phone-number">
                            </div>

                            <div class="mb-3 col-lg-6">
                                 <label for="email-address" class="form-label">
                                     email-address

                                 </label>
                                 <input type="text"name="email"  class="form-control" placeholder="Please enter your email-address">
                            </div>
                    </div>
                  <div class="row">
                      <div class="col-lg-12">
                          <label for="message" class="form-label" >Your message</label>
                          <textarea id="" cols="30" rows="10" name="message" class="form-control">your-message</textarea>
                      </div>
                  </div>
                </div>
                <br>

                <button class="btn btn-primary" name="sumbitButton">submit</button>



            </form>

       </div>
       <!-- end contact us page -->
       <hr>
       <footer style="font-size: 20px;"><b>&copy;Company 2022</b></footer>
        


   </div>







   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <!-- <script src="bootstrap-5.2/js/bootstrap.bundle.js"></script> -->
    <script src="bootstrap-5.2/js/bootstrap.min.js"></script>
</body>
</html>