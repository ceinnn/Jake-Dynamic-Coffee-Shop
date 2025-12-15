<?php
include "../db_conn.php";

$id = $_POST['id'];

$stmt = $conn->prepare("UPDATE music SET status='active' WHERE idmusic= ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: ../archived_music.php");
?>