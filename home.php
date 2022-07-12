<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .p {
  border: 2px solid rgb(252, 252, 252);
  margin: 50px;
  padding: 20px;
}

.button3:hover {
  background-color: white; 
  color: black; 
  border: 2px solid #2b2ea7;
}

.button3 {
    font-size: large;
  background-color: #072a74;
  color: white;
}
        </style>
        
    <title>
        PROJECT1
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        
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
                    <img src="img/comfort-removebg-preview.png"> 
                    <div class="col-sm-6" style="color: rgb(250, 250, 250);">
                        <h1>Comfortzone</h1>
                        <p>we are here to provide you a comfortable dine out at your famous restaurents</p>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="p">
                        <img class="d-flex mr-3 img-thumbnail align-self-center"
                                src="img/restaurent1.jpg" alt="Restaurent" width="275" height="183" >
                                <h4>Bawarchi</h4>
                        special biryani <span class="badge badge-danger">hot</span>
                        <br>
                        <br>
                        <button class="button button3" onclick="document.location='bawarchimenu.php'">Visit</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="p">
                        
                        <img class="d-flex mr-3 img-thumbnail align-self-center"
                                src="img/j.jpg" alt="Restaurent" width="275" height="183">
                        <h4>family dhaba</h4>
                        Grand Buffet <span class="badge badge-danger">pure veg</span>
                        <br>
                        <br>                 
                        <button class="button button3" onclick="document.location='familydhabamenu.php'">Visit</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="p">
                        <img class="d-flex mr-3 img-thumbnail align-self-center"
                                src="img/e.jpg" alt="Restaurent" width="275" height="183">
                                <h5>kinara grand</h5>
                        Weekend Grand Buffet <span class="badge badge-danger">NEW</span><br>
                        <br>
                        <button class="button button3" onclick="document.location='kinaragrandmenu.php'">Visit</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="p">
                        <img class="d-flex mr-3 img-thumbnail align-self-center"
                                src="img/restaurent2.jpg" alt="Restaurent" width="275" height="183" >
                            <h4>Grand Hotel</h1>
                        Weekend Grand Buffet <span class="badge badge-danger">NEW</span>
                        <br>
                        <br>
                        <button class="button button3" onclick="document.location='grandmenu.php'">Visit</button>
                    </div>
                </div>
                
            </div>
        </div>
        <footer class="footer" style="background-color: rgb(18, 119, 114);">
            <div class="container p-3">
                <div class="row">             
                    <div class="col-sm-4">
                        <h5>Links</h5>
                        <ul class="list-unstyled" >
                            <li><a href="#" class="fa fa-home fa-lg" style='color: azure;'>Home</a></li>
                            <li><a href="#" class="fa fa-info fa-lg" style='color: azure;'>About</a></li>
                            <li><a href="#" class="fa fa-list fa-lg" style='color: azure;'>Menu</a></li>
                            <li><a href="#" class="fa fa-address-card fa-lg" style='color: azure;'>Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4" id="add">
                        <h5 style='color: azure;'>Our Address</h5>
                        <address style='color: azure;'>
                          121,4th floor<br>
                          Narayanaguda, Hyderabad<br>
                          India<br>
                          Tel.: +111111111111111<br>
                          Email: <a href="mailto:comfortzone.net">comfortzone.net</a>
                       </address>
                    </div>
                    <div class="col-sm-4" >
                       
                            <a href="http://google.com/+" style='color: azure;'>Google+</a>
                            <a href="http://www.facebook.com/profile.php?id=" style='color: azure;'>Facebook</a>
                            <a href="http://www.linkedin.com/in/" style='color: azure;'>LinkedIn</a>
                            <a href="http://twitter.com/" style='color: azure;'>Twitter</a>
                            <a href="http://youtube.com/" style='color: azure;'>YouTube</a>
                            <a href="mailto:" style='color: azure;'>Mail</a>
                        
                    </div>
               </div>
               <div>             
                    <div>
                        <p style="text-align-last: center;font-weight:bold;">© Copyright comforzone</p>
                    </div>
               </div>
            </div>
        </footer>
    </body >
</html>