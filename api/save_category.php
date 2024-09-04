<?php
include('../api/config/config.php');

$targetDir = $uploadFolder;

$conn = new mysqli($servername, $username, $password, $dbname);

// $userId = $_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM categories WHERE id = $userId";
// $result = $conn->query($sql);
// $settings = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowedTypes) && $_FILES['image']['size'] <= 5000000) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                $image = $URL . $fileName;
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file type or size.";
        }
    } else {
        $image = $settings['image'];
    }

    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);

    $sql = "INSERT INTO categories (name, description, image)
        VALUES ('$name', '$description', '$image')
        ON DUPLICATE KEY UPDATE
            name = VALUES(name),
            description = VALUES(description),
            image = VALUES(image)";

    if ($conn->query($sql) === TRUE) {
        header("Location: /fashon/public/manage-categories?message=Category added successfully!");
        exit();
    } else {
        header("Location: /fashon/public/manage-categories?alert=Error: $conn->error");
        exit();
    }

    $conn->close();
}
?>