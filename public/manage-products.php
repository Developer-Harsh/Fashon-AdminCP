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
                        <h5 class="card-title fw-semibold mb-4">Manage Products</h5>
                        <p class="mb-0">Here you can manage your application's products </p>

                        <br>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="search" class="form-control" id="searchProducts" aria-describedby="searchHelp" placeholder="Search Products...">
                                </div>
                                <div class="col-md-4">
                                <a href="new-product" class="btn btn-primary">Add Product</a>
                                </div>
                            </div>
                            <div id="searchHelp" class="form-text">Search any product by typing title description or any
                                keywords
                            </div>
                        </div>

                        <div
                            style="white-space: nowrap; overflow-x: auto; overflow-y: hidden; padding: 10px; -ms-overflow-style: none; scrollbar-width: none;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Product Short Note</th>
                                        <th>Keywords</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Category</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="../assets/images/products/s5.jpg" alt="Category image"
                                                height="50px" width="50px"></td>
                                        <td>Laptop</td>
                                        <td>Valuable and end-to-go laptop, purchase now at cheapest price.</td>
                                        <td>Laptop, Computer, Mouse, Printer</td>
                                        <td>₹36000</td>
                                        <td>20%</td>
                                        <td>Computers</td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="edit-product"><i class="ti ti-edit"></i> Edit</a>
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
</body>

</html>