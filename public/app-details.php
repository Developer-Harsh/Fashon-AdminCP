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
                        <h5 class="card-title fw-semibold mb-4">App Details</h5>
                        <p class="mb-0">Here you can manage your application </p>

                        <br>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="card">
                                    <img src="../assets/images/products/s4.jpg" class="card-img-top" alt="...">
                                    <a href="edit-product" class="btn btn-primary w-100 py-1 fs-1 rounded-1">Change Logo</a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="titleExample" class="form-label">Site Name Title</label>
                            <input type="text" class="form-control" id="title" aria-describedby="titleHelp"
                                placeholder="Type title">
                            <div id="titleHelp" class="form-text">Add your site name here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="shortNoteExample" class="form-label">Short Note</label>
                            <input type="text" class="form-control" id="shortNote" aria-describedby="shortNoteHelp"
                                placeholder="Type short note">
                            <div id="shortNoteHelp" class="form-text">Enter your site short note here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="keywordsExample" class="form-label">Site Keywords</label>
                            <input type="text" class="form-control" id="keywords" aria-describedby="keywordsHelp"
                                placeholder="Type keywords">
                            <div id="keywordsHelp" class="form-text">Enter your site keywords here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="longDescExample" class="form-label">Terms of Service</label>
                            <textarea class="form-control" id="termsDesc" aria-describedby="longDescHelp"
                                placeholder="Type terms of service"></textarea>
                            <div id="longDescHelp" class="form-text">Enter your terms of service here.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="longDescExample" class="form-label">Privacy Policy</label>
                            <textarea class="form-control" id="privacyDesc" aria-describedby="longDescHelp"
                                placeholder="Type privacy policy"></textarea>
                            <div id="longDescHelp" class="form-text">Enter your privacy policy here.
                            </div>
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
        .create(document.querySelector('#privacyDesc'), {
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

            ClassicEditor
        .create(document.querySelector('#termsDesc'), {
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