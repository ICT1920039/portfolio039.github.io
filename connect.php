<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $conn = new mysqli('localhost', 'root', '', 'teat');
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into feedback(name, email, message) values (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();
        echo "Feedback submitted";
        $stmt->close();
        $conn->close();
    }
?>





