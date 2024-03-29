<!-- ↓ 編集不可領域 ↓ -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=0.5">
    <title>株式会社天職市場 採用情報</title>
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="./css/style.css"/>
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

    <!--header-->

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

    <div id="sectionEntry">

        <div class="breadcrumb">
            <a class="breadcrumb-info" href="/">HOME</a>
            <span>WEB登録・予約</span>
        </div>

        <div id="main-content">
            <div class="banner-home">
                <div class="content">
                    <img class="img-desktop" src="images/entry/banner.png" alt="Entry">
                    <div class="title-banner">
                        <h2>ENTRY<span> WEB登録・予約</span></h2>
                    </div>
                </div>
            </div>

            <!--  entry-content  -->

            <div class="entry-content">
                <div class="container">
                    <div class="title-page">
                        <h4>エントリーフォーム</h4>
                        <p>WEBでカンタン、登録してお仕事を見つけよう！</p>
                    </div>

                    <div class="boxSetup">
                        <div class="itemBoxSetup active">
                            <h4>STEP 1</h4>
                            <span>必要項目の入力</span>
                        </div>

                        <div class="itemBoxSetup">
                            <h4>STEP 2</h4>
                            <span>必要項目の確認</span>
                        </div>

                        <div class="itemBoxSetup">
                            <h4>STEP 3</h4>
                            <span>登録完了</span>
                        </div>
                    </div>

                    <div class="blockSetup blockProfile">
                        <form id="formProfile" action="" method="">
                            <div class="toggle-open">
                                <span class="icon-toggle">クリックで開閉</span>
                            </div>
                            <h4 class="title"><span class="icon-down"></span>プロフィール</h4>
                            <div class="contentBox">
                                <div class="form-groupSetup item-1">
                                    <div class="col-item-title">
                                        <p>氏名<span class="textRequired">必須</span></p>
                                    </div>
                                    <div class="col-item-2 item1">
                                        <label class="label-form">姓</label>
                                        <input type="text" id="first-name" name="first-name" class="inputText" required>
                                    </div>

                                    <div class="col-item-2 item2">
                                        <label class="label-form">名</label>
                                        <input type="text" id="last-name" name="last-name" class="inputText" required>
                                    </div>
                                </div>

                                <div class="form-groupSetup item-2">
                                    <div class="col-item-title">
                                        <p>氏名（カナ）<span class="textRequired">必須</span></p>
                                    </div>
                                    <div class="col-item-2 item">
                                        <label class="label-form">セイ</label>
                                        <input type="text" id="allName" name="allName" class="inputText" required>
                                    </div>

                                    <div class="col-item-2 item">
                                        <label class="label-form">メイ</label>
                                        <input type="text" id="month" name="month" class="inputText" required>
                                    </div>
                                </div>

                                <div class="form-groupSetup item-3">
                                    <div class="col-item-title">
                                        <p>生年月日<span class="textRequired">必須</span></p>
                                    </div>
                                    <div class="col-item-3 item1">
                                        <div class="form-select">
                                            <select class="form-control-select" id="form-year">
                                                <option>選択してください</option>
                                                <option>1996</option>
                                                <option>1997</option>
                                                <option>1998</option>
                                                <option>1999</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <label class="label-form">年</label>
                                    </div>

                                    <div class="col-item-3 item2">
                                        <div class="form-select">
                                            <select class="form-control-select" id="form-month">
                                                <option>選択してください</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <label class="label-form">月</label>
                                    </div>
                                    <div class="col-item-3 item3">
                                        <div class="form-select">
                                            <select class="form-control-select" id="form-day">
                                                <option>選択してください</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <label class="label-form">日</label>
                                    </div>
                                </div>

                                <div class="form-groupSetup item-4 form-check">
                                    <div class="col-item-title">
                                        <p>性別<span class="textRequired">必須</span></p>
                                    </div>
                                    <div class="col-item-4 item">
                                        <input type="radio" id="female" name="gender" value="option1" class="checkBox"
                                               checked>
                                        <label class="label-form">男</label>
                                    </div>
                                    <div class="col-item-4 item">
                                        <input type="radio" id="male" name="gender" value="option2" class="checkBox">
                                        <label class="label-form">女</label>
                                    </div>
                                </div>

                                <div class="form-groupSetup item-5 form-check">
                                    <div class="col-item-title">
                                        <p>結婚</p>
                                    </div>
                                    <div class="col-item-5 item">
                                        <input type="radio" id="marry" name="marry" value="marry" class="checkBox" checked>
                                        <label class="label-form">未婚</label>
                                    </div>
                                    <div class="col-item-5 item">
                                        <input type="radio" id="married" name="marry" value="married" class="checkBox">
                                        <label class="label-form">既婚</label>
                                    </div>

                                    <div class="col-item-5 item">
                                        <input type="radio" id="unknown" name="marry" value="unknown" class="checkBox">
                                        <label class="label-form">不明</label>
                                    </div>
                                </div>

                                <div class="form-groupSetup item-6">
                                    <div class="col-item-title">
                                        <p>結婚<span class="textRequired">必須</span></p>
                                    </div>
                                    <div class="col-item-1">
                                        <div class="group-item">
                                            <label class="label-form">郵便番号</label>
                                            <div class="group-item">
                                                <input type="text" id="Postalcode" class="inputText" name="postalCode"
                                                       placeholder="例：1234567">
                                                <span>郵便番号から住所を検索</span>
                                            </div>
                                        </div>

                                        <div class="group-item">
                                            <label class="label-form">都道府県</label>
                                            <div class="group-itemRight">
                                                <div class="form-select">
                                                    <select id="prefectures" class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="group-item">
                                            <label class="label-form">市町村</label>
                                            <div class="group-itemRight">
                                                <div class="form-select">
                                                    <select id="municipalities" class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="group-item group-item-input">
                                            <label class="label-form">以下の住所</label>
                                            <div class="group-itemRight">
                                                <input type="text" id="address" name="address" class="inputText"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-groupSetup item-7 item-phone">
                                    <div class="col-item-title">
                                        <p>電話番号<span class="textRequired">必須</span></p>
                                    </div>
                                    <div class="col-item-6">
                                        <input type="text" id="phone" name="phone" class="inputText"
                                               placeholder="例：09012345678" required>
                                        <label class="label-form">（携帯電話可）</label>
                                    </div>
                                </div>

                                <div class="form-groupSetup item-8 item-mail">
                                    <div class="col-item-title">
                                        <p>メールアドレス<span class="textRequired">必須</span></p>
                                    </div>
                                    <div class="col-item-6">
                                        <input type="text" id="mail" name="mail" class="inputText"
                                               placeholder="例：xxx@xx.ne.jp" required>
                                        <label class="label-form">（携帯電話可）</label>
                                    </div>
                                </div>

                                <div class="form-groupSetup item-9 current-occupation">
                                    <div class="col-item-title">
                                        <p>現在の職業<span class="textRequired">必須</span></p>
                                    </div>
                                    <div class="col-item-6">
                                        <div class="form-select">
                                            <select class="form-control-select">
                                                <option>選択してください</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-groupSetup item-10 item-level">
                                    <div class="col-item-title">
                                        <p>最終学歴</p>
                                    </div>
                                    <div class="col-item-1">
                                        <div class="group-item">
                                            <label class="label-form">学校区分</label>
                                            <div class="group-itemSelect">
                                                <select class="form-control-select">
                                                    <option>選択してください</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="group-item">
                                            <label class="label-form">卒業年度</label>
                                            <div class="group-itemSelect">
                                                <select class="form-control-select">
                                                    <option>選択してください</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="group-item">
                                            <label class="label-form">状態</label>
                                            <div class="group-itemSelect">
                                                <select class="form-control-select">
                                                    <option>選択してください</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="group-item group-item-input">
                                            <label class="label-form">学校名</label>
                                            <div class="group-itemInput">
                                                <input type="text" id="school-name" name="schoolName" class="inputText"
                                                       required>
                                            </div>
                                        </div>

                                        <div class="group-item group-item-input">
                                            <label class="label-form">学部/学科名</label>
                                            <div class="group-itemInput">
                                                <input type="text" id="department" name="department" class="inputText"
                                                       required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="formSubmit">
                                <div class="boxRecaptcha">
                                    <div class="item-boxRecaptcha">
                                        <input type="checkbox" name="recaptcha" class="checkbox-capcha" required>
                                        <label class="label-form">個人情報の取り扱いに同意する</label>
                                    </div>
                                    <span class="infor-text">個人情報の取扱いについて</span>
                                </div>

                                <div class="groupSubmit">
                                    <div class="item-submit-left">
                                        <input type="submit" name="returnProfile" value="もどる" class="returnProfile">
                                    </div>
                                    <div class="item-submit-right">
                                        <input type="submit" name="submitProfile" value="内容を確認する" class="submitProfile">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="blockSetup blockSkill">
                        <form id="formSkill" action="" method="">

                            <!--  Row 1-->
                            <div class="row-item row-profile">
                                <div class="toggle-open">
                                    <span class="icon-toggle">クリックで開閉</span>
                                </div>
                                <h4 class="title"><span class="icon-down"></span>プロフィール</h4>
                                <div class="contentBox">
                                    <div class="form-groupSkill item-language">
                                        <div class="col-item-title">
                                            <p>語学</p>
                                        </div>
                                        <div class="col-item-1">
                                            <div class="group-item">
                                                <label class="label-form">英語会話</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item">
                                                <label class="label-form">英語業務</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item group-item-input">
                                                <label class="label-form">TOEIC</label>
                                                <div class="group-itemRight">
                                                    <input type="text" id="toeic" name="toeic" class="inputText">
                                                    <span class="point">点</span>
                                                </div>
                                            </div>

                                            <div class="group-item group-item-input">
                                                <label class="label-form">TOEFL</label>
                                                <div class="group-itemRight">
                                                    <input type="text" id="toefl" name="toefl" class="inputText">
                                                    <span class="point">点</span>
                                                </div>
                                            </div>

                                            <div class="group-item group-item-input">
                                                <label class="label-form">英検</label>
                                                <div class="group-itemRight">
                                                    <input type="text" id="eiken" name="eiken" class="inputText">
                                                </div>
                                            </div>

                                            <div class="group-item">
                                                <label class="label-form">その他言語</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item">
                                                <label class="label-form">その他業務</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-groupSkill item-pc-skills">
                                        <div class="col-item-title">
                                            <p>PCスキル</p>
                                        </div>
                                        <div class="col-item-1">
                                            <div class="group-item word">
                                                <label class="label-form">Word</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item excel">
                                                <label class="label-form">Excel</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item access">
                                                <label class="label-form">Access</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item PowerPoint">
                                                <label class="label-form">PowerPoint</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item webRelated">
                                                <label class="label-form">WEB関連</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item">
                                                <label class="label-form">その他PCスキル</label>
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item other-business">
                                                <label class="label-form">その他業務</label>
                                                <div class="group-itemRight">
                                                    <textarea name="commentBusiness" class="commentBusiness"
                                                              maxlength="1500"></textarea>
                                                    <p>最大1500文字まで</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-groupSkill item-qualifications">
                                        <div class="col-item-title">
                                            <p>資格</p>
                                        </div>
                                        <div class="col-item-1">
                                            <textarea name="qualifications" class="qualifications"
                                                      maxlength="1500"></textarea>
                                            <p>最大1500文字まで</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--  Row 2  -->
                            <div class="row-item row-carrier">
                                <div class="toggle-open">
                                    <span class="icon-toggle">クリックで開閉</span>
                                </div>
                                <h4 class="title"><span class="icon-down"></span>キャリアシート</h4>
                                <div class="contentBox">
                                    <div class="form-groupCarrier item-number">
                                        <div class="col-item-title">
                                            <p>転職回数</p>
                                        </div>
                                        <div class="col-item-1">
                                            <div class="group-itemSelect">
                                                <select class="form-control-select">
                                                    <option>選択してください</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-groupCarrier item-experiencedJob">
                                        <div class="col-item-title">
                                            <p>経験職種</p>
                                        </div>
                                        <div class="col-item-1">
                                            <div class="group-item sub-item-experiencedJob">
                                                <div class="group-item-left group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>

                                                <div class="group-item-right group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item sub-item-experiencedJob">
                                                <div class="group-item-left group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>

                                                <div class="group-item-right group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item sub-item-experiencedJob">
                                                <div class="group-item-left group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>

                                                <div class="group-item-right group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item sub-item-experiencedJob">
                                                <div class="group-item-left group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>

                                                <div class="group-item-right group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-groupCarrier item-experience-industry">
                                        <div class="col-item-title">
                                            <p>経験職種</p>
                                        </div>
                                        <div class="col-item-1">
                                            <div class="group-item sub-item-experience-industry">
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item sub-item-experience-industry">
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item sub-item-experience-industry">
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="group-item sub-item-experience-industry">
                                                <div class="group-itemSelect">
                                                    <select class="form-control-select">
                                                        <option>選択してください</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-groupCarrier item-management-experience">
                                        <div class="col-item-title">
                                            <p>マネージメント経験</p>
                                        </div>
                                        <div class="col-item-1">
                                            <div class="col-item-4 item">
                                                <input type="radio" id="yes" name="management-experience"
                                                       value="option1" class="checkBox" checked>
                                                <label class="label-form">あり</label>
                                            </div>
                                            <div class="col-item-4 item">
                                                <input type="radio" id="no" name="management-experience" value="option2"
                                                       class="checkBox">
                                                <label class="label-form">なし</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-groupCarrier item-management">
                                        <div class="col-item-title">
                                            <p>マネージメント人数</p>
                                        </div>
                                        <div class="col-item-1">
                                            <div class="group-itemSelect">
                                                <select class="form-control-select">
                                                    <option>選択してください</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-groupCarrier item-work-experience">
                                        <div class="col-item-title">
                                            <p>職務経歴（最大5件まで）</p>
                                        </div>
                                        <div class="col-item-1">
                                            <div class="group-item item-company-name">
                                                <label class="label-form">会社名</label>
                                                <div class="group-itemCompany">
                                                    <input type="text" id="company-name" name="companyName"
                                                           class="inputText">
                                                </div>
                                            </div>

                                            <div class="group-item item-service-start">
                                                <label class="label-form">勤務開始年月</label>
                                                <div class="itemleft-itemSelect">
                                                    <div class="group-itemSelect">
                                                        <select class="form-control-select" id="yearStart">
                                                            <option>選択してください</option>
                                                            <option>1996</option>
                                                            <option>1997</option>
                                                            <option>1998</option>
                                                            <option>1999</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <span class="span-form">年</span>
                                                </div>

                                                <div class="itemright-itemSelect">
                                                    <div class="group-itemService">
                                                        <select class="form-control-select" id="monthStart">
                                                            <option>選択してください</option>
                                                            <option>1996</option>
                                                            <option>1997</option>
                                                            <option>1998</option>
                                                            <option>1999</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <span class="span-form">月</span>
                                                </div>
                                            </div>

                                            <div class="group-item item-endOfWork">
                                                <label class="label-form">勤務終了年月</label>
                                                <div class="itemleft-itemSelect">
                                                    <div class="group-itemSelect">
                                                        <select class="form-control-select">
                                                            <option>選択してください</option>
                                                            <option>1996</option>
                                                            <option>1997</option>
                                                            <option>1998</option>
                                                            <option>1999</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <span class="span-form">年</span>
                                                </div>
                                                <div class="itemright-itemSelect">
                                                    <div class="group-itemService">
                                                        <select class="form-control-select">
                                                            <option>選択してください</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <span class="span-form">月</span>
                                                </div>
                                            </div>

                                            <div class="group-item item-employmentForm">
                                                <label class="label-form">雇用形態</label>
                                                <div class="group-item-employmentForm">
                                                    <div class="form-select">
                                                        <select class="form-control-select">
                                                            <option>選択してください</option>
                                                            <option>1996</option>
                                                            <option>1997</option>
                                                            <option>1998</option>
                                                            <option>1999</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="group-item item-jobContent">
                                                <label class="label-form">職務内容</label>
                                                <div class="group-itemCompany">
                                                    <textarea name="jobContent" class="jobContent"
                                                              maxlength="5000"></textarea>
                                                    <p>最大5000文字まで</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="addContent">
                                        <span class="toggle-addContent">+ 職務経歴を追加</span>
                                    </div>
                                </div>


                            </div>
                            <!-- End Row 2 -->

                            <div class="row-item own-pr">
                                <div class="toggle-open">
                                    <span class="icon-toggle">クリックで開閉</span>
                                </div>
                                <h4 class="title"><span class="icon-down"></span>自己PR</h4>
                                <div class="contentBox">
                                    <div class="content-own-pr">
                                        <textarea name="own-pr" class="ownPR" maxlength="1200"></textarea>
                                        <p>最大1200文字まで</p>
                                    </div>
                                </div>
                            </div>

                            <div class="formSubmit">
                                <div class="boxRecaptcha">
                                    <div class="item-boxRecaptcha">
                                        <input type="checkbox" name="recaptcha" class="checkbox-capcha" required>
                                        <label class="label-form">個人情報の取り扱いに同意する</label>
                                    </div>
                                    <span class="infor-text">個人情報の取扱いについて</span>
                                </div>

                                <div class="groupSubmit">
                                    <div class="item-submit-left">
                                        <input type="submit" name="returnSkill" value="もどる" class="returnProfile">
                                    </div>
                                    <div class="item-submit-right">
                                        <input type="submit" name="submitSkill" value="内容を確認する" class="submitProfile">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <footer id="footer">
        <img src="images/entry/img-footer.png" alt="footer">
    </footer>

    <link rel="stylesheet" media="all" href="./css/entry.css"/>
    <script type="text/javascript" src="./js/entry.js"></script>
    <!-- ↑ 編集可能領域 ↑ -->


    <!-- ↓ 編集不可領域 ↓ -->
</main>
</body>
</html>
<!-- ↑ 編集不可領域 ↑ -->