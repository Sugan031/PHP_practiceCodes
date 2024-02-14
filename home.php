<?php
    include "./connect.php";
    session_start();
    $email = $_SESSION["mail"];
    $sql = "SELECT * FROM person_details WHERE email_id=?";
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
<style>
    table {
            position: relative;
            top: 250px;
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            /* background-color: lightblue; */
        }

        th, td {
            padding: 10px;
            border: 1px solid lightslategray;
            text-align: left;
        }
        .mybutton{
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: auto;
            position: relative;
            left: 600px;
            top: 300px;
        }
        img{
            position: absolute;
            opacity: 0.5;
        }
</style>
<body>
    <img src="https://github.com/bedimcode/animated-login-form/blob/main/assets/img/login-bg.png?raw=true" alt="">
    <table>
        <tr>
            <th>Username</th>
            <td><?php echo $row["name"]; ?></td>
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
    <form action="" method="post">
            <button id="showlist" name="showlist" class="mybutton">Show full list</button>
            <button id="delbutton" name="delete" class="mybutton">Delete My Account</button>
    </form>
</body>
</html>
<?php
    if (isset($_POST["showlist"])) {
        
        header("Location: /PHP_practiceCodes/showlist.php");
    }
    if (isset($_POST["delete"])) {

        $status = "deleted";
        $stmt = $conn->prepare("UPDATE  persondetails SET status = ? WHERE email_id = ? ");
        $stmt->bind_param("ss", $status, $email);
        $stmt->execute();
        header("Location: /PHP_practiceCodes/delete.php");
}
?>