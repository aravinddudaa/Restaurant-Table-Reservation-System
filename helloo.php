<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="javascript.js"></script>
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
                    <div class="col-sm-6" style="color: rgb(250, 250, 250);">
                        <h1>Comfortzone</h1>
                        <p>we are here to provide you a comfortable dine out at your famous restaurents</p>
                    </div>
                </div>
            </div>
        </header>
              
              
<?php
session_start();
if(isset($_SESSION["email"])==FALSE)
{
    header("refresh:0;url=login.html");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $a=$_POST["mname"];
    $ab=$_POST["ChickenTandoori"];
    $ac=$_POST["Shawarma"];
    $ad=$_POST["ChickenMagestic"];
    $ae=$_POST["ChickenNuggets"];
    $af=$_POST["ChickenLollipop"];
    $ag=$_POST["ChickenRoast"];
    $ah=$_POST["Chickengrill"];
    $total=0;
    $totalstring=" ";
    echo "<div class='container'>
        <form style='margin-left: 20%;border:solid 2px darkseagreen;padding: 20px;' action='demo1.php' >
            <h1 style='color: darkmagenta;'>check out</h1>
            <h1>----------------------------------------------------</h1>";
    if($a>=1)
    {
        echo "
            <h4>Chicken Biryani &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='badge badge-danger'>HOT</span> <span class='badge badge-pill badge-secondary'>$250</span>   :   {$a}</h4>";
            
            $_SESSION["ChickenBiryani"]=$a;
            $totalstring.="ChickenBiryani".$a;
            $total+=$a*250;
    }
    if($ab>=1)
    {
        echo "            <h4>Chicken Tandoori &nbsp;&nbsp;&nbsp; <span class='badge badge-danger'>HOT</span> <span class='badge badge-pill badge-secondary'>$250</span>   :  {$ab}</h4>
        ";
        $_SESSION["ChickenTandoori"]=$ab;
        $totalstring.=" ChickenTandoori".$a;
        $total+=$ab*250;
    }
    if($ac>=1)
    {
        echo "            <h4>Chicken Shawarma&nbsp; <span class='badge badge-danger'>HOT</span> <span class='badge badge-pill badge-secondary'>$250</span>   :  {$ac}</h4>
        ";
        $_SESSION["ChickenShawarma"]=$ac;
        $totalstring.=" ChickenShawarma".$a;
        $total+=$ac*250;
    }
    if($ad>=1)
    {
        echo "            <h4>Chicken Magestic &nbsp;&nbsp; <span class='badge badge-danger'>HOT</span> <span class='badge badge-pill badge-secondary'>$250</span>   :  {$ad}</h4>
        ";
        $_SESSION["ChickenMagestic"]=$ad;
        $totalstring.=" ChickenMagestic".$a;
        $total+=$ad*250;
    }
    if($ae>=1)
    {
        echo "            <h4>Chicken Nuggets &nbsp;&nbsp;&nbsp;&nbsp;<span class='badge badge-danger'>HOT</span> <span class='badge badge-pill badge-secondary'>$250</span>   :  {$ae}</h4>
        ";
        $_SESSION["ChickenNuggets"]=$ae;
        $totalstring.=" ChickenNuggets".$a;
        $total+=$ae*250;
    }
    if($af>=1)
    {
        echo "            <h4>Chicken Lollipop &nbsp;&nbsp;&nbsp; <span class='badge badge-danger'>HOT</span> <span class='badge badge-pill badge-secondary'>$250</span>   :  {$af}</h4>
        ";
        $_SESSION["ChickenLollipop"]=$af;
        $totalstring.=" ChickenLollipop".$a;
        $total+=$af*250;
    }
    if($ag>=1)
    {
        echo "            <h4>Chicken Roast &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class='badge badge-danger'>HOT</span> <span class='badge badge-pill badge-secondary'>$250</span>   :  {$ag}</h4>
        ";
        $_SESSION["ChickenRoast"]=$ag;
        $totalstring.=" ChickenRoast".$a;
        $total+=$ag*250;
    }
    if($ah>=1)
    {
        echo "            <h4>Chicken Grill &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class='badge badge-danger'>HOT</span> <span class='badge badge-pill badge-secondary'>$250</span>   :  {$ah}</h4>
        
    
";
$_SESSION["ChickenGrill"]=$ah;
    $totalstring.=" ChickenGrilll".$a;
$total+=$ah*250;


    }
    echo "----------------------------<h5>Total:$ {$total}</h5>";
    $_SESSION["bill"]=$totalstring;
    
}

?>

<a href='form1.php' class='btn btn-primary btn-lg ' tabindex='-1' role='button' aria-disabled='true'>Go back</a>
            <input type='submit' value='Submit'>
        </form>
    </div>

    </body>
</html>