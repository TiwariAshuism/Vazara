
<?php
header('Content-type: application/json');

$showAlert = false; 
$showError = false; 
$exists=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include '../includes/dbconnect.php';   
    
    $name = $_POST["name"]; 
    $email = $_POST["email"]; 
    $phone = $_POST["phone"];
    $city      = $_POST['city'];
    $location= $_POST['location'];
    $state= $_POST['state'];
    $pin= $_POST['pin'];
    $distance= $_POST['distance'];
    
    $sql = "Select * from frenchise where id=1";

            $sql = "INSERT INTO `frenchise` ( `name`, `email`, `phone`, `location`, `city`, `state`, `pincode`, `distance`, `date`) VALUES ('$name', '$email', ' $phone', '$location', '   $city ', '$state', '$pin', '$distance', '2021-07-01');";
    
            $result = mysqli_query($con, $sql);
            die( json_encode(array("message"=>"SUCCESS","success"=>true)));

          
          }  
    
?>