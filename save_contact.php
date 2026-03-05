<?php
include "db.php";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if(empty($name) || empty($email) || empty($message)){
    header("Location: contact.php?error=1");
    exit();
}

$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if($stmt->execute()){
    header("Location: contact.php?success=1");
    exit();
} else {
    header("Location: contact.php?error=1");
    exit();
}
?>