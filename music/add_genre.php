<?php
include "../db_conn.php";

$genre = $_POST['genre'];
$sched = $_POST['sched'];

$stmt = $conn->prepare("INSERT INTO music (genre, schedule) VALUES (?, ?)");
$stmt->bind_param("ss", $genre, $sched);
$stmt->execute();

header("Location: ../cms_music.php");
?>