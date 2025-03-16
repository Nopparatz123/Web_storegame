<?php
session_unset();
session_destroy();
// ใช้ header location แล้วมัน เอ๋อ เลยใช้ตัวนี้
echo "<script>window.location.href = '/Web_storegame/home';</script>";
exit();
?>
