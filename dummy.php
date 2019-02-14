<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <?php include 'plugins.php'; ?>
   <?php
// define variables and set to empty values
$doctname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  $doctname = test_input($_POST["doctname"]);
  }

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  
  ?>
</head>


<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ourMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="ourMenu">
                 <ul class="navbar-nav">
                 <div class="container" align="left">
                   <li class="nav-item">
                   <a class="nav-link"><img src="www.jpg"></a>
                   </li>
                 </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>
                <div class="container">
                </div>

                
                

                <div class="container" align="center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">INDEX</a>
                    </li>
                </div>


                <div class="container" align="center">
                    <div class="dropdown">
                    <li class="nav-item">
                    
                   <a class="nav-link"> <span>LOGIN</span></a>
  <div class="dropdown-content">
    <p><a href="login2.php"> LOGIN AS DOCTOR</a></p>
    <p><a href="login2.php"> LOGIN AS PATIENT</a> </p>
  </div>
</div>
</div> <div class="container" align="right">
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php">REGISTRATION</a>
                    </li>
                    </div>
                    <div class="container" align="center">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>
                    </div>
                    <div class="container" align="center">
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    </div>
                    </ul>
                    </div>
                    </nav>
                    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <div class="container">
    <div class="row">
                <div class="col-md-6">
                    HOSPITAL REGISTRATION NUMBER:
                    <input class="form-control" type="text" name="hid" id="hid">
                </div>
            </div>
            <br>
            <br>
         <div class="row">
            <div class="col-md-6">
                DOCTOR"S NAME:
                <input class="form-control" type="text" name="doctname" id="doctname">
            </div>
        </div>
        <br>
        <br>
               <div class="row">
                    <div class="col-md-6">
                        <input class="btn btn-primary" type="submit" value="UPDATE"><?php
$name = $email = "";
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(empty($_POST["name"])) 
    {
        echo "<script>swal('Name is required');</script>";
    } 
    else 
    {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z ]*$/",$name)) 
        {
            echo "<script>swal('IOnly alphabets and whitespaces allowed');</script>";
        }
    else if(empty($_POST["email"])) 
    {
        echo "<script>swal('E-Mail is required');</script>";
    } 
    else 
    {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            echo "<script>swal('Invalid E-mail format');</script>";
        }
    }
}
 }
    ?>   
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $servername = "localhost";
            $username = "root";
            $password =  "";
            $dbname =  "dummmy";
   //create connection
   $conn = mysqli_connect($servername, $username,$password,$dbname);
   //check connection
   if (!$conn)
   {
       die("connection failed: " . mysqli_connect_error());

   }
   $hidr=$_POST['hid'];
   $doctname= $_POST['doctname'];
    
   $sql = "UPDATE dum SET doctname= concat(doctname, '$doctname')WHERE hid";
   if(mysqli_query($conn,$sql))
   {
        echo "<script>swal ('registration successful')</script>";
       
   }
   else
   {
       echo "error:".mysqli_error($conn);
   }
   mysqli_close($conn);
}
   ?>     
                        </div>
</div>

</form>
                        <?php include 'footer.php'; ?>
</div>
</body>
</html>