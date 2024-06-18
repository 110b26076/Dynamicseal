<?php
// 开始会话（如果尚未启动）
session_start();

// 如果会话中存在用户信息，则销毁会话
if (isset($_SESSION['email'])) {
    // 清除所有会话变量
    session_unset();
    
    // 销毁会话
    session_destroy();
}

// 重定向到登录页面或其他页面
header('Location: login.php');
exit;
?>
