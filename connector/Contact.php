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
$body = $_POST["body"]; 
            
    
    $sql = "Select * from contact where id=1";    

            $sql = "INSERT INTO `contact` ( `name`,`email`,`subject`,`full_message`,`date`) VALUES ('$name','$email','$phone','$body',current_timestamp())";
    
            $result = mysqli_query($con, $sql);
            die( json_encode(array("message"=>"SUCCESS","success"=>true)));
          
          }  
    
?>