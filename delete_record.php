<?php
session_start();

// 检查用户是否已登录
if (!isset($_SESSION['email'])) {
    // 如果未登录，返回错误信息或重定向到登录页面
    http_response_code(403); // 拒绝访问
    exit("未授权的访问。");
}

// 检查是否接收到有效的 POST 请求
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $emailToDelete = trim($_POST['email']);

    // 读取注册名单文件
    $filename = "register.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES);

    // 查找并删除对应邮箱的记录
    $found = false;
    foreach ($lines as $key => $line) {
        $data = explode(",", $line);
        if (isset($data[1]) && trim($data[1]) === $emailToDelete) {
            unset($lines[$key]); // 删除该行
            $found = true;
            break;
        }
    }

    // 如果成功找到并删除记录，则重新写入文件
    if ($found) {
        file_put_contents($filename, implode("\n", $lines));
        echo "删除成功";
    } else {
        http_response_code(404); // 资源未找到
        echo "找不到要删除的记录";
    }
} else {
    http_response_code(400); // 错误的请求
    echo "无效的请求";
}
?>
