<?php
$serverName = "localhost";
$username = "root";
$password = "root@123";
$database = "persondb";

$conn = new mysqli($serverName, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$nameRegex = '/^[a-zA-z]+$/';
$emailPattern = '/^(?!\.)([a-z\d\.-]{1,64})@([a-z\d]+)\.([a-z]{2,3})(\.[a-z]{2,3})?$/m';
$passwordPattern = '/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s])([^\s]){8,20}$/m';
$numberPattern = '/^[0-9]{10}$/';

if (isset($_POST["submit"])) {
    if(!preg_match($nameRegex, $_POST["name"])) {
        $erorUser = "username is not valid";
    }elseif(!preg_match($emailPattern, $_POST["email"])) {
        echo "email is not valid";
    } elseif (!preg_match($numberPattern, $_POST["mobile"])) {
        echo "mobile number is not valid";
    } elseif (!preg_match($passwordPattern, $_POST["password"])) {
        echo "password is not valid";
    }
    //elseif(!isset($_FILES['image']) || !$_FILES['image']['error'] == 0) {
    //     echo "image is invalid/not uploaded";
    // }
    else {

        $uname  = $_POST["name"];
        $email  = $_POST["email"];
        $mobile = $_POST["mobile"];
        $pass = $_POST["password"];
        $country = $_POST["country"];
        // $name = $_FILES['image']['name'];
        // $type = $_FILES['image']['type'];
        // $data = file_get_contents($_FILES['image']['tmp_name']);

        echo $uname . "<br>";
        echo $email . "<br>";
        echo $mobile . "<br>";
        echo $pass . "<br>";
        echo $country . "<br>";

        $stmt = $conn->prepare("insert into persondetails(Username, emailid, Mobile_No, password, Country)
    values(?,?,?,?,?)");
        $stmt->bind_param("ssiss", $uname, $email, $mobile, $pass, $country);
        $stmt->execute();

        $stmt->close();
        $conn->close();

    }
}
