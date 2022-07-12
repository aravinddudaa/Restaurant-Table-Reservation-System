
<?php
session_start();
if(isset($_SESSION["email"])==FALSE)
{
    header("refresh:0;url=login.html");
}
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

    $email=$_SESSION["email"];
    $name=$_SESSION["name"];
    $no=$_SESSION["no"];
    $date=$_SESSION["date"];
    $time=$_SESSION["time"];
    $a=$_SESSION["bill"];
    $restaurent=$_SESSION["restaurent"];

$sql="INSERT INTO reserve values('$email','$name','$no','$date','$time','$a','$restaurent');";
if($conn->multi_query($sql)==TRUE)
{
    echo "<h1 style='color: blueviolet;'>SUCCESSFULL</h1>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  header("refresh:4;url=login.html");

session_destroy();
$conn->close();

?>


<h1><a href="home.php">GO home</a></h1>
<h2>Redirecting automatically</h2>
