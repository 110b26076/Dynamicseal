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

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>動感海豹</h2>
							<p>關於海豹的大小事</p>
						</header>
						<span class="image"><img src="images/pic01.gif" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic02.gif"/></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>海豹介紹</h2>
										<p><?php
												srand((double)microtime()*1000000);
												$i = rand(1, 3);
												$smart_sentence = array(
													"及時生於黑夜，也要在苦難搖籃裡怒號光明。",
													"是棋子，那就吃掉；是堡壘，那就攻陷；是王權，那就推翻。",
													"每個人的誕生，都有其理由……如果你還沒找到，我會幫你找到的。"
												);
												echo $smart_sentence[$i - 1];
											?></p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>海豹科（學名：Phocidae）動物俗稱海豹或真海豹，是食肉目鰭足類的一科。海豹是成紡錘體型、四肢特化成鰭狀的哺乳類動物。它們頭圓頸短，沒有外耳廓，因其臉部長的像豹而得名。常見的海豹有斑海豹、港海豹、冠海豹等。海豹在兩個半球的海洋中都有分布，除了較熱帶的僧海豹外，大多局限於極地、亞極地和溫帶氣候。貝加爾海豹是唯一一種純淡水海豹。</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>成年海豹的體長從環斑海豹的1.17米（3.8英尺）和45公斤（99磅）到南象海豹的5.8米（19英尺）和4,000公斤（8,800磅）不等，南象海豹是食肉目中體型最大的成員。儘管它們保留了強大的犬齒，海豹的牙齒還是少於陸生食肉目成員。部分品種甚至完全沒有臼齒。</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.gif"/></span>
					<div class="content">
						<header>
							<h2>特徵</h2>
							<p><?php
								srand((double)microtime()*1000000);
								$i = rand(1, 3);
								$smart_sentence = array(
								"哪裡跌倒，就在哪裡躺好。",
								"只要你還會想要，那你就是有夢的人。",
								"人性說穿了，最愛的還是自己。"
								);
								echo $smart_sentence[$i - 1];
							?></p>
						</header>
						<p>海獅因速度和機動性而聞名，而海豹則以高效、經濟的運動方式著稱。這使得大多數海豹可以遠離陸地覓食以利用獵物資源，而海獅則依賴於靠近繁殖地的富饒的上升流區域。海豹通過身體的側向運動游泳，充分利用後鰭[1]。它們的前鰭主要用於轉向，而後鰭與骨盆連接，無法轉到身體下方用來行走。海豹比海狗和海獅更近於流線型，因此能夠更有效地長距離游泳。然而，由於無法將後鰭向下轉動，它們在陸地上顯得非常笨拙，只能依靠前鰭和腹部肌肉蠕動前進。</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.gif" alt="" /></span>
					<div class="content">
						<header>
							<h2>進化</h2>
							<p><?php
								srand((double)microtime()*1000000);
								$i = rand(1, 3);
								$smart_sentence = array(
								"你必須很努力，才能看起來毫不費力。",
								"一切隨他去，自在人世間。",
								"限制你追夢的，不是金錢、不是科系、不是年齡，是心。"
								);
								echo $smart_sentence[$i - 1];
							?></p>
						</header>
						<p>已知最早的海豹化石是來自漸新世晚期或中新世早期（阿基坦期）義大利地區的戈丹氏黎明海豹。其他早期海豹化石可追溯到1500萬年前中新世中期的北大西洋。過去，許多研究人員一直認為海豹與海獅和海象是獨立進化的；它們由獺類動物(例如棲息在歐洲淡水湖中的河川獸)進化而來。然而，最近的證據有力地表明，所有鰭足類動物都有一個共同的單系祖先，可能是與鼬科動物和熊科動物關係最密切的海熊獸。</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>海豹種類</h2>
							<p><?php
								srand((double)microtime()*1000000);
								$i = rand(1, 3);
								$smart_sentence = array(
								"當你對自己誠實，世界就沒人能夠騙得了你。",
								"沒有相見恨晚，只有不夠勇敢。",
								"有種幸福叫，我已進入你的黑名單。"
								);
								echo $smart_sentence[$i - 1];
							?></p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
								<img width="145" src="images/seal01.jpg" alt="A cute seal">
									<h3>豎琴海豹</h3>
									<p>豎琴海豹（學名：Pagophilus groenlandicus），也被稱為琴海豹、鞍紋海豹或格陵蘭海豹，屬於海豹科，是豎琴海豹屬的唯一一種。</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
								<img width="175" src="images/seal02.jpg" alt="A cute seal">
									<h3>象鼻海豹</h3>
									<p>象鼻海豹屬（學名：Mirounga），是鰭足類海豹科的一屬。主要分兩種：北象鼻海豹和南象鼻海豹。雄性南象鼻海豹不僅是最龐大的鰭足動物，更是地球上最大的食肉目動物。</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
								<img width="200" src="images/seal03.jpg" alt="A cute seal">
									<h3>斑海豹</h3>
									<p>斑海豹身體呈紡錘形，頭圓生有觸鬚，沒有外耳廓。四肢特化成鰭腳，趾間有蹼。雌性斑海豹體型大於雄性。出生的小海豹全身被白色的胎毛包裹。</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
								<img width="190" src="images/seal04.jpg" alt="A cute seal">
									<h3>豹海豹</h3>
									<p>豹海豹體型大而且多肉，背部呈深灰色，腹部呈淺灰色。頸部白色有黑色斑點，有點像豹汶，故得此名。雌性一般較雄性大。雄性長約2.8米及重320公斤，而雌性則約有3米長及重370公斤。體型較大的雌性可以長達3.5米及重400公斤。</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
								<img width="200" src="images/seal05.jpg" alt="A cute seal">
									<h3>灰海豹</h3>
									<p>灰海豹體型中等，雄體身長2.5到3.3米，體重約為300公斤；雌體身型相對較小，一般僅長1.6到2.0米，重100到150公斤。灰海豹是大西洋北部和西部海岸常見的海豹之一。</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
								<img width="200" src="images/seal06.jpg" alt="A cute seal">
									<h3>環斑海豹</h3>
									<p>環斑海豹是北極最小的海豹，因背部皮毛上有銀色圓環圖案而得名。成年個體體長在100至175公分（39至69英寸）之間，體重則在32至140公斤（71至309英磅）之間。</p>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
								<li><a href="#" class="button">回頂部</a></li>
							</ul>
						</footer>
					</div>
				</section>

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