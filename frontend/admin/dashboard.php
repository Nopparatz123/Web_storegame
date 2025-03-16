<?php
    require_once './backend/routes/class.php';
    $class = new Classz();
    // เพิ่มคำประกาศ
    if(isset($_POST['add_announce'])){
        $texts = $_POST['texts'];
        $an = $class->AddAnnounce($texts);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./frontend/assets/css/global.css">
    <link rel="stylesheet" href="./frontend/assets/css/option.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./frontend/assets/js/main.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <!-- เพิ่มคำประกาศ-->
    <form method="post">
        <div style="margin-top: 500px;">
            <input type="text" name="texts">
            <button type="submit" name="add_announce">ss</button>
        </div>
    </form>
</body>
</html>