<?php
$Avengers = ["Iron man", "Captain America", "Thor", "Hulk"];
print_r($Avengers);
echo "<br>";
$Justice_league = ["Super man", "Batman", "Flash", "Aquaman"];
print_r($Justice_league);
echo "<br>";
$Heroes = array_merge($Avengers, $Justice_league);
print_r($Heroes);
echo "<br>";

$Avengers_SuperPowers = ["Iron man" => "Arc reactor", "Captain America" => "Super Solder", "Thor" => "God of Thunder", "Hulk" => "Suerhuman Strength"];
print_r($Avengers_SuperPowers);
echo "<br>";
$Avengers_SuperPowers1 = [$Avengers[0] => "Arc reactor", $Avengers[1] => "Super Solder", $Avengers[2] => "God of Thunder", $Avengers[3] => "Suerhuman Strength"];
print_r($Avengers_SuperPowers1);
echo "<br>";

$Iplteams_details = [
    ['Team' => "CSK", 'Captain' => "Dhoni", 'Trophies' => 5],
    ['Team' => "MI", 'Captain' => "Hardik", 'Trophies' => 5],
    ['Team' => "RCB", 'Captain' => "Faf", 'Trophies' => 0],
    ['Team' => "RR", 'Captain' => "Samson", 'Trophies' => 1],
];

print_r($Iplteams_details);
echo "<br>";
print_r($Iplteams_details[0]);
echo "<br>";
print_r($Iplteams_details[1]['Team']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><u>Hello world</u></div>
</body>
</html>
<?php
function prod(&$number)
{
    return $number * $number;
}
$number = 10;
echo prod($number);

prod($number);
echo $number;

?>