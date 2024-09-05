<?php
include('../api/config/config.php');

$targetDir = $uploadFolder;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Invalid category ID.");
}

$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

if (!$product) {
    die("Product not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
    $maxFileSize = 5000000;

    function uploadImage($fileInputName, $targetDir, $allowedTypes, $maxFileSize, $existingImage = '') {
        if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] == 0) {
            $fileType = strtolower(pathinfo($_FILES[$fileInputName]['name'], PATHINFO_EXTENSION));

            if (in_array($fileType, $allowedTypes) && $_FILES[$fileInputName]['size'] <= $maxFileSize) {
                $fileName = uniqid() . '.' . $fileType;
                $targetFilePath = $targetDir . $fileName;

                if (move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $targetFilePath)) {
                    return $URL . $fileName;
                } else {
                    echo "Error uploading file $fileInputName.";
                }
            } else {
                echo "Invalid file type or size for $fileInputName.";
            }
        }
        
        return $existingImage;
    }

    $img_one = uploadImage('img_one', $targetDir, $allowedTypes, $maxFileSize, $product['img_one']);
    $img_two = uploadImage('img_two', $targetDir, $allowedTypes, $maxFileSize, $product['img_two']);
    $img_three = uploadImage('img_three', $targetDir, $allowedTypes, $maxFileSize, $product['img_three']);
    $img_four = uploadImage('img_four', $targetDir, $allowedTypes, $maxFileSize, $product['img_four']);
    $img_five = uploadImage('img_five', $targetDir, $allowedTypes, $maxFileSize, $product['img_five']);
    $img_six = uploadImage('img_six', $targetDir, $allowedTypes, $maxFileSize, $product['img_six']);

    // Save product data
    $video_url = $conn->real_escape_string($_POST['video_url']);
    $title = $conn->real_escape_string($_POST['title']);
    $short_note = $conn->real_escape_string($_POST['short_note']);
    $price = $conn->real_escape_string($_POST['price']);
    $discount = $conn->real_escape_string($_POST['discount']);
    $category = $conn->real_escape_string($_POST['category']);
    $keywords = $conn->real_escape_string($_POST['keywords']);
    $long_description = $conn->real_escape_string($_POST['long_description']);

    $sql = "INSERT INTO products (id, video_url, title, short_note, price, discount, category, keywords, long_description, img_one, img_two, img_three, img_four, img_five, img_six)
        VALUES ($id, '$video_url', '$title', '$short_note', '$price', '$discount', '$category', '$keywords', '$long_description', '$img_one', '$img_two', '$img_three', '$img_four', '$img_five', '$img_six')
        ON DUPLICATE KEY UPDATE
            video_url = VALUES(video_url),
            title = VALUES(title),
            short_note = VALUES(short_note),
            price = VALUES(price),
            discount = VALUES(discount),
            category = VALUES(category),
            keywords = VALUES(keywords),
            long_description = VALUES(long_description),
            img_one = VALUES(img_one),
            img_two = VALUES(img_two),
            img_three = VALUES(img_three),
            img_four = VALUES(img_four),
            img_five = VALUES(img_five),
            img_six = VALUES(img_six)";

    if ($conn->query($sql) === TRUE) {
        header("Location: /fashon/public/manage-products?message=Product updated successfully!");
        exit();
    } else {
        header("Location: /fashon/public/manage-products?alert=Error: " . $conn->error);
        exit();
    }

    $conn->close();
}
?>
