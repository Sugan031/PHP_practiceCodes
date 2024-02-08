<?php
include "./connect.php";
?>
<?php
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        $stmt = $conn->prepare("SELECT COUNT(*) as count FROM persondetails WHERE email_id = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
       
        // Return a simple response string
        echo $row['count'] > 0 ? 'taken' : 'available';

        $stmt->close();
        $conn->close(); // Close the database connection
        exit;
    }
?>