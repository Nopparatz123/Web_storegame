<?php
    require_once './backend/routes/auth.php';
    $auth = new Auth();
    $checkAdmin = $auth->getRank('users');
?>
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
                    <a href="/Web_storegame/home" class="nav-link navShowcontent navbar-optin actives"
                        data-content="main">
                        <i class="bi bi-house-fill"></i> หน้าหลัก
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Web_storegame/store" class="nav-link navShowcontent navbar-optin" data-content="store">
                        <i class="bi bi-shop"></i> ร้านค้า
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Web_storegame/payment" class="nav-link navShowcontent navbar-optin" data-content="card">
                        <i class="bi bi-credit-card"></i> เติมเงิน
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact" class="nav-link navShowcontent navbar-optin" data-content="contact">
                        <i class="bi bi-file-earmark-person-fill"></i> ช่องทางการติดต่อ
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <?php if(isset($_SESSION['user_login'])): ?>
                    <ul class="dropdown navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="bi bi-person-fill"></i> <?= $_SESSION['username'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="./profile" class="dropdown-item">โปรไฟล์</a></li>
                                <?php if (!empty($checkAdmin) && $checkAdmin['rank'] == 1): ?>
                                    <li><a href="./dashboard" class="dropdown-item">ระบบหลังบ้าน</a></li>
                                <?php endif; ?>
                                <li><a href="./logout" class="dropdown-item text-danger">ออกจากระบบ</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php else: ?>
                    <a href="/Web_storegame/login" class="btn btn-primary me-2">เข้าสู่ระบบ</a>
                    <a href="/Web_storegame/register" class="btn btn-outline-primary">สมัครสมาชิก</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
