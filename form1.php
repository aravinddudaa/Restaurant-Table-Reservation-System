<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="javascript.js"></script>
    </head>
    <body>
        <?php 
        session_start();
        if(isset($_SESSION["email"])==FALSE)
{
    header("refresh:0;url=login.html");
}

        

        ?>
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="Navbar" style="background-color: rgb(18, 119, 114);">
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="./home.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="./contact1.html"><span class="fa fa-info fa-lg"></span> contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="./logout.php"><span class="fa fa-list fa-lg"></span> Log out</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> settings</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            <header class="jumbotron" style="background-color: rgb(18, 119, 114);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6" style="color: rgb(250, 250, 250);">
                        <h1>Comfortzone</h1>
                        <p>we are here to provide you a comfortable dine out at your famous restaurents</p>
                    </div>
                </div>
            </div>
        </header>
        <form  method="post" action="helloo.php">
            <div class="container">
                <h1 style="text-align: center;">FOODMENU</h1>
                <input type="submit" style="background-color: rgb(252, 39, 216);">
              <div class="jumbotron" style="background-color: white;">
                 <div class="row">
                  <div class="col-sm-2">
                      <img class="d-flex mr-3 img-thumbnail align-self-center"
                               src="img/Chicken Biryani.jpg" alt="Chicken Biryani">
                  </div>
                  <div class="col-sm-6">
                      
                      <h2>Chicken Biryani <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$250</span></h2>
                      <p>The taste of the grub is worth the wait, Almond and raisins to give a royal feel, Too tempting the food appears to deal. Now goes in the heart of the dish,</p>
                  </div>
                  <div class="col-sm-2">
                      <label for="quantity" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Quantity:</label>
                      <input type="number" id="Chicken Biryani" name="mname" min="0" max="100" step="1" value="<?php 
                      
                      if(isset($_SESSION["ChickenBiryani"]))
                      {
                          echo $_SESSION["ChickenBiryani"];
                      }
                      else
                      {
                          echo 0;
                      }
                      
                      ?>">
                      <br><br>
                      
                  </div>
                 
              </div> 
              </div>
              <div class="jumbotron" style="background-color: white;">
                  <div class="row">
                      <div class="col-sm-2">
                          <img class="d-flex mr-3 img-thumbnail align-self-center"
                                   src="img/tandoori.jpg" alt="Chicken Biryani">
                      </div>
                   
                   <div class="col-sm-6">
                       
                       <h2>Chicken Tandoori <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$250</span></h2>
                       <p>The taste of the grub is worth the wait, Almond and raisins to give a royal feel, Too tempting the food appears to deal. Now goes in the heart of the dish,</p>
                   </div>
                   <div class="col-sm-2">
                      <label for="quantity" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Quantity:</label>
                      <input type="number" id="Chicken Tandoori" name="ChickenTandoori" min="0" max="100" step="1" value="<?php 
                      
                      if(isset($_SESSION["ChickenTandoori"]))
                      {
                          echo $_SESSION["ChickenTandoori"];
                      }
                      else
                      {
                          echo 0;
                      }
                      
                      ?>">
                      <br><br>
                      
                   </div>
                   
               </div> 
               </div>
               <div class="jumbotron" style="background-color: white;">
                  <div class="row">
                      <div class="col-sm-2">
                          <img class="d-flex mr-3 img-thumbnail align-self-center"
                                   src="img/shawarma.jpg" alt="Chicken Biryani">
                      </div>
                   <div class="col-sm-6">
                       
                       <h2>Chicken Shawarma <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$250</span></h2>
                       <p>The taste of the grub is worth the wait, Almond and raisins to give a royal feel, Too tempting the food appears to deal. Now goes in the heart of the dish,</p>
                   </div>
                   <div class="col-sm-2">
                      <label for="quantity" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Quantity:</label>
                      <input type="number" id="Chicken Shawarma" name="Shawarma" min="0" max="100" step="1" value="<?php 
                      
                      if(isset($_SESSION["ChickenShawarma"]))
                      {
                          echo $_SESSION["ChickenShawarma"];
                      }
                      else
                      {
                          echo 0;
                      }
                      
                      ?>">
                      <br><br>
                      
                   </div>
                   
               </div> 
               </div>
               
               <div class="jumbotron" style="background-color: white;">
                  <div class="row">
                      <div class="col-sm-2">
                          <img class="d-flex mr-3 img-thumbnail align-self-center"
                                   src="img/magestic.jpg" alt="Chicken Biryani">
                      </div>
                   <div class="col-sm-6">
                       
                       <h2>Chicken Magestic <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$250</span></h2>
                       <p>The taste of the grub is worth the wait, Almond and raisins to give a royal feel, Too tempting the food appears to deal. Now goes in the heart of the dish,</p>
                   </div>
                   <div class="col-sm-2">
                      <label for="quantity" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Quantity:</label>
                      <input type="number" id="Chicken Magestic" name="ChickenMagestic" min="0" max="100" step="1" value="<?php 
                      
                      if(isset($_SESSION["ChickenMagestic"]))
                      {
                          echo $_SESSION["ChickenMagestic"];
                      }
                      else
                      {
                          echo 0;
                      }
                      
                      ?>">
                      <br><br>
                   </div>
                   
               </div> 
               </div>
               <div class="jumbotron" style="background-color: white;">
                  <div class="row">
                      <div class="col-sm-2">
                          <img class="d-flex mr-3 img-thumbnail align-self-center"
                                   src="img/nuggets.jpg" alt="Chicken Biryani">
                      </div>
                   <div class="col-sm-6">
                       
                       <h2>Chicken Nuggets <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$250</span></h2>
                       <p>The taste of the grub is worth the wait, Almond and raisins to give a royal feel, Too tempting the food appears to deal. Now goes in the heart of the dish,</p>
                   </div>
                   <div class="col-sm-2">
                      <label for="quantity" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Quantity:</label>
                      <input type="number" id="Chicken Nuggets" name="ChickenNuggets" min="0" max="100" step="1" value="<?php 
                      
                      if(isset($_SESSION["email"])==FALSE)
{
    header("refresh:4;url=login.html");
}
                      if(isset($_SESSION["ChickenNuggets"]))
                      {
                          echo $_SESSION["ChickenNuggets"];
                      }
                      else
                      {
                          echo 0;
                      }
                      
                      ?>">
                      <br><br>
                      
                   </div>
                   
               </div> 
               </div>
               <div class="jumbotron" style="background-color: white;">
                  <div class="row">
                      <div class="col-sm-2">
                          <img class="d-flex mr-3 img-thumbnail align-self-center"
                                   src="img/lollipop.jpg" alt="Chicken Biryani">
                      </div>
                   <div class="col-sm-6">
                       
                       <h2>Chicken Lollipop <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$250</span></h2>
                       <p>The taste of the grub is worth the wait, Almond and raisins to give a royal feel, Too tempting the food appears to deal. Now goes in the heart of the dish,</p>
                   </div>
                  <div class="col-sm-2">
                      <label for="quantity" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Quantity:</label>
                      <input type="number" id="Chicken Lollipop" name="ChickenLollipop" min="0" max="100" step="1" value="<?php 
                      
                      if(isset($_SESSION["ChickenLollipop"]))
                      {
                          echo $_SESSION["ChickenLollipop"];
                      }
                      else
                      {
                          echo 0;
                      }
                      
                      ?>">
                      <br><br>
                      
                   </div>
                   
               </div> 
               </div>
               <div class="jumbotron" style="background-color: white;">
                  <div class="row">
                      <div class="col-sm-2">
                          <img class="d-flex mr-3 img-thumbnail align-self-center"
                                   src="img/roasted.jpg" alt="ChickenBiryani">
                      </div> 
                   <div class="col-sm-6">
                       
                       <h2>Chicken Roast <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$250</span></h2>
                       <p>The taste of the grub is worth the wait, Almond and raisins to give a royal feel, Too tempting the food appears to deal. Now goes in the heart of the dish,</p>
                   </div>
                   <div class="col-sm-2">
                      <label for="quantity" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Quantity:</label>
                      <input type="number" id="Chicken Roast" name="ChickenRoast" min="0" max="100" step="1" value="<?php 
                      
                      if(isset($_SESSION["ChickenRoast"]))
                      {
                          echo $_SESSION["ChickenRoast"];
                      }
                      else
                      {
                          echo 0;
                      }
                      
                      ?>">
                      <br><br>
                      
                   </div>
               </div> 
               </div>
               <div class="jumbotron" style="background-color: white;">
                  <div class="row">
                      <div class="col-sm-2">
                          <img class="d-flex mr-3 img-thumbnail align-self-center"
                                   src="img/grill.jpg" alt="Chicken Biryani">
                      </div>
                   <div class="col-sm-6">
                       
                       <h2>Chicken grill <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$250</span></h2>
                       <p>The taste of the grub is worth the wait, Almond and raisins to give a royal feel, Too tempting the food appears to deal. Now goes in the heart of the dish,</p>
                   </div>
                  <div class="col-sm-2">
                      <label for="quantity" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Quantity:</label>
                      <input type="number" id="Chicken grill" name="Chickengrill" min="0" max="100" step="1" value="<?php 
                      
                      if(isset($_SESSION["ChickenGrill"]))
                      {
                          echo $_SESSION["ChickenGrill"];
                      }
                      else
                      {
                          echo 0;
                      }
                      
                      ?>">
                      <br><br>
                      
                   </div>
                   
               </div> 
               </div>
              
              
             
            </div>
            
        </form>
              
              <footer class="footer" style="background-color: rgb(18, 119, 114);">
                <div class="container p-3">
                    <div class="row">             
                        <div class="col-sm-4">
                            <h5>Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4" id="add">
                            <h5>Our Address</h5>
                            <address>
                              121,4th floor<br>
                              Narayanaguda, Hyderabad<br>
                              India<br>
                              Tel.: +111111111111111<br>
                              Email: <a href="mailto:comfortzone.net">comfortzone.net</a>
                           </address>
                        </div>
                        <div class="col-sm-4">
                           
                                <a href="http://google.com/+">Google+</a>
                                <a href="http://www.facebook.com/profile.php?id=">Facebook</a>
                                <a href="http://www.linkedin.com/in/">LinkedIn</a>
                                <a href="http://twitter.com/">Twitter</a>
                                <a href="http://youtube.com/">YouTube</a>
                                <a href="mailto:">Mail</a>
                            
                        </div>
                   </div>
                   <div>             
                        <div>
                            <p style="text-align-last: center;">© Copyright comforzone</p>
                        </div>
                   </div>
                </div>
            </footer>
            
    </body>
</html>