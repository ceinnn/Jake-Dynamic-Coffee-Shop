<?php
include "../db_conn.php";

$id = $_POST['id'];
$genre = $_POST['genre'];
$sched = $_POST['sched'];

$stmt = $conn->prepare("UPDATE music SET genre= ?, schedule= ? WHERE idmusic= ?");
$stmt->bind_param("ssi", $genre, $sched, $id);
$stmt->execute();

header("Location: ../cms_music.php");
?>