<!-- ↓ 編集不可領域 ↓ -->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,minimum-scale=0.5">
<title>株式会社天職市場 採用情報</title>
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" media="all" href="./css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<style type="text/css">
<!--
@media print, screen and (min-width: 768px) {
  body {
    min-width: 1024px;
  }
}
-->
</style>
</head>

<body style="background-color: #fff; color: #333;">
  <main id="main_wrap">
<!-- ↑ 編集不可領域 ↑ -->


<!--

【HTML＆jQuery（JavaScript）記述ルール】

① xxxxxx と記載されている箇所についてはディレクトリ名に変更してください
　（例：oneday、faq 等）

② コンテンツ部分のみ構築をお願いいたします
　（ヘッダー・フッター部分は構築いただかなくて大丈夫です）

③ HTML内の画像指定パスは、相対パスで指定してください
　（例：./images/ディレクトリ名/画像名.拡張子）

④ 基本はjQuery 1系（1.11.0）を使用してください

⑤ 外部サイトへリンクする設定を行う場合は、リンク先をフルパスで記述し別タブで開くよう設定をお願いいたします
　（例：<a href="http://www.xxx.co.jp/" target="_blank" rel="noopener">●●</a>）

⑥ 編集不可領域の部分のソースは編集・削除しないようお願いいたします

-----

【ファイル編集ルール】

① xxxxxxと命名されているファイルについてはディレクトリ名に変更してください（例：oneday、faq 等）

② リセットCSS等が記述されているファイル（default.css、layout.css、reset.css、style.css）については
　 編集・削除しないようお願いいたします
　（既にリセットCSS等を用意しておりますので、新たにリセットCSSを記述する必要はございません）

③ CSSを記述する場合はxxxxxx.cssのファイル名をディレクトリ名（例：oneday、faq 等）に変更し、
　 そのCSSファイルに記述いただくようお願いいたします
　（CSS記述ルールについてはxxxxxx.cssに記載しております）

④ 他のページと共有して使用するJSファイルや画像などにつきましては、
　 assetsフォルダ等の共有フォルダは作らず、ページ毎の個別フォルダ内のimages、jsフォルダに
　 入れていただきますようお願いいたします

-->

<!-- ↓ 編集可能領域 ↓ -->
  	<header id="header" class="main-header">
		<div class="content-header">
			<div class="logo">
				<h1><a href="#">企業ロゴ</a></h1>
			</div>
			<div class="nav-menu">
				<div class="menu-bar-toggle">
					<span></span>
				</div>
			</div>
		</div>
	</header>
	  
    <div id="oneday">

		<div class="breadcrumb">
            <a class="breadcrumb-info" href="/">HOME</a>
            <span>社員の1日</span>
        </div>
		
		<div id="main-content">
			<div class="banner-home">
                <div class="content">
                    <img class="img-desktop" src="images/oneday/banner.png" alt="One day">
					<img class="img-mobile" src="images/oneday/banner-mobile.png" alt="One day">
                    <div class="title-banner">
                        <h2>One day<span> 社員の1日</span></h2>
                    </div>
                </div>
            </div>
			
			<div class="container">
				<div class="people-details">
					<div class="content">
						<div class="img-people">
							<img class="img-desktop" src="images/oneday/img-1.png" alt="Hanako Tenshoku">
							<img class="img-mobile" src="images/oneday/img2-mobile.png" alt="Hanako Tenshoku">
						</div>
						<div class="information">
							<div class="content-information">
								<span class="t1">○○店</span>
								<h4>お運び係（パート</h4>
								<h3>天職 花子 <span class="name">Hanako Tenshoku</span></h3>
								<h5>2015年入社</h5>
								<p>子供達が小学生になり、昼間の空いた時間でできる仕事を探して○○へ入社。もともと○○のメニューが大好きでよく通っていました</p>
							</div>
						</div>
						<span class="mark"></span>
					</div>
				</div>

				<div class="one-day-work">
					<div class="banner-title">
						<h2>ONE DAY <span>天職花子のある日の1日</span></h2>
					</div>

					<div class="time-one-day-work">
						<div class="col-item-work">
							<div class="work-item">
								<div class="left-content">
									<div class="text-content">
										<h4 class="heading">出勤</h4>
										<p>家とお店が近いので、自転車か歩きで通勤しています。ドアtoドアで10分くらい♪あっという間に到着します。</p>
									</div>
									<div class="time-content">
										<span>9:00</span>
									</div>
								</div>
							</div>
							
							<div class="work-item item-img">
								<div class="left-content">
									<div class="text-content">
										<h4 class="heading">開店準備</h4>
										<p>お店の周囲と店内清掃、商品の陳列、釣り銭の準備などお客様を迎える準備を行います。</p>
									</div>
									<div class="time-content">
										<span>9:15</span>
									</div>
								</div>
								<div class="img-details">
									<img src="images/oneday/img-2.png" alt="開店準備">
								</div>
							</div>

							<div class="work-item">
								<div class="left-content">
									<div class="text-content">
										<h4 class="heading">接客</h4>
										<p>さぁ、開店<br>テイクアウトのお客様や、店内でお召し上がりのお客様にご注文をお伺いします。</p>
									</div>
									<div class="time-content">
										<span>10:00</span>
									</div>
								</div>
							</div>
							
							<div class="work-item">
								<div class="left-content">
									<div class="text-content">
										<h4 class="heading">ピークの時間帯！</h4>
										<p>1日の中で一番忙しい時間帯なので、お待たせしないようお客様にお声掛けしながらお出しし、商品の向きなどにも気をつけます。</p>
									</div>
									<div class="time-content">
										<span>12:00</span>
									</div>
								</div>
							</div>

							<div class="work-item item-img">
								<div class="left-content">
									<div class="text-content">
										<h4 class="heading">お昼休憩</h4>
										<p>順番に休憩を取るのでひとりでのランチが多いですが、音楽を聴いたり、「ありがとうノート」に他メンバーへのメッセージを記入したりします。</p>
									</div>
									<div class="time-content">
										<span>12:45</span>
									</div>
								</div>
								<div class="img-details">
									<img src="images/oneday/img-3.png" alt="お昼休憩">
								</div>
							</div>
							
							<div class="work-item item-img">
								<div class="left-content">
									<div class="text-content">
										<h4 class="heading">発注</h4>
										<p>その日の勢いや前日の状況・今週の流れ・先週の同じ曜日など、様々な角度から商品の動向を勘案して発注します。</p>
									</div>
									<div class="time-content">
										<span>13:50</span>
									</div>
								</div>
								<div class="img-details">
									<img src="images/oneday/img-4.png" alt="開店準備">
								</div>
							</div>

							<div class="work-item">
								<div class="left-content">
									<div class="text-content">
										<h4 class="heading">アイドルタイム</h4>
										<p>お客様が少ない時間帯はレジ廻りやカウンター上の小物類の補充、伝票類の整理、仕入れノートへの記入、ショーケースの掃除などをしています。</p>
									</div>
									<div class="time-content">
										<span>15:00</span>
									</div>
								</div>
							</div>
							
							<div class="work-item">
								<div class="left-content">
									<div class="text-content">
										<h4 class="heading">退勤</h4>
										<p>夕方から勤務するメンバーに「その日にあったこと」など伝達事項の申し送りを済ませてから退勤します。</p>
									</div>
									<div class="time-content">
										<span>17:00</span>
									</div>
								</div>
							</div>

						</div>
					
					</div>
				</div>
			</div>
		</div>
    </div>
	  
	<footer id="footer">
	   <img src="images/oneday/footer.jpg" alt="footer">
	</footer>
	  
    <link rel="stylesheet" media="all" href="./css/oneday.css" />
    <script type="text/javascript" src="./js/xxxxxx.js"></script>
<!-- ↑ 編集可能領域 ↑ -->


<!-- ↓ 編集不可領域 ↓ -->
  </main>
</body>
</html>
<!-- ↑ 編集不可領域 ↑ -->