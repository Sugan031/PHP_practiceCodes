<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="exceptions.php" method="post">
            Enter your age : <input type="text" name="age"><br>
           Voter Id number : <input type="text" name="voterID"><br>
            <input type="submit" value="submit" name="submit"><br>
            <b>Check you are eligible or not</b>


            
        </form>
</body>
</html>
<?php
    function checkAge($number){
        if($number<18){
            throw new Exception("You are not eligible candidate to vote");
        }
        return true;
    }
    try{
        if(isset($_POST["submit"])){
        checkAge($_POST["age"]);
        echo "<b>Message : You are eligible candidate to vote<b>";
        }
    }
    catch(Exception $e1){
        echo "<b>Message : {$e1->getMessage()}<b>";
    }

    class CheckVoterIdException extends Exception{
        public function errorMessage(){
            $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid voter number';
    return $errorMsg;
        }
    }

    try{
        $regex = '/^[0-9]{10}$/';
        $voterid = $_POST["voterID"];
        if(isset($_POST["submit"])){
            if(preg_match($regex, $voterid)==false){
                throw new CheckVoterIdException($_POST["voterID"]);
            }
            else{
                echo "<b>Succesful </b>";
            }
        }
    }
    catch(CheckVoterIdException $e1){
        echo $e1->errorMessage();
    }


?>