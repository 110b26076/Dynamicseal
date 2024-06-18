<?php
session_start();

// 检查用户是否已登录
if (!isset($_SESSION['email'])) {
    // 如果未登录，跳转回 pictures.php 或其他页面
    header('Location: pictures.php');
    exit(); // 确保重定向后，后续代码不会被执行
}

$uploadDir = "uploads/"; // 設定上傳檔案存放的目錄

// 檢查是否有檔案上傳
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["upload_file"])) {
    $targetFile = $uploadDir . basename($_FILES["upload_file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // 檢查檔案是否為圖片
    $check = getimagesize($_FILES["upload_file"]["tmp_name"]);
    if ($check !== false) {
        echo "檔案是一個圖片 - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "檔案不是一個圖片.<br>";
        $uploadOk = 0;
    }

    // 檢查檔案是否已存在
    if (file_exists($targetFile)) {
        echo "抱歉，檔案已存在.<br>";
        $uploadOk = 0;
    }

    // 檢查檔案大小
    if ($_FILES["upload_file"]["size"] > 500000) {
        echo "抱歉，檔案太大.<br>";
        $uploadOk = 0;
    }

    // 允許特定的檔案格式
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "抱歉，僅允許 JPG, JPEG, PNG 和 GIF 檔案格式.<br>";
        $uploadOk = 0;
    }

    // 檢查 $uploadOk 是否為 0 (檔案是否成功上傳)
    if ($uploadOk == 0) {
        echo "抱歉，檔案未被上傳.<br>";
    } else {
        if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $targetFile)) {
            echo "檔案 " . htmlspecialchars(basename($_FILES["upload_file"]["name"])) . " 已成功上傳.<br>";
            // 設定跳轉回 pictures.php 的 JavaScript
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "pictures.php";
                    }, 3000); // 3秒後跳轉
                  </script>';
        } else {
            echo "抱歉，檔案上傳時發生錯誤.<br>";
        }
    }
} else {
    echo "未收到有效的檔案上傳請求.<br>";
}
?>
