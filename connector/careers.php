
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
    $job = $_POST['job'];
    
    $sql = "Select * from careers where id=1";
    
    
    $result = mysqli_query($con, $sql);
            $sql = "INSERT INTO `careers` ( `name`, 
                `email`, `phone`,`city`,`location`,`job`,`date`) VALUES ('$name', 
                '$email','$phone','$city','$location','$job', current_timestamp())";
    
            $result = mysqli_query($con, $sql);
            die( json_encode(array("message"=>"SUCCESS","success"=>true)));

          
          }  
    
?>