<?php
    require_once './backend/routes/auth.php';
    $auth = new Auth();

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $auth->register($username, $password, $email);
    }
?>
<head>
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
                        <h4 class="fw-bold h2">สมัครสมาชิก</h4>
                    </div>
                    <div class="card-body p-5 pt-3">
                            <div class="form-floating mb-3">
                                <input type="text" id="username" placeholder="ss" class="form-control" required>
                                <label for="">Username</label>
                            </div>
                            <div class="form-floating mb-2 position-relative">
                                <input type="password" name="password"  id="password" class="form-control" placeholder="Password" required>
                                <label for="password">Password</label>
                                <i class="bi bi-eye" id="togglePassword" onclick="showPassword();" style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                            </div>

                            <div class="form-floating mb-3 position-relative">
                                <input type="email" id="email" class="form-control" placeholder="ess" required>
                                <label for="">Email</label>
                            </div>
                            <button class="btn btn-primary w-100 rounded-4" onclick="registerUser()" type="submit" name="register">สมัครสมาชิก</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require './frontend/includes/footer.php'; ?>
</body>

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