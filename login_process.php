<?php
session_start();

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

// 接收用戶提交的表單數據
$email = $_POST['email'];
$password = $_POST['password'];

// 對密碼進行加密
$hashed_password = md5($password); // 這裡示範使用 md5 加密，實際上應該使用更安全的加密方式

// 構造 SQL 查詢語句，檢查用戶是否存在
$sql = "SELECT * FROM users WHERE email='$email' AND password='$hashed_password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 登入成功，設置 session 變數
    $_SESSION['email'] = $email;

    // 檢查是否為管理員
    if ($email == 'bear711246@gmail.com' && $password == '123456789') {
        header('Location: admin.php'); // 重定向到管理頁面
    } else {
        header('Location: index.php'); // 重定向到首頁或其他頁面
    }
} else {
    // 登入失敗，返回登入頁面並顯示錯誤信息
    echo "登入失敗，請檢查您的用戶名和密碼。";
}

$conn->close();
?>
