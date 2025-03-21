<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .custom-input {
            font-size: 14px;
            padding: 6px 0;
            border: none !important;
            border-bottom: 3px solid #ff6600 !important;
            background-color: transparent !important;
            outline: none !important;
            color: white !important;
        }

        .form-floating label {
            font-size: 13px;
            color: #ff6600;
            top: -1px;
            background-color: transparent !important;
        }

        .custom-input:focus {
            border-bottom: 2px solid #ff6600 !important;
            box-shadow: none !important;
        }
    </style>
</head>

<body>
    <video autoplay loop muted playsinline class="blackgroud-clip">
        <source src="./frontend/assets/img/video.mp4">
    </video>
    <div class="container" style="margin-top: 150px; margin-bottom: 200px;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <h2 class="h1 text-primary fw-bold"><i class="bi bi-database-fill-up"></i> TOPUP (เติมเงิน)</h2>
                <hr class="text-primary">
                <h3 class="h4 text-light">ระบบเติมเงินด้วยซองของขวัญ</h3>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-5 mb-6">
                <div class="d-flex justify-content-center">
                    <img src="frontend/assets/img/topup.png" class="img-fluid" alt="Topup Image">
                </div>
            </div>
            <div class="col-12 col-md-5 mb-5">
                <div class="form-floating">
                    <input type="text" id="topup-input" name="topup" class="form-control custom-input" placeholder="topup">
                    <label for="">กรอกลิ้งค์ซองของขวัญ</label>
                    <p class="mt-2 text-center text-danger">ค่าธรรมเนียม 2.3 %</p>
                    <button id="submit-topup" class="btn btn-primary w-100">ยืนยันการเติม</button>
                </div>
            </div>
        </div>
    </div>
    <?php require './frontend/includes/footer.php'; ?>
</body>

</html>