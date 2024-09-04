<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashon - E-commerce</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
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
                        <h5 class="card-title fw-semibold mb-4">Add Categories</h5>
                        <p class="mb-0">Here you can add your application's products categories </p>

                        <br>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="card">
                                    <img src="../assets/images/products/s4.jpg" class="card-img-top" alt="...">
                                    <a href="edit-product" class="btn btn-primary w-100 py-1 fs-1 rounded-1">Change</a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="categoryExample" class="form-label">Product Category</label>
                            <input type="text" class="form-control" id="category" aria-describedby="categoryHelp"
                                placeholder="Type category">
                            <div id="categoryHelp" class="form-text">Enter your category name here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="shortNoteExample" class="form-label">Short Note</label>
                            <input type="text" class="form-control" id="shortNote" aria-describedby="shortNoteHelp"
                                placeholder="Type short note">
                            <div id="shortNoteHelp" class="form-text">Enter your category short note here.
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary">Save</a>
                    </div>
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
    CKEDITOR.replace('longDesc');
    </script>
</body>

</html>