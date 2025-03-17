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
    <style>   
    .card{
        background-color: transparent;
        border: 1px solid white;
        backdrop-filter: blur(10px);
        border-radius: 20px;
    }
    </style>
</head>
<body>
    <video autoplay loop muted playsinline class="blackgroud-clip">
        <source src="./frontend/assets/img/video.mp4">
    </video>
    
    <div class="container text-center" style="margin-top: 200px; margin-bottom: 350px;">
        <div class="row d-flex justify-content-center g-5">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3"> 
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="./frontend/assets/img/voucher.png" alt="Card image cap" style="width: 85%; height: auto;">
                        <h3 class="card-title text-primary mt-2">ซองอั่งเปา</h3>
                        <p class="card-text text-light">เติมเงินผ่านซองอั่งเปา TrueWallet </p>
                        <a href="#" class="btn btn-primary">เติมเงิน</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="./frontend/assets/icon/gift-card.png" alt="Card image cap" style="width: 60%; height: auto;">
                        <h3 class="card-title  text-primary mt-2">กรอกโค้ด</h5>
                        <p class="card-text text-light">กรอกโค้ดรับเงินจากร้านค้า</p>
                        <a href="#" class="btn btn-primary">เติมเงิน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require './frontend/includes/footer.php'; ?>
</body>
</html>