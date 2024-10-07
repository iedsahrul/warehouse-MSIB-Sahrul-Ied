<?php
include_once 'Database.php';
$database = new Database();
$db = $database->getConnection();

if (isset($_GET['id'])) {
    $query = "DELETE FROM gudang WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
}

header("Location: Index.php");
?>