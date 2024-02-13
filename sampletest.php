<script>
    employeeDetails = {
    firstName: "John",
    lastName: "Doe",
    age: 23,
    Salary: "$250k",
    Domain: "Development"

    

};


</script>

<?php
    $myfile = fopen("/var/www/html/sample.txt", "w");
    $textline = "<script>JSON.stringify(employeeDetails)</script>";
    fwrite($myfile,$textline);
    fclose($myfile);

    echo "completed";
?>