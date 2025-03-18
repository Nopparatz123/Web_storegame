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