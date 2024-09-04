<?php
include('../api/config/config.php');

$conn = new mysqli($servername, $username, $password, $dbname);

$message = isset($_GET['message']) ? $_GET['message'] : null;
$alert = isset($_GET['alert']) ? $_GET['alert'] : null;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, phone, address, password, profile_image, upi_id FROM users";
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
            <?php 
                if (isset($message)) {
                    echo "<div class='alert alert-success' role='alert'>
                            $message
                        </div>";
                }
                if (isset($alert)) {
                    echo "<div class='alert alert-danger' role='alert'>
                            $message
                        </div>";
                }
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Manage Users</h5>
                    <p class="mb-0">Here you can manage your application's users </p>

                    <br>

                    <div class="mb-3">
                        <input type="search" class="form-control" id="searchProducts" aria-describedby="searchHelp"
                            placeholder="Search Products...">
                        <div id="searchHelp" class="form-text">Search any product by typing title description or any
                            keywords
                        </div>
                    </div>

                    <div
                        style="white-space: nowrap; overflow-x: auto; overflow-y: hidden; padding: 10px; -ms-overflow-style: none; scrollbar-width: none;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Password</th>
                                    <th>Profile Image</th>
                                    <th>UPI for Refund</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                                echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                                                echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                                                echo "<td>********</td>";
                                                echo "<td><img src='" . htmlspecialchars($row['profile_image']) . "' alt='" . htmlspecialchars($row['name']) . "' height='50px' width='50px'></td>";
                                                echo "<td>" . htmlspecialchars($row['upi_id']) . "</td>";
                                                echo "<td>
                                                        <ul>
                                                            <li><a href='edit-user?id=" . urlencode($row['id']) . "'><i class='ti ti-edit'></i> Edit</a></li>
                                                            <li><a href='../api/delete_user?id=" . urlencode($row['id']) . "'><i class='ti ti-trash'></i> Delete</a></li>
                                                        </ul>
                                                    </td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='8'>No users found</td></tr>";
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
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
</body>

</html>