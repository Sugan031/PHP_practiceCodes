<?php
    include("./connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            background-color: lightblue;
        }
        
        th, td {
            padding: 10px;
            border: 1px solid lightslategray;
            text-align: left;
        }
        #submit{
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <th>Username</th>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
            <th>Email ID</th>
            <td><input type="text" name="email" required></td>
            </tr>
            <tr>
            <th>Mobile No.</th>
            <td><input type="tel" name="mobile" required></td>
            </tr>
            <tr>
            <th>Password</th>
            <td><input type="text" name="password" required></td>
            </tr>
            <tr>
            <th>Country</th>
            <td>
            <select name="country" required>
                        <option value="" disabled selected>Select a country</option>
                        <option value="usa">USA</option>
                        <option value="canada">Canada</option>
                        <option value="uk">UK</option>
                        <option value="India">India</option>
                        <option value="Scotland">Scotland</option>
                    </select>
            </td>
            </tr>
            <!-- <tr>
                <th>Image</th>
                <td><input type="file" name="image"></td>
            </tr> -->
            <tr>
                <td colspan="2"><button id="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
