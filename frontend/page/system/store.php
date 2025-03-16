<?php
    if(!isset($_SESSION['user_login'])){
        header("Location: /Web_storegame/login");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <video autoplay loop muted playsinline class="blackgroud-clip">
        <source src="./frontend/assets/img/video.mp4">
    </video>
    <div class="container" style="margin-top: 150px; margin-bottom: 200px;">

        <h5 class="text-secondary">รายการหมวดหมู่</h5>
        <p class="text-light">Category List</p>
        <div class="row g-4">
            <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="card" style="background-color: #1a1a1c; border: 1px solid white;">
                    <div class="card-body">
                        <img src="https://imgs.crazygames.com/car-games-car-racing-game_16x9/20240628180656/car-games-car-racing-game_16x9-cover?metadata=none&quality=40&width=1200&height=630&fit=crop" class="card-img-top rounded-2 mb-2" alt="">
                        <h5 class="text-light">Freefire</h5>
                        <p class="text-danger">0 สินค้า</p>
                        <div class="view-more">
                            <a href="" class="btn btn-outline-light">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require './frontend/includes/footer.php'; ?>

    <script>
      AOS.init();
    </script>
</body>
</html>