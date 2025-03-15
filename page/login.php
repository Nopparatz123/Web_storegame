<head>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../global.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
    include '../widgets/navbar.php';
?>

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
                        <div class="form-floating mb-3">
                            <input type="text" name="username" placeholder="ss" class="form-control">
                            <label for="">Username</label>
                        </div>
                        <div class="form-floating mb-2 position-relative">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <label for="password">Password</label>
                            <i class="bi bi-eye" id="togglePassword" onclick="showPassword();" style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                        </div>
                        <input type="checkbox" class="mb-3"> จดจำการเข้าสู่ระบบ
                        <button class="btn btn-primary w-100 rounded-4">เข้าสู่ระบบ</button>
                        <div class="text-center mt-3">
                            <p>ถ้ายังไม่มีบัญชี <a href="">สมัครสมาชิกเลย</a></p>
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