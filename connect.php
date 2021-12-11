<?php
	/*$servername = "localhost";
	$username = "root";
	$password = "";

	$database = "signup";

	// Create a connection
	$conn = mysqli_connect($servername,
		$username, $password, $database);

	// Code written below is a step taken
	// to check that our Database is
	// connected properly or not. If our
	// Database is properly connected we
	// can remove this part from the code
	// or we can simply make it a comment
	// for future reference.

	
    $sql = "INSERT INTO signup VALUES ('vamshi', 'roy', 9912413129,'vae@123','123456','123456')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();*/

    
    if (isset($_POST['submit'])) {
        if (isset($_POST['username']) && isset($_POST['fullname']) &&
            isset($_POST['phonenumber']) && isset($_POST['email']) &&
            isset($_POST['password']) && isset($_POST['cnpassword'])) {
            
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cnpassword = $_POST['cnpassword'];
    
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "signup";
    
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    
            $sql = "INSERT INTO signup VALUES ('$username' ,'$fullname' ,$phonenumber ,'$email' ,'$password' ,'$cnpassword')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            $conn->close();
    }
          else{
                 echo "not all feilds are filled";
              }
    }
    else {
        echo "Submit button is not set";
    }
    

?>
	


	

