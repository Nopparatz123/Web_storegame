<?php
    session_start();
    require_once '../controller/Usercontroller.php';
    require_once '../controller/db.php';

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $db = new Database();
        $conn = $db->getCon();
        $userController = new UserController($conn);
        $userController->login($username, $password);
    }
?>
<head>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-md navbar-dark fixed-top shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="https://preview.redd.it/273w5hzk9iq71.png?width=640&crop=smart&auto=webp&s=ff14b4977315ab54829b21b3c1bf26b749b7f3a2"
                alt="Logo" width="150px" class="ms-2">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <ul class="navbar-nav mx-auto g-4">
                <li class="nav-item me-2">
                    <a href="#" class="nav-link navbar-optin actives">
                        <i class="bi bi-house-fill"></i> หน้าหลัก
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link navbar-optin">
                        <i class="bi bi-shop"></i> ร้านค้า
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link navbar-optin">
                        <i class="bi bi-credit-card"></i> เติมเงิน
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link navbar-optin">
                        <i class="bi bi-file-earmark-person-fill"></i> ช่องทางการติดต่อ
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center justify-content-center">
                <?php if(isset($_SESSION['user_login'])){ ?>
                    <ul class="dropdown navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= $_SESSION['username'] ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item">โปรไฟล์</a></li>
                                <li><a href="./controller/logout.php" class="dropdown-item text-danger">ออกจากระบบ</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php }else{ ?>
                    <a href="./login" class="btn btn-primary me-2">เข้าสู่ระบบ</a>
                    <a href="./register" class="btn btn-outline-primary">สมัครสมาชิก</a>
                <?php } ?>
            </div>
        </div>

    </div>
</nav>

<body>
    <video autoplay loop muted playsinline class="blackgroud-clip">
        <source src="../assets/video.mp4">
    </video>
    <div class="container" style="margin-top: 200px;">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-header border-0 bg-white text-center mt-5">
                        <h4 class="fw-bold h2">เข้าสู่ระบบ</h4>
                    </div>
                    <div class="card-body p-5 pt-3">
                        <form action="" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" name="username" placeholder="ss" class="form-control" required>
                                <label for="">Username</label>
                            </div>
                            <div class="form-floating mb-2 position-relative">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                <label for="password">Password</label>
                                <i class="bi bi-eye" id="togglePassword" onclick="showPassword();" style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                            </div>
                            <input type="checkbox" class="mb-3"> จดจำการเข้าสู่ระบบ
                            <button class="btn btn-primary w-100 rounded-4" name="login">เข้าสู่ระบบ</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>ถ้ายังไม่มีบัญชี <a href="./register">สมัครสมาชิกเลย</a></p>
                            <p>เข้าสู่ระบบด้วยวิธีอื่น</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    togglePassword.addEventListener("click", function () {
        if (password.type === 'password') {
            password.type = 'text';
            togglePassword.classList.remove("bi-eye");
            togglePassword.classList.add("bi-eye-slash");
        } else {
            password.type = 'password';
            togglePassword.classList.remove("bi-eye-slash");
            togglePassword.classList.add("bi-eye");
        }
    });

</script>