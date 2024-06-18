<!DOCTYPE HTML>
<html>
<head>
    <title>海豹躺平</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1 id="logo"><a href="index.php"><img width="100" src="images/sealsleeping.gif" /></a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="index.php">首頁</a></li>
                    <li><a href="pictures.php">活動照片</a></li>
                    <li><a href="sign_up.php">報名</a></li>
                    <?php
                    session_start();
                    if (isset($_SESSION['email'])) {
                        echo '<li><a href="logout.php" class="button primary">登出</a></li>';
                        echo '<li><span>' . $_SESSION['email'] . ' Hello!!</span></li>';
                    } else {
                        echo '<li><a href="login.php" class="button primary">登入</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <div id="main" class="wrapper style1">
            <div class="container">
                <header class="major">
                    <h2>報名</h2>
                </header>

                <!-- Form -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // 接收表單提交的數據
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $category = $_POST['category'];
                    $priority = $_POST['priority'];
                    $message = $_POST['message'];
                    $send_copy = isset($_POST['copy']) ? $_POST['copy'] : 'No'; // 是否發送副本

                    // 將新資料寫進檔案
                    $file = @file("register.txt");
                    $w = fopen("register.txt", "a");
                    fputs($w, $name . "," . $email . "," . $category . "," . $priority . "," . $message . "\r\n");
                    fclose($w);

                    // 假設這裡是將數據輸出到表格
                    echo "<h4>報名表</h4>";
                    echo '<div class="table-wrapper">';
                    echo '<table class="alt">';
                    echo '<thead>';
                    echo '<tr><th>Name</th><th>Email</th><th>分支</th><th>食物</th><th>備註</th></tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    echo "<tr><td>$name</td><td>$email</td><td>$category</td><td>$priority</td><td>$message</td></tr>";
                    echo '</tbody>';
                    echo '<tfoot>';
                    echo '</tfoot>';
                    echo '</table>';
                    echo '</div>';
                }
                ?>

            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; 版權被海豹吃了。</li><li>Design: <a href="https://www.youtube.com/watch?v=dD1wBSsNOL0&t=2s">SEAL</a></li>
            </ul>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
