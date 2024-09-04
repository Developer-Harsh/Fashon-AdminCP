<?php
include('../api/config/config.php');

$targetDir = $uploadFolder;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM site_settings WHERE id = 1";
$result = $conn->query($sql);
$settings = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $logo = '';

    if (isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
        $fileName = basename($_FILES["logo"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowedTypes) && $_FILES['logo']['size'] <= 5000000) {
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $targetFilePath)) {
                $logo = $URL . $fileName;
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file type or size.";
        }
    } else {
        $logo = $settings['logo'];
    }

    $site_name = $conn->real_escape_string($_POST['site_name']);
    $short_note = $conn->real_escape_string($_POST['short_note']);
    $keywords = $conn->real_escape_string($_POST['keywords']);
    $terms_of_service = $conn->real_escape_string($_POST['terms_of_service']);
    $privacy_policy = $conn->real_escape_string($_POST['privacy_policy']);

    $sql = "INSERT INTO site_settings (id, logo, site_name, short_note, keywords, terms_of_service, privacy_policy)
        VALUES (1, '$logo', '$site_name', '$short_note', '$keywords', '$terms_of_service', '$privacy_policy')
        ON DUPLICATE KEY UPDATE
            logo = VALUES(logo),
            site_name = VALUES(site_name),
            short_note = VALUES(short_note),
            keywords = VALUES(keywords),
            terms_of_service = VALUES(terms_of_service),
            privacy_policy = VALUES(privacy_policy)";

    if ($conn->query($sql) === TRUE) {
        echo "Settings saved successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>