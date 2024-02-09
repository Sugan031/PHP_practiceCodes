<?php
    include "./connect.php";

    $sql = "SELECT * FROM persondetails WHERE status = 'active'";
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
        #delButton{
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
    <table>
        <thead>
            <tr>
            <th>Si No.</th>
            <th>Username</th>
            <th>Email Id</th>
            <th>Mobile No.</th>
            <th>Country</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    if ($result->num_rows > 0) {

                        $i = 1;
                        while ($row = $result->fetch_assoc()) {

                        ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["email_id"]; ?></td>
                    <td><?php echo $row["mobile_no"]; ?></td>
                    <td><?php echo $row["country"]; ?></td>
                </tr>
                <?php
                    $i++;
                        }
                    }
                ?>
        </tbody>
    </table>
</body>
</html>