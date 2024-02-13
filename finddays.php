<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Date One: <input type="date" name="start"><br>
    Date Two : <input type="date" name="end"><br>

   <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    if (isset($_POST["submit"])) {

        $startDate = $_POST["start"];
        $endDate = $_POST["end"];

        function toFindDays($startDate, $endDate) {
            $dayDiff = strtotime($startDate) - strtotime($endDate);

            $dayDiff = abs(round($dayDiff / 86400));

            return $dayDiff;
        }

        echo "<br><br>";
        echo "the difference between these two dates is " . toFindDays($startDate, $endDate);
        echo "<br><br>";
        $dateOne = date_create($startDate);
        $dateTwo = date_create($endDate);
        $interval = date_diff($dateOne, $dateTwo);

        echo $interval->format('The differnce between these two dates is : %r%a days');
    }
?>

