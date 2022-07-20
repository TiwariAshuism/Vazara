<?php
include_once 'dbcon.php';
$sql = "DELETE FROM news WHERE email_sub='" . $_GET["email_sub"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>