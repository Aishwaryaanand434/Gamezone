<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, "", "gaming");

$userName = 'Aishwarya';
$password = "aishwaryaa";

$logingQuery = "select * from gaming.gaming_user where name='".$userName."' and password ='".$password."'";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $input_name = trim($_POST["name"]);
}

//$result = $conn->query($logingQuery);

// echo $result->num_rows;

// if($result->num_rows > 0){
//     echo " user Not found";
// } else {
//     echo " User Found.. ";
// }
//if ( $result-> $num_rows > 0) 
//{
  //  echo "successfull logged in";
//} else {
 //   echo "not logged in";
//}
// echo "Connected successfully";

$result = $conn->query($logingQuery);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name : " . $row["name"]. "  email_id : " . $row["email_id"]. " Phone No : " . $row["phone_no"]. " Password : " .$row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
;

$conn->close();
?>