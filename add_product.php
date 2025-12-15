<?php
include "db_conn.php";

$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];

$stmt = $conn->prepare("INSERT INTO menu (name, description, price) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $name, $desc, $price);
$stmt->execute();

header("Location: cms_menu.php");
?>