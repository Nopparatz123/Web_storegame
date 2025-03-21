<?php
    require_once './backend/routes/class.php';
    require_once './backend/routes/data.php';
    require_once './backend/function.php';
    $class = new Classz();
    $data = new Data();
    
    $totalTopup_today = $data->getTotalTopup('today');
    $totalTopup_month = $data->getTotalTopup('month');
    $totalTopup = $data->getTotalTopup();
    $an = $data->getAnnounce2();
    $allUser = $data->getAllUser();
    // เพิ่มคำประกาศ
    if(isset($_POST['add_announce'])){
        $texts = $_POST['texts'];
        $an = $class->AddAnnounce($texts);
        alertToast("เพิ่มคำประกาศ $texts เรียบร้อย", "primary","light");
    }
    if(isset($_GET['deleteAn'])){
        $del_id = $_GET['deleteAn'];
        $data->deleteAnnounce($del_id);
        echo "<script>window.location.href = '/Web_storegame/dashboard';</script>";
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
        body {
            /* background: linear-gradient(0deg, rgba(55, 55, 55, 0.9) 0%, rgba(0, 0, 0, 0.95) 50%, rgba(0, 0, 0, 0.9) 100%); */
            color: #fff;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(0px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s;
            cursor: pointer;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
        }

        .form-control,
        .btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.1);
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .btn-primary {
            background: #ff6600;
            border: none;
            cursor: pointer;
        }


        .btn-outline-light,
        .btn-outline-danger {
            cursor: pointer;
        }

        .stat-card {
            transition: transform 0.3s;
            cursor: pointer;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .announcement-item {
            transition: all 0.3s;
        }

        .announcement-item:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .announcement-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .user-avatar {
            cursor: pointer;
        }

        .displayContent:first-of-type {
            display: none;
        }

        .displayContent {
            display: block;
        }
    </style>
</head>

<body>
    <video autoplay loop muted playsinline class="blackgroud-clip">
        <source src="./frontend/assets/img/video.mp4">
    </video>
    <div class="container" style="margin-top: 115px;">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block glass-card p-0">
                <div class="p-3 announcement-header">
                    <h4 class="text-center">เมน</h4>
                </div>
                <ul class="nav flex-column p-3">
                    <li class="nav-item">
                        <a class="nav-link navShowcontent active rounded py-2 mb-2" href="#" data-content="dashboard">
                            <i class="bi bi-speedometer2 me-2"></i> หน้าแดชบอร์ด
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navShowcontent rounded py-2 mb-2" href="#" data-content="action_product">
                            <i class="bi bi-megaphone me-2"></i> จัดการสินค้า
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navShowcontent rounded py-2 mb-2" href="#" data-content="action_category">
                            <i class="bi bi-graph-up me-2"></i> จัดการหมวดหมู่
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navShowcontent rounded py-2 mb-2" href="#" data-content="action_user">
                            <i class="bi bi-people me-2"></i> จัดการผู้ใช้งาน
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navShowcontent rounded py-2 mb-2" href="#" data-content="action_">
                            <i class="bi bi-file-text me-2"></i> คิดไม่ออก
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navShowcontent rounded py-2 mb-2" href="#" data-content="action_settings">
                            <i class="bi bi-gear me-2"></i> Settings
                        </a>
                    </li>
                </ul>
                <div class="mt-auto p-3 border-top border-white border-opacity-10">
                    <div class="d-flex align-items-center user-avatar"">
                        <div class=" rounded-circle bg-primary d-flex align-items-center justify-content-center"
                        style="width: 40px; height: 40px;">
                        <span>A</span>
                    </div>
                    <div class="ms-3">
                        <div class="fw-bold">
                            <?= $_SESSION['username'] ?>
                        </div>
                        <small class="text-white-50">role : admin</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- หน้าหลักโชว์รายละเอียด -->
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="displayContent" id="dashboard">
                <!-- Header -->
                <div class="d-flex justify-content-between glass-card p-3 mb-4 sticky-top">
                    <h2 id="pageTitle">Dashboard</h2>
                    <div class="d-flex">
                        <input type="text" class="form-control me-2" placeholder="Search...">
                        <button class="btn btn-outline-light rounded-circle" onclick="alert('Notifications clicked')">
                            <i class="bi bi-bell"></i>
                        </button>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="glass-card p-3 stat-card">
                            <h5 class="text-white-50">ยอดการเติมในเดือนนี้</h5>
                            <h2>
                                <?= $totalTopup_month ?> บาท
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="glass-card p-3 stat-card">
                            <h5 class="text-white-50">ยอดการเติมในวันนี้</h5>
                            <h2>
                                <?= $totalTopup_today ?> บาท
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="glass-card p-3 stat-card">
                            <h5 class="text-white-50">ยอดการเติมเงินทั้งหมด</h5>
                            <h2>
                                <?= $totalTopup ?> บาท
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mb-4">

                        <!-- content main -->
                        <div class="glass-card p-0 overflow-hidden">
                            <div class="p-3 announcement-header">
                                <h4><i class="bi bi-megaphone-fill"></i> ประกาศ</h4>
                            </div>
                            <div class="p-4">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <textarea class="form-control mb-3" rows="3" name="texts"
                                            placeholder="Enter announcement text..." required></textarea>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" name="add_announce" class="btn btn-primary">
                                                <i class="bi bi-plus"></i> เพิ่มประกาศ
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <?php foreach($an as $dataAn): ?>
                                <div class="mt-4" id="announcementsList">
                                    <div class="glass-card p-3 mb-3 announcement-item">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <p class="mb-1">
                                                    <?= $dataAn['texts'] ?>
                                                </p>
                                                <small class="text-white-50">
                                                    <?= $dataAn['dates'] ?>
                                                </small>
                                            </div>
                                            <a href="?deleteAn=<?= $dataAn['id'] ?>"
                                                class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-x"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="displayContent" id="action_user">
        <div class="container glass-card p-3">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Point</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($allUser as $dataUser): ?>
                        <tr>
                            <td><?= $dataUser['id'] ?></td>
                            <td><?= $dataUser['username'] ?></td>
                            <td><?= $dataUser['email'] ?></td>
                            <td><?= $dataUser['point'] ?></td>
                            <td>
                            <div class="dropdown">
                            <button class="btn btn-action dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear-wide-connected"></i> Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-slash-circle"></i> Ban</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash-fill"></i> Delete</a></li>
                            </ul>
                        </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>                            
    </div>
</div>
    <div style="margin-top:200px;">
    <?php require './frontend/includes/footer.php'; ?>
    </div>
    <script>
        $(document).ready(function () {
            let lastContent = localStorage.getItem('lastContent');
            $('.displayContent').hide();
            
            if (lastContent && $('#' + lastContent).length) {
                $('#' + lastContent).fadeIn();
            } else {
                $('.displayContent').first().fadeIn();
            }

            $('.navShowcontent').on('click', function (e) {
                e.preventDefault();

                let showContent = $(this).data('content');
                console.log("Clicked Content:", showContent); 

                if ($('#' + showContent).length) {
                    $('.displayContent').hide();
                    $('#' + showContent).fadeIn();
                    localStorage.setItem('lastContent', showContent);
                } else {
                    console.warn("ID ไม่ถูกต้อง:", showContent);
                }
            });
        });

    </script>
</body>

</html>