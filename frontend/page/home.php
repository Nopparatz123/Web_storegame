<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./frontend/assets/css/global.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./frontend/assets/js/main.js"></script>
</head>

<body>

    <div class="toast-container position-fixed bottom-0 end-0 mb-2 p-3">
        <div id="welcomeToast" class="toast shadow-sm" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body text-primary">
                ยินดีต้อนรับสู่เว็บของเรา !!
            </div>
        </div>
    </div>

    <video autoplay loop muted playsinline class="blackgroud-clip">
        <source src="./frontend/assets/img/video.mp4">
    </video>

    <div class="container-fluid" style="padding: 15rem 22rem;">
        <?php include './frontend/includes/modal.php'; ?>
        <?php include './frontend/includes/navbar.php'; ?>
        <div class="title text-center" style="margin-bottom: 50px;">
            <h1 class="text-light fw-bold" style="font-size: 70px;">ยินดีต้อนรับสู่เว็บควยๆ</h1>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis labor</p>
        </div>
        <marquee class="text-light mb-5"><span class="badge bg-danger me-2"><i class="bi bi-megaphone-fill"></i>
                ประกาศ</span>ยังไม่เสร็จไอ้สัส !!</marquee>
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 rounded-4" src="./frontend/assets/img/2.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 rounded-4" src="./frontend/assets/img/3.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 rounded-4" src="./frontend/assets/img/4.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php require './frontend/includes/footer.php'; ?>
</body>

</html>