<?php 
        session_start();
        if(isset($_SESSION["email"])==FALSE)
{
    header("refresh:0;url=login.html");
}
        $_SESSION["name"]=$_REQUEST["name"];
        
        $_SESSION["no"]=$_REQUEST["abc"];
        $_SESSION["date"]=$_REQUEST["date"];
        $_SESSION["time"]=$_REQUEST["time"];
        header("refresh:0;url=form1.php");

        ?>