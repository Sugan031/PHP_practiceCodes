<?php
include "./connect.php";
session_start();
?>
<?php

/* if(isset($_POST["submit"])){ */
if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT password FROM persondetails WHERE email_id=? AND status = 'active'";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!mysqli_num_rows($result) > 0) {

        echo "invalid email id";
    } else {

        $_SESSION["mail"] = $_POST["email"];
        $emailValid = $_POST["email"];
        $row = mysqli_fetch_assoc($result);
        $passCheck = $row["password"];
        if ($passCheck == $password) {

            header("Location: /PHP_practiceCodes/home.php");
        } else {
            
            echo "password is not matching";
        }
    }
}
