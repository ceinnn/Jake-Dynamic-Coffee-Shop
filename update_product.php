<?php
include "db_conn.php";

$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$price = $_POST['price'];

$stmt = $conn->prepare("UPDATE menu SET name= ?, description= ?, price= ? WHERE idmenu= ?");
$stmt->bind_param("ssdi", $name, $desc, $price, $id);
$stmt->execute();

header("Location: cms_menu.php");
?>