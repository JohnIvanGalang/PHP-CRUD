<?php

include_once 'connection.php';

$sql = "delete from info where id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();

header("Location: index.php");
exit;

?>