<?php
    require_once './backend/routes/data.php';
    $data = new Data();
    $totalUser = $data->getCount("users");
    $announce = $data->getAnnounce(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name - Home</title>

    <style>
        /* style lodaing */
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: black;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        #loading-screen {
            opacity: 1;
            transition: opacity 0.7s ease-out;
        }

        .card {
            background-color: transparent;
            border-radius: 10px;
            border: 1px white solid;
        }
    </style>
</head>
<body>
    <!-- loading -->
    <!-- alert -->
    <div id="loading-screen">
        <div class="text-center">
            <div class="spinner-border text-light" role="status"></div>
            <p class="mt-2">กำลังโหลด...</p>
        </div>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 mb-2 p-3">
        <div id="welcomeToast" class="toast shadow-sm bg-light p-1" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body text-primary">
                ยินดีต้อนรับสู่เว็บของเรา !!
            </div>
        </div>
    </div>
    <!-- background overlay -->
    <video autoplay loop muted playsinline class="blackgroud-clip">
        <source src="./frontend/assets/img/video.mp4">
    </video>
    <!-- content main -->
    <div class="container" style="margin-top: 200px; margin-bottom: 200px;">
        <div class="row">
            <div class="col-12">
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
        <?php if($announce):?>
             <div class="card mt-3 mb-3">
                <marquee class="p-3">
                    <span class="badge p-2 me-2 rounded-5 text-primary" style="font-size: 15px;">
                        <i class="bi bi-megaphone-fill"></i> <?= $announce['texts']; ?> ! !
                    </span>
                </marquee>
             </div>
        <?php endif;?>
        <div class="row g-3" data-aos="fade-up" data-aos-duration="1000">
            <!-- card-->
            <div class="col-12 col-md-4">
                <div class="card cardz rounded-4" style="background-color: transparent; border: 1px solid white;">
                    <div class="card-body">
                        <p class="mb-0 text-light">ผู้ใช้งาน</p>
                        <h1 class="d-inline text-light"><i class="bi bi-person-fill"></i> <?= $totalUser?></h1>>
                        <p class="d-inline text-light">คน</p>
                    </div>
                    <div class="wave"></div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card rounded-4" style="background-color: transparent; border: 1px solid white;">
                    <div class="card-body">
                        <p class="mb-0 text-light">สต๊อก</p>
                        <h1 class="d-inline text-light"><i class="bi bi-basket-fill"></i> <?= $totalUser?></h1>>
                        <p class="d-inline text-light">ชิ้น</p>
                    </div>
                    <div class="wave"></div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card rounded-4" style="background-color: transparent; border: 1px solid white;">
                    <div class="card-body">
                        <p class="mb-0 text-light">ยอดขาย</p>
                        <h1 class="d-inline text-light"><i class="bi bi-person-fill"></i> <?= $totalUser?></h1>>
                        <p class="d-inline text-light">ครั้ง</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php require './frontend/includes/footer.php'; ?>
    <script>
      AOS.init();
      window.addEventListener("load", function () {
            setTimeout(function () {
                document.getElementById("loading-screen").style.opacity = 0;
                setTimeout(function () {
                    document.getElementById("loading-screen").style.display = "none";
                }, 200);
            }, 200);
        });
    </script>
</body>
</html>