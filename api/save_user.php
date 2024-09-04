<?php
include('../api/config/config.php');

$conn = new mysqli($servername, $username, $password, $dbname);

$userId = $_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $password = $conn->real_escape_string($_POST['password']);
    $upi = $conn->real_escape_string($_POST['upi']);

    if (!empty($password)) {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $updatePassword = ", password = '$password'";
    } else {
        $updatePassword = "";
    }

    $sql = "UPDATE users SET name = ?, email = ?, phone = ?, address = ?, upi_id = ? $updatePassword WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $name, $email, $phone, $address, $upi, $userId);
    
    if ($stmt->execute()) {
        echo "Data Saved successfully!";
        header("Location: /fashon/public/edit-user?id=$userId");
    } else {
        echo "Error updating record: " . $conn->error;
        header("Location: /fashon/public/edit-user?id=$userId");
    }

    $conn->close();
}

?>