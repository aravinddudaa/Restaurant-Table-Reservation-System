<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            table, th, td {
    border: 1px solid black;
    padding: 15px;
}
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
                            <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="./restaurent1.html"><span class="fa fa-list fa-lg"></span> Log out</a></li>
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
        <?php
        $a=$_REQUEST["1"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project3";
        

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $b=$_REQUEST["1"];
        $c=$_REQUEST["2"];
        $sql1="SELECT password1 from credentials2 where username='$b'";
        $result1=$conn->query($sql1);
        
        if ($result1->num_rows > 0) {
            while($row1 = $result1->fetch_assoc()) {
                if($row1["password1"]==$c)
                {
                  $_SESSION["username1"]=$b;
                  
                }
                    
                    else{
                        echo "Incorrect credentials";
                        header("refresh:0;url=restaurent1.html");
                      }

            }
            
            
            }
           else {
            echo "Incorrect credentials";
            header("refresh:0;url=restaurent1.html");
          }
        
        $sql = "SELECT * FROM reserve where restaurent='$a'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           echo  "<table>
           <tr>
               <th>
                   username
               </th>
               <th>
                   name
               </th>
               <th>
                   date
               </th>
               <th>
                   time
               </th>
               <th>
                   items
               </th>
           </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td> " . $row["username"]. "</td><td> " . $row["name"]. "</td><td> " . $row["date"]. "</td><td> " . $row["time"]. "</td><td> " . $row["items"]. "</td></tr> ";
        }
    echo "</table>";
    echo "<br><br>";
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>
        </div>
        <footer class="footer" style="background-color: rgb(87, 201, 191);">
            <div class="container p-3">
                <div class="row">             
                    <div class="col-sm-4">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="description.php" class="fa fa-home fa-lg">Home</a></li>
                            <li><a href="contact" class="fa fa-address-card fa-lg">Contact</a></li>
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
    </body >
</html>