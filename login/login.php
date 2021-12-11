<?php
    if (isset($_POST['submit'])) {
        if ( isset($_POST['username']) && isset($_POST['password']) ) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "signup";    
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
            $sql = "SELECT username,password FROM signup WHERE username='$username' And password ='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
            while($row = $result->fetch_assoc()) {
           # echo "username: " . $row["username"]. " - passwd: " . $row["password"]. "<br>";
            header("Location:http://localhost:4343/sigma/student/permission.html");
            }
            } 
            else {
            echo "0 results";
            }
            $conn->close();
    }
}
        else {
            echo "Submit button is not set";
        }
?>