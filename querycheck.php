<?php
    $serverName = "localhost";
    $username = "root";
    $password = "root@123";
    $database = "persondb";
    
    $conn = new mysqli($serverName, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";


    $sql = "SELECT * FROM persondetails WHERE email_id='rama12@gmail.com'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "username: " . $row["username"]. " - email id: " . $row["email_id"]. "mobile no" . $row["mobile_no"]. " - password " . $row["password"]. 
          " - country: " . $row["country"]."<br>";
        }
      } else {
        echo "0 results";
      }
?>