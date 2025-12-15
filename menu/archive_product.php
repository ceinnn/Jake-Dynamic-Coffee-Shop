<?php
include "../db_conn.php";

$id = $_POST['id'];

$stmt = $conn->prepare("UPDATE menu SET status='archived' WHERE idmenu= ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: ../cms_menu.php");
?>