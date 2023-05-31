<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Netflix</title>
  <link rel="shortcut icon" type="x-icon" href="netflix-3271955-2738021.webp">
  <link rel="stylesheet" type="text/css" href="index.css"/>
  <script src="script.js" defer></script>
</head>
<body>

<div class="content">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <div class="head">
    	<p id="UserName"><strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p id="LogOut"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <h1 id="netflix-logo">Netflix</h1>
</div>
    <?php endif ?>
</div>

  <div class="row">
    <div class="header">
      <h3 class="title">Netflix Shows</h3>
      <div class="progress-bar"></div>
    </div>
    <div class="container">
      <button class="handle left-handle">
        <div class="text">&#8249;</div>
      </button>
      <div class="slider">
        <img id="poza" src="AAAABRwuS9u6qnSqe9jHPTLgnTo7AFdZAZM1rZ-z-jA_h1960CwRv63bUeSLO9svPp7enVpGiH7yxzdPVyY0Sp8AcTXTPwLjVB28thfg.jpg" onclick="location.href='https://watchbreakingbad.co'">
        <img id="poza"src="download.jpg" onclick="location.href='https://www.yidio.com/show/better-call-saul'">
        <img id="poza"src="1016094_3948267_222_updates.webp" onclick="location.href='https://watchtheofficetv.com'">
        <img id="poza"src="_127f302e-8e66-11e7-b1bc-83ce932a2009.webp" onclick="location.href='https://sflix.to/tv/free-narcos-hd-39337'">
        <img id="poza"src="AAAABVGsTpARGmj4ZtZCp60ddhUgIFZWLbYkQictokvcBwkFUhDnOlujRaUqiwf-qVzPlO-dZ4iI-_dE6pjmsoKGXwTL-pVjYhcsjRzW61xRrsDELQlTHWyxQ278-mpqUWUM1gkilg.jpg" onclick="location.href='https://theflixer.tv/tv/watch-the-queens-gambit-full-64097'">
        <img id="poza"src="Are-Seasons-1-6-of-Vikings-on-Netflix.jpg" onclick="location.href='https://ww6.soap2day.day/series/vikings/'">
        <img id="poza"src="maxresdefault.jpg" onclick="location.href='https://sflix.to/tv/free-house-of-cards-hd-39334'">
        <img id="poza"src="squid-game-season-2-heres-everything-we-know-about-the-netflix-series.jpg" onclick="location.href='https://www.playpilot.com/global/show/Squid-Game-2021/'">
        <img id="poza"src="Suits-Season-7.jpg" onclick="location.href='https://watchsuitsonline.net'" >
        <img id="poza"src="91toT9pRvuL._RI_.jpg" onclick="location.href='https://theflixer.tv/tv/watch-prison-break-full-39531'">
        <img id="poza"src="p10182741_b_h9_aa.jpg" onclick="location.href='https://sflix.to/tv/free-peaky-blinders-hd-39230'">
        <img id="poza"src="DlZ5hVYUcAE65Xw.jpg" onclick="location.href='https://www.yidio.com/show/the-walking-dead'">
      </div>
      <button class="handle right-handle">
        <div class="text">&#8250;</div>
      </button>
    </div>
  </div>

  <div class="row">
    <div class="header">
      <h3 class="title">Anime</h3>
      <div class="progress-bar"></div>
    </div>
    <div class="container">
      <button class="handle left-handle">
        <div class="text">&#8249;</div>
      </button>
      <div class="slider">
        <img id="poza"src="NTOS_OG-main.png" onclick="location.href='https://animedao.to/search/?search=naruto'">
        <img id="poza"src="download (2).jpg" onclick="location.href='https://animedao.to/anime/monster/'">
        <img id="poza"src="maxresdefault (1).jpg" onclick="location.href='https://animedao.to/search/?search=jojo'">
        <img id="poza"src="a_100421840_m_601_en_m1_1080_608.jpg" onclick="location.href='https://animedao.to/search/?search=one+piece'">
        <img id="poza"src="download (4).jpg" onclick="location.href='https://animedao.to/anime/dragonball-super/'">
        <img id="poza"src="download (3) - Copy.jpg" onclick="location.href='https://animedao.to/search/?search=tokyo+ghoul'">
        <img id="poza"src="AAAABW0Z2D6Rp9cNPPk_VYlTObIf3X9tC7SalGokB1Shi_VQB8L6pRDGP8Q_czebKMNVYMcbvM8ctBxE5tbKi3R4_Jibs7m2tOAemjuo.jpg" onclick="location.href='https://animedao.to/search/?search=berserk'">
        <img id="poza"src="0c265948-3450-40ad-89b4-883af457f36d.jpg" onclick="location.href='https://animedao.to/search/?search=bleach'">
        <img id="poza"src="download (1).jpg" onclick="location.href='https://animedao.to/search/?search=baki'">
        <img id="poza"src="vinland-saga-season-2.webp" onclick="location.href='https://animedao.to/search/?search=vinland+saga'">
        <img id="poza"src="download (5).jpg" onclick="location.href='https://animedao.to/search/?search=violet+evergarden'">
        <img id="poza"src="maxresdefault (2).jpg" onclick="location.href='https://animedao.to/search/?search=hunter+x+hunter'">
      </div>
      <button class="handle right-handle">
        <div class="text">&#8250;</div>
      </button>
    </div>
  </div>

  <div class="row">
    <div class="header">
      <h3 class="title">Films</h3>
      <div class="progress-bar"></div>
    </div>
    <div class="container">
      <button class="handle left-handle">
        <div class="text">&#8249;</div>
      </button>
      <div class="slider">
        <img id="poza"src="download (3).jpg" onclick="location.href='https://www.bilibili.tv/en/video/2049989670'">
        <img id="poza"src="AAAABWMS_z8xeGJPFtgzn_91EiBy1G046rm6KEw7men_11NUdJeVciyYFB7HscQFBy95-IR052W4RaF1AbTD6lginGC77AbLWHQT5ZNB.jpg" onclick="location.href='https://www.youtube.com/watch?v=aXNPDm5UCko&ab_channel=NET-HtupYew'">
        <img id="poza"src="AAAABU-EAKhMkI0ARyGa0C7UZF5CFH2BtFedo2m0vgz04OnHtIwSgBs4zfZh7SPqAa4V6a__HlsOqQ8O86by6HNjmTY1jgt6SuSA-LXN.jpg" onclick="location.href='https://theflixer.tv/movie/watch-coach-carter-full-16269'">
        <img id="poza"src="download (6).jpg" onclick="location.href='https://theflixer.tv/movie/watch-the-wolf-of-wall-street-full-19543'">
        <img id="poza"src="6A92791E-07BF-4A9B-B3E6-6B3095EC01B1.jpeg" onclick="location.href='https://theflixer.tv/watch-movie/watch-spider-man-no-way-home-full-71326.5601538'">
        <img id="poza"src="JOhn-wick-4-F.jpg" onclick="location.href='https://theflixer.tv/movie/watch-john-wick-chapter-4-full-90163'">
        <img id="poza"src="AAAABb-3j7GAmzutDIpQWf5_GWK5ToMJtvGtqO3zsYBET04vw35Txm-7fbc1OjxVL7x_kbLsaDS1TUtQwvBRjhFD9HymYB487nTpuoQh.jpg" onclick="location.href='https://theflixer.tv/movie/watch-8-mile-full-18356'">
        <img id="poza"src="AAAABfkAyECrt9xkUuk0xbC-gsu8moRBnEN_AdlSXsmcMhvUWTd72wxafmaLU-GKJAIzvMQQtBSwDzGEteP6Y9188HVgc3QcHp_c9b6N.jpg" onclick="location.href='https://theflixer.tv/movie/watch-taxi-driver-full-19066'">
        <img id="poza"src="AAAABfTHq2ktRCua0cHj60ghw-_G3dnLLTErwAPP64hEf2utvE_rV3fzS2o5n6z_j7EjD_alIew5jljJw3OQQIiFnELLLeagc2GOJBS3.jpg" onclick="location.href='https://theflixer.tv/movie/watch-blade-runner-2049-full-19739'">
        <img id="poza"src="sggkh+[[lxx_9_8411_35_8_muochl_mvg[wmn[zkr[e3[3tnef7scwumJ44OAAqbaBI5paTp[ZZZZYJLA7xWjuM274Ux1RPV7jjgejhwed5Nc8huBtr1qqd8vi_u]UG6PgSQslddKEhMyS]1Jz8cw73iIN3gPPi3X.jpg" onclick="location.href='https://theflixer.tv/movie/watch-all-quiet-on-the-western-front-full-89647'">
        <img id="poza"src="download (7).jpg" onclick="location.href='https://theflixer.tv/movie/watch-the-blind-side-full-17343'">
        <img id="poza"src="AAAABVe3XeyaUyvvnnIAhVCtMXOoUgLvJBCexjG4wDrXBTfPRqtJwXB6OcIRZq3P-8gAHzlre39nEhFMu6HNhkRe_V5mANozTqZClr0R.jpg" onclick="location.href='https://theflixer.tv/movie/watch-jurassic-park-full-18556'">
      </div>
      <button class="handle right-handle">
        <div class="text">&#8250;</div>
      </button>
    </div>
  </div>

    <footer>
      <div class="link-urile-de-jos">
      <span id="AudioDescription"><a href="https://www.netflix.com/browse/audio-description">Audio Description</a></span>
      <span id="HelpCenter"><a href="https://help.netflix.com/">Help Center</a></span>
      <span id="GiftCards"><a href="https://www.netflix.com/redeem">Gift Cards</a></span>
      <span id="Media"><a href="https://media.netflix.com/">Media Center</a></span>
      <span id="Investor"><a href="http://ir.netflix.com/">Investor Relations</a></span>
      <span id="jobs"><a href="https://jobs.netflix.com/">Jobs</a></span>
      <span id="Terms"><a href="https://help.netflix.com/legal/termsofuse">Terms of Use</a></span>
      <span id="privacy"><a href="https://help.netflix.com/legal/privacy">Privacy</a></span>
      <span id="legal"><a href="https://help.netflix.com/legal/notices">Legal Notices</a></span>
      <span id="cookie"><a href="https://www.netflix.com/Cookies">Cookie Preferences</a></span>
      <span id="corporate"><a href="https://help.netflix.com/legal/corpinfo">Corporate Information</a></span>
      <span id="contact"><a href="https://help.netflix.com/contactus">Contact Us</a></span>
      </div>
      <span id="Inc">© 1997-2023 Netflix, Inc.</span>
    </footer>


  
  </div>
</body>
</html>