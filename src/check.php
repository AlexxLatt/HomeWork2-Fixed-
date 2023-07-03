<?php
require_once('db.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO `users`(name,phone,email) VALUES ('$name','$phone','$email')";
if ($conn->query($sql)) {
    header('Location: index.php?success=true');
} else {
    header('Location: index.php?success=false');
}
?>