<?php
    include("./connect.php");
    include("./regex.php");
    include("./checkemail.php")
?>
<?php
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



        $stmt = $conn->prepare("insert into persondetails(username, email_id, mobile_no, password, country)
    values(?,?,?,?,?)");
        $stmt->bind_param("ssiss", $uname, $email, $mobile, $pass, $country);
        $stmt->execute();

        $stmt->close();
        $conn->close();

    }
}
?>