<!DOCTYPE html>
<html lang="en">
<head>
    <link href="stylelogin_register.css" type="text/css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn Page</title>
</head>
<body>
 <div class="login-register">
            <div class="form" >
                 <div class="registeration_form">
                        <h1>
                          <pre>
        FELLO GAMER,LOGIN HERE!!!</pre></h1>
                     


 <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $input_name = trim($_POST["userName"]);
      $servername = "localhost";
      $dbuname = "root";
      $dbpwd = "";

      $userName = $_POST['userName'];
      $password = $_POST['password'];
// Create connection
      $conn = new mysqli( $servername , $dbuname,"", "gaming");
      $logingQuery = "select * from gaming.gaming_user where name='".$userName."' and password ='".$password."'";

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $result = $conn->query($logingQuery);
      if ($result->num_rows > 0) {
      session_start();
      $_SESSION["userName"] = $userName;
        header("Location: http://localhost/project/index.php");
      } else {
        echo "<h1><pre>Enter user name and password again..</pre></h1>";
      }

    }
 ?>
 <pre>
        <form method="POST" action="login.php" id = "buttons">         
      <input type="text" placeholder="Name" name="userName" required>

      <input type="password" placeholder="password" name="password" required>
        
     
     <button><b>Log In</b></button>
        
                </pre>
                <h3><b>Don't have an account?<a href="./register.php" class="comments" > Register </a></b></h3>
                </form>  
                 </div> 
            </div>
        </div>
</body>
</html>