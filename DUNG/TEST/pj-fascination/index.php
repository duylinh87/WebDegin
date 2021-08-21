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
	  
    <div id="fascination">
        
        <div class="breadcrumb">
            <a class="breadcrumb-info" href="/">HOME</a>
            <span>当社の3つの魅力</span>
        </div>

        <div id="main-content">
            <div class="banner-home">
                <div class="content">
                    <img class="img-desktop" src="images/fascination/banner.png" alt="FASCINATION">
                    <img class="img-mobile" src="images/fascination/banner-mobile.png" alt="FASCINATION">
                    <div class="title-banner">
                        <h2>FASCINATION<span> 当社の3つの魅力</span></h2>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="heading-blog">
                    <h4>当社で働く<span class="t-1">3</span><span class="t-2">つ</span>の魅力</h4>
                    <p>○○県○○市に本社を置く 「株式会社○○○○」は、 ほぼすべての列車部品の○○○製作を担い、 国内の車両メーカーとともに、 最新技術・デザインの新しい自動車をこの世に生み出しています。<br>
                        こちらでは日本のモノづくりを支え、創業より成長を続ける弊社の魅力についてご紹介します。</p>
                </div>

                <div class="content-blog">
                    <article class="item-blog">
                        <div class="item-heading-blog">
                            <h4>01</h4>
                            <h2>技術力</h2>
                            <p>弊社は、常に最新の情報を仕入れ積極的に取り入れようとする風土があり、○○○や■■■など最先端のIT技術・加工機械を導入しています。
                                最新機器が揃っていることで、営業の面においてもお客様にアピールがしやすく、お客様のご要望に応じた柔軟な提案がしやすい環境です。</p>
                        </div>
                        <div class="item-img-blog">
                            <img class="img-desktop" src="images/fascination/img-1.png" alt="img">
							<img class="img-mobile" src="images/fascination/img-mobile-3.png" alt="img">
                        </div>
                    </article>

                    <article class="item-blog">
                        <div class="item-img-blog">
                            <img class="img-desktop" src="images/fascination/img-2.png" alt="img">
							<img class="img-mobile" src="images/fascination/img-mobile-2.png" alt="img">
                        </div>
                        <div class="item-heading-blog">
                            <h4>02</h4>
                            <h2>成長・キャリアアップ</h2>
                            <p>会社が成長していくためには社員ひとりひとりの成長・キャリアアップも重要と捉え、資格取得を目指したり、新しい技術を取り入れるための講習会参加などを奨励し
                                ています。そのためのスケジュールの管理や費用負担も行い、バックアップ体制も万全です。</p>
                        </div>
                    </article>

                    <article class="item-blog">
                        <div class="item-heading-blog">
                            <h4>03</h4>
                            <h2>コミュニケーション</h2>
                            <p>社員同士、皆が個性を認め合い、高め合っていくには、職場環境がよいことが重要になります。そこで年齢、性別、在籍年数に関係なく自他選で選ばれた社員が経営側と話し
                                合いの場を持つワークショップを開催。業務上や職場環境の改善点を議論し、常によいものにしていく努力を続けています。</p>
                        </div>
                        <div class="item-img-blog">
                            <img class="img-desktop" src="images/fascination/img-3.png" alt="img">
							<img class="img-mobile" src="images/fascination/img-mobile-1.png" alt="img">
                        </div>
                    </article>
                </div>

            </div>
        </div>

       

    </div>
    
  	<footer id="footer">
	   <img src="images/fascination/img-footer.png" alt="footer">
   </footer>
	  
    <link rel="stylesheet" media="all" href="./css/fascination.css" />
    <script type="text/javascript" src="./js/fascination.js"></script>
<!-- ↑ 編集可能領域 ↑ -->


<!-- ↓ 編集不可領域 ↓ -->
  </main>
</body>
</html>
<!-- ↑ 編集不可領域 ↑ -->