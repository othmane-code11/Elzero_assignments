<?php
    include("db.php");
    $id = $_GET["id"];
    $stmt = $conn->prepare("UPDATE tasks set is_completed = 2 where id = (?)");
    $stmt->bind_param("d", $id);
    $stmt->execute();
    $stmt->close();
?>