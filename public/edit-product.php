<?php
$id = $_GET['id'];

include('../api/config/config.php');
include('../api/update_product.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM categories";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashon - E-commerce</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <?php include('components/side-bar.php') ?>
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <?php include('components/header.php') ?>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Edit Product</h5>
                        <p class="mb-0">Here you can edit your application's products </p>

                        <br>
                        <br>

                        <form action="<?php "../api/update_product?id=" . $id ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="row" id="image-container">
                                <div class="col-md-2">
                                    <img id="one-preview"
                                        src="<?php echo isset($product['img_one']) && !empty($product['img_one']) ? $URL . $product['img_one'] : '../assets/images/profile/user-1.jpg'; ?>"
                                        class="card-img-top" style="border-radius:14px !important;margin-bottom:10px;"
                                        alt="...">
                                    <input type="file" name="img_one" class="form-control" id="img_one" accept="image/*"
                                        onchange="previewImage(event, 'one-preview')">
                                </div>
                                <div class="col-md-2">
                                    <img id="two-preview"
                                        src="<?php echo isset($product['img_two']) && !empty($product['img_two']) ? $URL . $product['img_two'] : '../assets/images/profile/user-1.jpg'; ?>"
                                        class="card-img-top" style="border-radius:14px !important;margin-bottom:10px;"
                                        alt="...">
                                    <input type="file" name="img_two" class="form-control" id="img_two" accept="image/*"
                                        onchange="previewImage(event, 'two-preview')">
                                </div>
                                <div class="col-md-2">
                                    <img id="three-preview"
                                        src="<?php echo isset($product['img_three']) && !empty($product['img_three']) ? $URL . $product['img_three'] : '../assets/images/profile/user-1.jpg'; ?>"
                                        class="card-img-top" style="border-radius:14px !important;margin-bottom:10px;"
                                        alt="...">
                                    <input type="file" name="img_three" class="form-control" id="img_three"
                                        accept="image/*" onchange="previewImage(event, 'three-preview')">
                                </div>
                                <div class="col-md-2">
                                    <img id="four-preview"
                                        src="<?php echo isset($product['img_four']) && !empty($product['img_four']) ? $URL . $product['img_four'] : '../assets/images/profile/user-1.jpg'; ?>"
                                        class="card-img-top" style="border-radius:14px !important;margin-bottom:10px;"
                                        alt="...">
                                    <input type="file" name="img_four" class="form-control" id="img_four"
                                        accept="image/*" onchange="previewImage(event, 'four-preview')">
                                </div>
                                <div class="col-md-2">
                                    <img id="five-preview"
                                        src="<?php echo isset($product['img_five']) && !empty($product['img_five']) ? $URL . $product['img_five'] : '../assets/images/profile/user-1.jpg'; ?>"
                                        class="card-img-top" style="border-radius:14px !important;margin-bottom:10px;"
                                        alt="...">
                                    <input type="file" name="img_five" class="form-control" id="img_five"
                                        accept="image/*" onchange="previewImage(event, 'five-preview')">
                                </div>
                                <div class="col-md-2">
                                    <img id="six-preview"
                                        src="<?php echo isset($product['img_six']) && !empty($product['img_six']) ? $URL . $product['img_six'] : '../assets/images/profile/user-1.jpg'; ?>"
                                        class="card-img-top" style="border-radius:14px !important;margin-bottom:10px;"
                                        alt="...">
                                    <input type="file" name="img_six" class="form-control" id="img_six" accept="image/*"
                                        onchange="previewImage(event, 'six-preview')">
                                </div>
                            </div>

                            <br>

                            <div class="mb-3">
                                <label for="videoUrlExample" class="form-label">Product Video URL</label>
                                <input type="text" class="form-control" name="video_url" id="video_url"
                                    aria-describedby="videoUrlHelp" placeholder="Type video url"
                                    value="<?php echo htmlspecialchars($product['video_url']); ?>">
                                <div id="videoUrlHelp" class="form-text">Edit your product's video url here.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="titleExample" class="form-label">Product Title</label>
                                <input type="text" class="form-control" name="title" id="title"
                                    aria-describedby="titleHelp" placeholder="Type title"
                                    value="<?php echo htmlspecialchars($product['title']); ?>">
                                <div id="titleHelp" class="form-text">Edit your product's title here.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="shortNoteExample" class="form-label">Short Note</label>
                                <input type="text" class="form-control" name="short_note" id="short_note"
                                    aria-describedby="shortNoteHelp" placeholder="Type short note"
                                    value="<?php echo htmlspecialchars($product['short_note']); ?>">
                                <div id="shortNoteHelp" class="form-text">Edit your product's short note here.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="priceExample" class="form-label">Price with Margin</label>
                                <input type="text" class="form-control" name="price" id="price"
                                    aria-describedby="priceHelp" placeholder="Type price"
                                    value="<?php echo htmlspecialchars($product['price']); ?>">
                                <div id="priceHelp" class="form-text">Edit your product's price here.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="discountExample" class="form-label">Product Discount</label>
                                <input type="text" class="form-control" name="discount" id="discount"
                                    aria-describedby="discountHelp" placeholder="Type discount"
                                    value="<?php echo htmlspecialchars($product['discount']); ?>">
                                <div id="discountHelp" class="form-text">Edit your product's discount here.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="categoryExample" class="form-label">Product Category</label>
                                <select class="form-control" name="category" id="category"
                                    aria-describedby="categoryHelp"
                                    value="<?php echo htmlspecialchars($product['category']); ?>">
                                    <?php if ($result->num_rows > 0): ?>
                                    <?php while($row = $result->fetch_assoc()): ?>
                                    <option><?php echo htmlspecialchars($row['name']); ?></option>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                    <option>No categories found.</option>
                                    <?php endif; ?>
                                </select>
                                <div id="categoryHelp" class="form-text">Edit your product's category here.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="keywordsExample" class="form-label">Product Keywords</label>
                                <input type="text" class="form-control" name="keywords" id="keywords"
                                    aria-describedby="keywordsHelp" placeholder="Type keywords"
                                    value="<?php echo htmlspecialchars($product['keywords']); ?>">
                                <div id="keywordsHelp" class="form-text">Edit your product's keywords here.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="longDescExample" class="form-label">Product Long Description</label>
                                <textarea class="form-control" name="long_description" id="long_description"
                                    aria-describedby="longDescHelp" placeholder="Type long description"><?php echo htmlspecialchars($product['long_description']); ?></textarea>
                                <div id="longDescHelp" class="form-text">Edit your product's long description here.
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Developed by HK Singh on <a href="https://github.com/Developer-Harsh/"
                            target="_blank" class="pe-1 text-primary text-decoration-underline">Gihtub>
                            Developer-Harsh</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>

    <script type="importmap">
        {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
                }
            }
        </script>

    <script type="module">
    import {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#long_description'), {
            plugins: [Essentials, Bold, Italic, Font, Paragraph],
            toolbar: {
                items: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            }
        })
        .then( /* ... */ )
        .catch( /* ... */ );
    </script>
    <script>
    function previewImage(event, id) {
        const fileInput = event.target;
        const file = fileInput.files[0];
        const preview = document.getElementById(id);

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            reader.readAsDataURL(file);
        }
    }
    </script>
</body>

</html>