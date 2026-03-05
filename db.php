<?php
$conn = mysqli_connect(
    "sql213.infinityfree.com",
    "if0_41305787",
    "DbPass123",
    "if0_41305787_if0_123456_contacts"
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>