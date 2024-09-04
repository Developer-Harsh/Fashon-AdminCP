<?php
include('../api/save_details.php');
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
                        <h5 class="card-title fw-semibold mb-4">App Details</h5>
                        <p class="mb-0">Here you can manage your application </p>

                        <br>

                        <form action="../api/save_details" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <img id="logo-preview"
                                        src="<?php echo isset($settings['logo']) && !empty($settings['logo']) ? $settings['logo'] : '../assets/images/profile/user-1.jpg'; ?>"
                                        class="card-img-top" style="border-radius:14px !important;margin-bottom:10px;"
                                        alt="...">
                                    <input type="file" name="logo" class="form-control" id="logo" accept="image/*"
                                        onchange="previewImage(event)" required>
                                </div>
                            </div>

                            <br>

                            <div class="mb-3">
                                <label for="titleExample" class="form-label">Site Name Title</label>
                                <input type="text" name="site_name" class="form-control" id="title"
                                    aria-describedby="titleHelp" placeholder="Type title"
                                    value="<?php echo htmlspecialchars($settings['site_name'] ?? ''); ?>">
                                <div id="titleHelp" class="form-text">Add your site name here.</div>
                            </div>

                            <div class="mb-3">
                                <label for="shortNoteExample" class="form-label">Short Note</label>
                                <input type="text" name="short_note" class="form-control" id="shortNote"
                                    aria-describedby="shortNoteHelp" placeholder="Type short note"
                                    value="<?php echo htmlspecialchars($settings['short_note'] ?? ''); ?>">
                                <div id="shortNoteHelp" class="form-text">Enter your site short note here.</div>
                            </div>

                            <div class="mb-3">
                                <label for="keywordsExample" class="form-label">Site Keywords</label>
                                <input type="text" name="keywords" class="form-control" id="keywords"
                                    aria-describedby="keywordsHelp" placeholder="Type keywords"
                                    value="<?php echo htmlspecialchars($settings['keywords'] ?? ''); ?>">
                                <div id="keywordsHelp" class="form-text">Enter your site keywords here.</div>
                            </div>

                            <div class="mb-3">
                                <label for="termsDesc" class="form-label">Terms of Service</label>
                                <textarea name="terms_of_service" class="form-control" id="termsDesc"
                                    aria-describedby="longDescHelp"
                                    placeholder="Type terms of service"><?php echo htmlspecialchars($settings['terms_of_service'] ?? ''); ?></textarea>
                                <div id="longDescHelp" class="form-text">Enter your terms of service here.</div>
                            </div>

                            <div class="mb-3">
                                <label for="privacyDesc" class="form-label">Privacy Policy</label>
                                <textarea name="privacy_policy" class="form-control" id="privacyDesc"
                                    aria-describedby="longDescHelp"
                                    placeholder="Type privacy policy"><?php echo htmlspecialchars($settings['privacy_policy'] ?? ''); ?></textarea>
                                <div id="longDescHelp" class="form-text">Enter your privacy policy here.</div>
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