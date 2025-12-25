<?php
    include("db.php");
    $id = $_GET["id"];
    $stmt = $conn->prepare("UPDATE tasks set is_completed = 1 where id = (?)");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("location:index.php");
    exit();

?>