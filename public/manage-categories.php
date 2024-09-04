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
                        <h5 class="card-title fw-semibold mb-4">Manage Categories</h5>
                        <p class="mb-0">Here you can manage your application's products categories </p>

                        <br>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="search" class="form-control" id="searchCategory"
                                        aria-describedby="searchHelp" placeholder="Search Categories...">
                                </div>
                                <div class="col-md-4">
                                    <a href="new-categories" class="btn btn-primary">Add Category</a>
                                </div>
                            </div>
                            <div id="searchHelp" class="form-text">Search any category by typing their names
                            </div>
                        </div>

                        <div
                            style="white-space: nowrap; overflow-x: auto; overflow-y: hidden; padding: 10px; -ms-overflow-style: none; scrollbar-width: none;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="../assets/images/products/s5.jpg" alt="Category image"
                                                height="50px" width="50px"></td>
                                        <td>Kids</td>
                                        <td>Here you can find kids related products.</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="edit-categories"><i class="ti ti-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ti ti-trash"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="../assets/images/products/s7.jpg" alt="Category image"
                                                height="50px" width="50px"></td>
                                        <td>Mens</td>
                                        <td>Here you can find mens related products.</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="edit-categories"><i class="ti ti-edit"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ti ti-trash"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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