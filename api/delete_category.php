<?php
include('../api/config/config.php');

$conn = new mysqli($servername, $username, $password, $dbname);

$userId = $_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $userId = intval($_GET['id']);

    $sql = "DELETE FROM categories WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        header("Location: /fashon/public/manage-categories?message=Category deleted successfully");
        exit();
    } else {
        header("Location: /fashon/public/manage-categories?alert=Error: $conn->error");
        exit();
    }
} else {
    header("Location: /fashon/public/manage-categories");
    exit();
}

?>