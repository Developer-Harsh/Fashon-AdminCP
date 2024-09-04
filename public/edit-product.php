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

                        <a href="edit-product" class="btn btn-primary" style="background: #eee; color:#000;">Add
                            Image</a>

                        <br>
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
                            <label for="titleExample" class="form-label">Product Title</label>
                            <input type="text" class="form-control" id="title" aria-describedby="titleHelp"
                                placeholder="Type title">
                            <div id="titleHelp" class="form-text">Edit your product's title here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="shortNoteExample" class="form-label">Short Note</label>
                            <input type="text" class="form-control" id="shortNote" aria-describedby="shortNoteHelp"
                                placeholder="Type short note">
                            <div id="shortNoteHelp" class="form-text">Edit your product's short note here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="priceExample" class="form-label">Price with Margin</label>
                            <input type="text" class="form-control" id="price" aria-describedby="priceHelp"
                                placeholder="Type price">
                            <div id="priceHelp" class="form-text">Edit your product's price here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="discountExample" class="form-label">Product Discount</label>
                            <input type="text" class="form-control" id="discount" aria-describedby="discountHelp"
                                placeholder="Type discount">
                            <div id="discountHelp" class="form-text">Edit your product's discount here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="categoryExample" class="form-label">Product Category</label>
                            <select class="form-control" id="category" aria-describedby="categoryHelp">
                                <option>Clothing</option>
                                <option>Kids</option>
                                <option>Mens</option>
                            </select>
                            <div id="categoryHelp" class="form-text">Edit your product's category here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="keywordsExample" class="form-label">Product Keywords</label>
                            <input type="text" class="form-control" id="keywords" aria-describedby="keywordsHelp"
                                placeholder="Type keywords">
                            <div id="keywordsHelp" class="form-text">Edit your product's keywords here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="longDescExample" class="form-label">Product Long Description</label>
                            <textarea class="form-control" id="longDesc" aria-describedby="longDescHelp"
                                placeholder="Type long description"></textarea>
                            <div id="longDescHelp" class="form-text">Edit your product's long description here.
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
        .create(document.querySelector('#longDesc'), {
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

</body>

</html>