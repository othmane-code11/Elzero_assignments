<?php
    include("db.php");
    $id = $_GET["id"];
    $stmt = $conn->prepare("DELETE FROM tasks where id = (?)");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("location: index.php");
    exit();
?>