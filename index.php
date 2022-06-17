<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="properties/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="dist/css/lightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="dist/output.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<style>
.navbar {
    background-color: #2d2d2d;
    color: #ffff;
    font-size: 15px;
}

.footer {
    background-color: #2d2d2d;
    color: white;

    bottom: 0;
    left: 0;
    width: 100%;
}

</style>

<body>


    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?page=home">
                <img src="properties/FPHLogoNobg.png" width="30">
                FPHaikal Web
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=fphphoto">FPH Photography</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=fphtypo">FPH Typography</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=link">Link</a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    

<?php 
include 'libs.php';
?> 

</body>

        <script src="dist/js/lightbox-plus-jquery.js"></script>

        <footer class="footer text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-light" href="https://fea5-125-166-96-26.ap.ngrok.io/Web%20FPHaikal/">FPHaikal</a>
            </div>
            <!-- Copyright -->
        </footer>

</html>