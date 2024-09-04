<?php
include('../api/config/config.php');

$conn = new mysqli($servername, $username, $password, $dbname);

$message = isset($_GET['message']) ? $_GET['message'] : null;
$alert = isset($_GET['alert']) ? $_GET['alert'] : null;

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
                                <?php if ($result->num_rows > 0): ?>
                                    <?php while($row = $result->fetch_assoc()): ?>
                                        <tr>
                                            <td><img src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>"
                                                    height="50px" width="50px"></td>
                                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                                            <td><?php echo htmlspecialchars($row['description']); ?></td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="edit-categories?id=<?php echo $row['id']; ?>"><i class="ti ti-edit"></i> Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="../api/delete_category?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this category?');"><i class="ti ti-trash"></i> Delete</a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="4">No categories found.</td>
                                    </tr>
                                <?php endif; ?>
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
    <script>
    CKEDITOR.replace('longDesc');
    </script>
</body>

</html>