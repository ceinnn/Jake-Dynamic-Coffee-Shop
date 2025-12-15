<?php
include "../db_conn.php";

$id = $_POST['id'];

$stmt = $conn->prepare("UPDATE menu SET status='active' WHERE idmenu= ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: ../archived_menu.php");
?>