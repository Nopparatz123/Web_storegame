<?php
    require_once './backend/routes/data.php';
    require_once './backend/routes/class.php';
    $data = new Data();
    $class = new Classz();
    // เช็ค_ถ้ายังไม่ล็อกอิน
    if (!isset($_SESSION['user_login'])) {
        echo "ยังไม่ล็อกอิน";
    } else {
        $user = $_SESSION['user_login'];
        $userprofile = $data->getUserProfile($user);
        // var_dump($userprofile);
    }

    // change password
    if(isset($_POST['chang_password'])){
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];

        $newPassword = $class->changePassword($old_password, $new_password, $user);
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
        /* border: 1px solid white; */
        /* backdrop-filter: blur(10px); */
        border-radius: 10px;
    }

    .custom-input {
        font-size: 14px;
        padding: 6px 0; 
        border: none !important;
        border-bottom: 2px solid #ff6600 !important;
        background-color: transparent !important;
        outline: none !important;
        color: white !important;
    }

    .form-floating label {
        font-size: 13px;
        top: -8px;
        color: #ff6600;
        background-color: transparent !important;
    }

    .custom-input:focus {
        border-bottom: 2px solid #ff6600 !important;
        box-shadow: none !important;
    }
    
    .icon{
        color: white;
    }
    </style>
</head>
<body>
    <video autoplay loop muted playsinline class="blackgroud-clip">
        <source src="./frontend/assets/img/video.mp4">
    </video>
    <div class="container" style="margin-top: 200px;">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card p-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-5">
                                <h3 class="h2 fw-bold text-light mb-3">ข้อมูลส่วนตัว</h3>
                                <h5 class="text-secondary">Username: <?= ($userprofile['username']) ?></h5>
                                <h5 class="text-secondary">Point : <?= ($userprofile['point']) ?></h5>
                            </div>

                            <div class="col-md-8">
                                <h3 class="h2 fw-bold text-light mb-4">เปลี่ยนรหัสผ่าน</h3>
                                <form method="post">
                                    <div class="form-floating mb-5">
                                        <input type="password" name="old_password" class="form-control custom-input" id="password" placeholder="password">
                                        <label for="password">รหัสผ่านเดิม</label>
                                        <i class="bi bi-eye icon" id="togglePassword" onclick="showPassword();" style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                                    </div>

                                    <div class="form-floating mb-4">
                                        <input type="password" name="new_password" class="form-control custom-input" id="password" placeholder="password">
                                        <label for="password">รหัสผ่านใหม่</label>
                                        <i class="bi bi-eye icon" id="togglePassword" onclick="showPassword();" style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                                    </div>
                                    <button class="btn btn-primary w-100" name="chang_password">เปลี่ยนรหัสผ่าน</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("togglePassword").addEventListener("click", function () {
            let password = document.getElementById("password");
            if (password.type === 'password') {
                password.type = 'text';
                this.classList.remove("bi-eye");
                this.classList.add("bi-eye-slash");
            } else {
                password.type = 'password';
                this.classList.remove("bi-eye-slash");
                this.classList.add("bi-eye");
            }
        });
    </script>
</body>
</html>