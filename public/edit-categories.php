<?php
$id = $_GET['id'];

include('../api/update_category.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashon - E-commerce</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
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
                        <h5 class="card-title fw-semibold mb-4">Edit Categories</h5>
                        <p class="mb-0">Here you can edit your application's products categories </p>

                        <br>

                        <form action="<?php "../api/update_category?id=" . $id ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <img id="logo-preview"
                                        src="<?php echo isset($settings['image']) && !empty($settings['image']) ? $settings['image'] : '../assets/images/profile/user-1.jpg'; ?>"
                                        class="card-img-top" style="border-radius:14px !important;margin-bottom:10px;"
                                        alt="...">
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*"
                                        onchange="previewImage(event)">
                                </div>
                            </div>

                            <br>

                            <div class="mb-3">
                                <label for="categoryExample" class="form-label">Product Category</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    aria-describedby="categoryHelp" placeholder="Type category" value="<?php echo isset($settings['name']) ? htmlspecialchars($settings['name']) : ''; ?>">
                                <div id="categoryHelp" class="form-text">Edit your category name here.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="shortNoteExample" class="form-label">Short Note</label>
                                <input type="text" class="form-control" name="description" id="description"
                                    aria-describedby="shortNoteHelp" placeholder="Type short note" value="<?php echo isset($settings['description']) ? htmlspecialchars($settings['description']) : ''; ?>">
                                <div id="shortNoteHelp" class="form-text">Edit your category short note here.
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
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
    <script>
    function previewImage(event) {
        const fileInput = event.target;
        const file = fileInput.files[0];
        const preview = document.getElementById('logo-preview');

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