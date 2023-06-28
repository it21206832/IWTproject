<?php
 include_once'dbh.inc.php';
?>

<?php
    $username= $_POST["username"];
	  $email= $_POST["email"];
	  $feedback= $_POST["feedback"];
	  
	  $sql="INSERT INTO feedback(F_ID,Username,Email,Feedback) VALUES('','$username','$email','$feedback')";
	  
	  
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
      }
  
      $conn->close();
	  
?>