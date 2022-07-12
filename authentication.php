<?php
session_start();
if(isset($_SESSION["email"])==FALSE)
{
    header("refresh:0;url=login.html");
}
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            
            
                $conn=new mysqli("localhost","root","","project3");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }
                $name1=$_POST["1"];
                $_SESSION["email"]=$name1;
                $password1=$_POST["2"];
                $sql="select password from credentials where email='$name1'";
              
        $result=$conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row["password"]==$password1)
                {
                  $_SESSION["username"]=$name1;
                  header("refresh:0;url=home.php");
                }
                    
                    else{
                        echo "Incorrect credentials";
                        header("refresh:4;url=login.html");
                      }

            }
            
            
            }
           else {
            echo "Incorrect credentials";
            header("refresh:4;url=login.html");
          }
        $conn->close();  
          }
        
           
            
            
            
            
        
            
        
        
        
        ?> 