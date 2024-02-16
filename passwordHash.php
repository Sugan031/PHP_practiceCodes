<?php
    require("./connect.php");
    $id=115;

    $pass = "Kris@1234";
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    if(password_verify($pass,$hash)){
        echo "true";
    }
    else{
        echo "pass";
    }
    echo password_verify($pass,$hash);
    echo $hash;
    $stmt = $conn->prepare("UPDATE  person_details SET password=? WHERE id = ? ");
    $stmt->bind_param("si", $hash, $id);
    $result = $stmt->execute();
    $stmt->close();
    $conn->close();

?>