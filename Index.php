<?php
session_start();//gọi khai báo
require_once "./MVC/Bridge.php";//sử dụng trang Bridge
$myApp = new Application();//tạo ra 1 đối tượng myApp là đối tượng của lớp (Application nằm trong thư mục processing)
?>