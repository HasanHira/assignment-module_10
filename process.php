<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="assets/images/bosiny-logo.svg">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/x-icon" href="assets/images/bosiny-logo.svg">
    <title>Document</title>
    <!-- Google fonts -->
    <!-- Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- Noto Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- All css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- header start -->
    <header>
        <div class="header-sticky sticky-top border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <img class="bosiny-logo" src="assets/images/bosiny-logo.svg" alt="Bosiny header Logo">
                        <span class="d-none d-sm-block fs-4 ms-3 logo-text">bosiny</span>
                    </a>
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav nav bosiny-nav" role="list">
                                <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                                <li class="nav-item"><a href="portfolio.html" class="nav-link">Portfolio</a></li>
                                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link active" aria-current="page">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- main start -->
    <main>

        <!-- Page Head section start -->
        <section class="page-head section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center page-title">
                            <h2 class="mb-3 fw-semibold">Contact</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <nav class="d-flex justify-content-center page-path" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Title section end -->

        <section class="form-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        


<!-- main start -->
<main>

    <section class="page-head">
        <div class="container">
            <h1 class="hero-heading"><?php echo $page_title; ?></h1>
        </div>
    </section>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = trim($_POST["fname"]);
        $email = trim($_POST["email"]);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);

        if(empty($fname) || empty($email) || empty($subject) || empty($message)) {
            echo "All fields are required and must not be empty.";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } else {; ?>

        <div class="container">
            <h2 class="sucess-text">
                <?php echo "Registration successful. Welcome, $fname!"; ?>
            </h2>
        </div>
            
        <?php
        }
        $user_data = [$fname, $email, $subject, $message];
        $fp = fopen('users.csv', 'a');
        fputcsv($fp, $user_data);
        fclose($fp);
    }
?>


</section>



















    </main>
    <!-- main end -->

    <!-- footer start -->
    <footer>
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center justify-content-sm-between align-items-center py-3 border-top">
                <div class="col-md-6 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        <img class="bosiny-footer-logo" src="assets/images/bosiny-logo.svg" alt="Bosiny footer logo">
                    </a>
                    <p class="mb-3 mb-md-0 text-body-secondary"><span class="d-none d-sm-inline-block logo-text">bosiny</span> &copy; 2023 Company, Inc</p>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex" role="list">
                    <li class="ms-3"><a class="text-body-secondary" href="#"><img class="bi bi-twitter" src="assets/icons/twitter.svg" alt=""></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><img class="bi bi-instagram" src="assets/icons/instagram.svg" alt=""></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><img class="bi bi-facebook" src="assets/icons/facebook.svg" alt=""></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- Js -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>