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
                        <h5 class="card-title fw-semibold mb-4">Edit User</h5>
                        <p class="mb-0">Here you can edit your application's user </p>

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
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                placeholder="Type name">
                            <div id="nameHelp" class="form-text">Edit user's name here.</div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Type email">
                            <div id="emailHelp" class="form-text">Edit user's email here.</div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" aria-describedby="phoneHelp"
                                placeholder="Type phone number">
                            <div id="phoneHelp" class="form-text">Edit user's phone number here.</div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" aria-describedby="addressHelp"
                                placeholder="Type address">
                            <div id="addressHelp" class="form-text">Edit user's address here.</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" aria-describedby="passwordHelp"
                                placeholder="Type password">
                            <div id="passwordHelp" class="form-text">Edit user's password here.</div>
                        </div>

                        <div class="mb-3">
                            <label for="upi" class="form-label">UPI for Refund</label>
                            <input type="text" class="form-control" id="upi" aria-describedby="upiHelp"
                                placeholder="Type UPI ID for refund">
                            <div id="upiHelp" class="form-text">Edit user's UPI ID for refunds here.</div>
                        </div>

                        <a href="#" class="btn btn-primary">Save</a>
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
    CKEDITOR.replace('longDesc');
    </script>
</body>

</html>