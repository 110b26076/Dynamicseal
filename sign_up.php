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
					<?php
						echo "今天日期: ".date("Y/m/d")." 現在時間: ".date("H:i:s")."<br>";
						$datestr1="2024-07-04 10:00:00";
						echo "報名截止時間: ".$datestr1."<br>";
						echo "剩餘時間: ".round((strtotime($datestr1)-time())/(60*60*24),1)."天"."<br>";
					?>
                </header>

                <!-- Form -->
                <section>
                    <center><img width="150" src="images/alalaseal.gif" /></center>
                    <?php
                    if (isset($_SESSION['email'])) {
                        echo '<form method="post" action="handle_form.php">
                            <div class="row gtr-uniform gtr-50">
                                <div class="col-6 col-12-xsmall">
                                    <input type="text" name="name" id="name" value="name" placeholder="Name" />
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <input type="email" name="email" id="email" value="email" placeholder="Email" />
                                </div>
                                <div class="col-12">
                                    <select name="category" id="category">
                                        <option value="">- 分支 -</option>
                                        <option value="情報官">情報官</option>
                                        <option value="劍豪">劍豪</option>
                                        <option value="無畏者">無畏者</option>
                                        <option value="戰術師">戰術師</option>
                                        <option value="不屈者">不屈者</option>
                                        <option value="要塞">要塞</option>
                                        <option value="投擲手">投擲手</option>
                                        <option value="本源術師">本源術師</option>
                                        <option value="咒愈師">咒愈師</option>
                                        <option value="召換師">召換師</option>
                                        <option value="伏擊客">伏擊客</option>
                                    </select>
                                </div>
                                <div class="col-4 col-12-medium">
                                    <input type="radio" id="priority-low" name="priority" value="螃蟹" checked>
                                    <label for="priority-low">螃蟹</label>
                                </div>
                                <div class="col-4 col-12-medium">
                                    <input type="radio" id="priority-normal" name="priority" value="鯊魚">
                                    <label for="priority-normal">鯊魚</label>
                                </div>
                                <div class="col-4 col-12-medium">
                                    <input type="radio" id="priority-high" name="priority" value="企鵝">
                                    <label for="priority-high">企鵝</label>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="message" placeholder="備註" rows="6"></textarea>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="確認" class="primary" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>';
                    } else {
                        echo '<p>登入才可以報名</p>
                            <form method="post" action="login.php">
                                <div class="row gtr-uniform gtr-50">
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" value="登入" class="primary" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>';
                    }
                    ?>
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
