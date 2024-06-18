<?php
// 建立資料庫連線
$servername = "localhost";
$username = "root";
$password = ""; // 在本地 XAMPP 中通常是空的
$dbname = "dynamicseal";

$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗：" . $conn->connect_error);
}

// 接收用戶提交的註冊數據
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// 對密碼進行加密
$hashed_password = md5($password); // 這裡示範使用 md5 加密，實際上應該使用更安全的加密方式

// 構造 SQL 插入語句，將用戶信息插入到資料庫
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    // 註冊成功，重定向到登入頁面或其他頁面
    header('Location: login.php');
} else {
    // 註冊失敗，返回註冊頁面並顯示錯誤信息
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
