<?php

if (!isset($_POST["submit"])) {
    header("Location: index.php?valid=false");
    exit;
}

// variables 
$userID = filter_input(INPUT_POST, "ID", FILTER_SANITIZE_NUMBER_INT);
$userFname = filter_input(INPUT_POST, "FNAME", FILTER_SANITIZE_SPECIAL_CHARS);
$userLname = filter_input(INPUT_POST, "LNAME", FILTER_SANITIZE_SPECIAL_CHARS);
$userContact = filter_input(INPUT_POST, "CONTACT", FILTER_SANITIZE_NUMBER_INT);

session_start();
if (empty($userID) || empty($userFname) || empty($userLname) || empty($userContact)) {
    echo "<script> alert('Input Something') </script>";
    header("Location: index.php?valid=false");
    exit;
}

include_once 'connection.php';

$sql = "insert into info (ID, FNAME, LNAME,CONTACT) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("issi", $userID, $userFname, $userLname, $userContact);
$stmt->execute();


header("Location: index.php?valid=true");
?>