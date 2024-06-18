<!DOCTYPE HTML>
<html>
<head>
    <title>海豹躺平</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload landing">
    <div id="page-wrapper">
        <!-- Header -->
        <header id="header">
            <h1 id="logo"><a href="index.php"><img width="100" src="images/sealsleeping.gif"/></a></h1>
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
                    <h2>管理</h2>
                </header>
                <section>
                    <h4>名單</h4>
                    <div class="table-wrapper">
                        <?php
                        $file = @file("register.txt");
                        if ($file !== false) {
                            echo '<table class="alt">';
                            echo '<thead>';
                            echo '<tr><th>Name</th><th>Email</th><th>分支</th><th>食物</th><th>備註</th><th>操作</th></tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            foreach ($file as $line) {
                                $data = explode(",", trim($line));
                                echo '<tr>';
                                foreach ($data as $cell) {
                                    echo '<td>' . htmlspecialchars($cell) . '</td>';
                                }
                                // 添加删除按钮和表单
                                echo '<td><form method="post" action="admin.php">';
                                echo '<input type="hidden" name="delete_line" value="' . htmlspecialchars($line) . '" />';
                                echo '<input type="submit" value="刪除" class="button" />';
                                echo '</form></td>';
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '<tfoot>';
                            echo '</tfoot>';
                            echo '</table>';
                        } else {
                            echo "<p>無法讀取註冊名單文件。</p>";
                        }

                        // 处理删除操作
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_line"])) {
                            $lineToDelete = $_POST["delete_line"];
                            $currentFile = file("register.txt");
                            $updatedFile = array_diff($currentFile, array($lineToDelete));

                            // 重新写入文件
                            file_put_contents("register.txt", implode("", $updatedFile));

                            // 刷新页面
                            header("Location: admin.php");
                            exit();
                        }
                        ?>
                    </div>
                </section>
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

</html>
