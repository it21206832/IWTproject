<?php
 include_once'dbh.inc.php';
?>

<?php
$firstName = $_['firstname'];
$lastName = $_['lastname'];
$phoneNO = $_['number'];
$email = $_['email'];
$country = $_['country'];
$type = $_type['type'];
$noOfAdults = $_['adults'];
$noOfChildren = $_['children'];
$budget = $_['budget'];
$date = $_['when would you like to go'];

if(!empty($firstname) || !empty($lastname) || !empty($number) || !empty($email) || !empty($country) || !empty($type) || !empty($adults) || !empty($children) || !empty($budget) || !empty($date)){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "book";

    //create connection
    $conn = new mysql($host, $username, $password, $dbname);
    //check connection
    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    } 
}else{
    echo "All field are required";
    die();

    $conn->close();
}
?>