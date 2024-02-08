<?php
    include("./connect.php");
    session_start();

    $email = $_SESSION["email"];
    $sql = "SELECT * FROM persondetails WHERE email_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Username</th>
            <td><?php echo $row["username"]; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $row["email_id"]; ?></td>
        </tr>
        <tr>
            <th>Mobile No</th>
            <td><?php echo $row["mobile_no"]; ?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?php echo $row["password"]; ?></td>
        </tr>
        <tr>
            <th>Country</th>
            <td><?php echo $row["country"]; ?></td>
        </tr>
    </table>
</body>
</html>