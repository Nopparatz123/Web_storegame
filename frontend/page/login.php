<?php
     require_once './backend/routes/auth.php';
     $auth = new Auth();

     if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $auth->login($username, $password);
     }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <video autoplay loop muted playsinline class="blackgroud-clip">
        <source src="./frontend/assets/img/video.mp4">
    </video>
    <div class="container" style="margin-top: 200px; margin-bottom: 200px;">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-5">
                <div class="card border-0 shadow-sm">
                    <div class="card-header border-0 bg-white text-center mt-5">
                        <h4 class="fw-bold h2">เข้าสู่ระบบ</h4>
                    </div>
                    <div class="card-body p-5 pt-3">
                        <form method="post">
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
    <?php require './frontend/includes/footer.php'; ?>
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