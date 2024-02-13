<?php
    include "./connect.php";

    $sql = "SELECT * FROM person_details WHERE status = 'active'";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            position: relative;
            top: 250px;
            left: 300px;
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            position: fixed;
            /* background-color: lightblue; */
        }

        th, td {
            padding: 10px;
            border: 1px solid lightslategray;
            text-align: left;
            font-weight: bold;
        }
        #delbutton, #editbutton{
            background-color: blue;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        img{
            position: absolute;
        }
    </style>
</head>
<body>
  <img src="https://github.com/azamatyudaev/responsive-login-form/blob/main/assets/img/bg-login.png?raw=true" alt="">
  <form action="" method="post">
    <table>
        <thead>
            <tr>
            <th>Si No.</th>
            <th>Username</th>
            <th>Email Id</th>
            <th>Mobile No.</th>
            <th>Country</th>
            <th>Status</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email_id"]; ?></td>
                    <td><?php echo $row["mobile_no"]; ?></td>
                    <td><?php echo $row["country"]; ?></td>
                    <td><?php echo $row["status"]; ?></td>
                    <td>
                    <button id="delbutton" type="submit" name="delete" value="<?php echo $row["id"];?>">DELETE</button>
                    </td>
                    <td><button id="editbutton" name="<?php $row["id"];?>">EDIT</button></td>
                </tr>
                <?php
                    }
                    }
                ?>
        </tbody>
    </table>
  </form>
</body>
</html>
<?php
    if (isset($_POST["delete"])) {

        $status = "deleted";
        $delId = $_POST["delete"];
        $stmt = $conn->prepare("UPDATE  persondetails SET status = ? WHERE id = ? ");
        $stmt->bind_param("ss", $status, $delId);
        $stmt->execute();
        header("Location: /PHP_practiceCodes/delete.php");
}
?>