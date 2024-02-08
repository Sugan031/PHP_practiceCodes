<?php
    include("./connect.php");
    include("./loginvalidation.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
                <th>Email</th>
                <td><input type="email" name="email" id="email" placeholder="Enter your mail id">
                <small id="small"></small></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" id="pass" name="password" placeholder="Enter your password">
                <small id="passError"></small></td>
            </tr>
            <tr>
                <td colspan="2"><button id="submit" name="submit">Submit</button></td>
            </tr>
        </table>
        
        <script src="./validation.js"></script>

    </form>
</body>
</html>