<?php
$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $servername = "localhost";
    $dbuname = "root";
    $dbpwd = "";

    $userName = $_POST['UserName'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
// Create connection
    $conn = new mysqli( $servername , $dbuname,"", "gaming");
    $insertQuery = "insert into gaming.gaming_user(name, password, phone_no, email_id ) values('$userName', '$password', $phone, '$email')";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if($conn->query($insertQuery)){
        $message = "<b>Registration Successfull ... click on <a href='login.php'>Login </a> to login</b>";
    } else {
        $message = " <b>There were some issue..</b>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./stylelogin_register.css" rel="stylesheet" type="text/css" >
    <title>Register</title>
</head>
<body>
   
    <div class="login-register">
        <div class="form">
            <form method="POST" action="register.php" id = "buttons">
                    <h1><pre>
    FELLO GAMER,REGISTER HERE!!!</h1>
    <?php echo $message ?>
            <br/>
                <input type="text" name="UserName" placeholder="Your name GAMER?" required>
                <input type="number" name="phone" placeholder="Phone no." required> 
                <input type="email" name="email"  placeholder="Email id" required>
                <input type="password" name="password"  placeholder="password" required>
<br>
                     <button type="submit"><b>REGISTER</b></button>

                
                <h3>Have an account?<a href="./login.php">Log In</a></h3>
                <h3>Want to go back?<a href="./gamepageindex.php">HOME</a></h3>
                </pre>
            </form>
        </div>
    </div>
   
    
</body>
</html>