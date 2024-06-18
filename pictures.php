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
                    <h2>活動照片</h2>
                </header>

                <!-- Display Uploaded Images -->
                <section>
                    <div class="row gtr-50 gtr-uniform">
                        <?php
                        $picturesDir = "uploads/"; // 存放圖片的目錄

                        // 檢查目錄是否存在
                        if (is_dir($picturesDir)) {
                            $handle = opendir($picturesDir);
                            while ($file = readdir($handle)) {
                                // 確保檔案是有效的圖片檔案，不是目錄本身及上層目錄
                                if ($file != "." && $file != ".." && is_file($picturesDir . $file) && getimagesize($picturesDir . $file)) {
                                    echo '<div class="col-4 col-6-medium col-12-small">
                                            <span class="image fit">
                                                <a href="' . $picturesDir . $file . '" target="_blank">
                                                    <img src="' . $picturesDir . $file . '" alt="" />
                                                </a>
                                            </span>
                                          </div>';
                                }
                            }
                            closedir($handle);
                        } else {
                            echo "<p>無法打開圖片目錄。</p>";
                        }
                        ?>
                    </div>
                </section>

                <!-- Upload Form (only for logged in users) -->
                <section>
                    <?php
                    // 檢查用戶是否已登入
                    if (isset($_SESSION['email'])) {
                        echo '<h3>上傳檔案</h3>';
                        echo '<form method="post" action="upload_process.php" enctype="multipart/form-data">';
                        echo '<div class="row gtr-uniform">';
                        echo '<div class="col-12">';
                        echo '<input type="file" name="upload_file" id="upload_file" required />';
                        echo '</div>';
                        echo '<div class="col-12">';
                        echo '<ul class="actions">';
                        echo '<li><input type="submit" value="上傳檔案" class="button primary" /></li>';
                        echo '<li><input type="reset" value="清除" class="button" /></li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                    } else {
                        // 如果未登入，显示提示信息和登录链接
                        echo '<p>登入後才能上傳檔案。</p>';
                        echo '<p><a href="login.php" class="button primary">登入</a></p>';
                    }
                    ?>
                </section>

            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <!-- Your social media icons -->
            </ul>
            <ul class="copyright">
                <!-- Your copyright information -->
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
