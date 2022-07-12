<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
        $conn=new mysqli("localhost","root","","project3");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        $name1=$_POST["name"];
        $phno=$_POST["phno"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $sql="insert into credentials values('$name1','$phno','$email','$password')";
        

if ($conn->query($sql)) {
    echo "REGISTERED SUCCESSFULLY";
    
    
  } else {
    echo "ERROR". $conn->error;
  }
  echo "redirecting";
    header("refresh:2;url=login.html");
  }
$conn->close();
   
    
    
    
    

    



?>