
<?php
    session_start();
    if(isset($_POST['next'])) {
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
        extract($_SESSION['post']);       
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <title>Persona Page07</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="./css/style.css" />
	<link rel="stylesheet" media="all" href="./css/page7.css" />
	<link rel="stylesheet" media="all" href="./css/validate.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/validate.js"></script>
</head>

<body>
    <main id="main_wrap">
        <div id="form07">
            <div class="form-main ">
                <div id="head-form">
                    <p class="img-box"><img src="./images/form_head_pc.png" alt=""></p>
                    <span class="text-head">ペルソナ設定ツール</span>
                </div>
                <div class="inner">
                    <h3 id="title-page">下記質問のご入力をお願いします</h3>
                    <div class="line-active">
                        <ul class="box-active flex">
                            <li class="item-line first">
                                <p class="line"></p>
                                <p class="note-line"> 基本情報</p>
                            </li>
                            <li class="item-line">
                                <p class="line"></p>
                                <p class="note-line">性格</p>
                            </li>
                            <li class="item-line">
                                <p class="line"></p>
                                <p class="note-line">ライフスタイル</p>
                            </li>
                            <li class="item-line">
                                <p class="line"></p>
                                <p class="note-line">インターネット環境</p>
                            </li>
                            <li class="item-line">
                                <p class="line"></p>
                                <p class="note-line">転職・就職</p>
                            </li>
                            <li class="item-line">
                                <p class="line"></p>
                                <p class="note-line">その他</p>
                            </li>
                            <li class="item-line">
                                <p class="line active"></p>
                                <p class="note-line">お問合せ</p>
                            </li>
                            <li class="item-line last">
                                <p class="line"></p>
                                <p class="note-line">完了</p>
                            </li>
                        </ul>
                    </div>

                    <div class="box-form">
                        <p class="title">お客様情報</p>
                        <p class="title-note">
                            最後にお客様情報のご入力をお願いいたします。<br />
                            ご入力いただいたメールアドレス宛にペルソナ診断の入力結果を送付させていただきます、
                        </p>
                        <p class="title-note">                            
                            <span class="text-red">※は必須項目となります。</span>
                        </p>
                        <form id="frm07" action="complete.php" method="post">
                            <ul class="info-social">
                                <!-- Info -->
                                <li class="info-item">
                                    <h3 class="title-item"><span class="text-red">※ </span>お名前</h3>
                                    <div class="box-tarea">
                                        <input type="text" name="name" class="texa-01" required="required" aria-required="true">
                                    </div>
                                </li>
                                <li class="info-item">
                                    <h3 class="title-item"><span class="text-red">※ </span>お名前(ふりがな) </h3>
                                    <div class="box-tarea">
                                        <input type="text" name="phonetic_name" class="texa-01" required="required" aria-required="true">
                                    </div>
                                </li>
                                <li class="info-item">
                                    <h3 class="title-item"><span class="text-red">※ </span>会社・団体名</h3>
                                    <div class="box-tarea">
                                        <input type="text" name="company" class="texa-01" required="required" aria-required="true">
                                    </div>
                                </li>

                                <li class="info-item">
                                    <h3 class="title-item">所属/役職</h3>
                                    <div class="box-tarea">
                                        <input type="text" name="position" class="texa-01">
                                    </div>
                                </li>
                                <li class="info-item">
                                    <h3 class="title-item"><span class="text-red">※ </span>住所</h3>
                                    <div class="box-tarea">
                                        <input type="text" name="address" class="texa-01" required="required" aria-required="true">
                                    </div>
                                </li>
                                <li class="info-item">
                                    <h3 class="title-item"><span class="text-red">※ </span>業界 </h3>
                                    <div class="box-tarea">
                                        <div class="select-form">
                                            <select class="select work" id="work" name="work" required>
                                                <option value="">選択してください</option>
                                                <option value="IT・通信・インターネット">IT・通信・インターネット</option>
                                                <option value="サービス">サービス</option>
                                                <option value="広告・出版・メディア">広告・出版・メディア</option>
                                                <option value="アパレル・化粧品">アパレル・化粧品</option>
                                                <option value="運輸・輸送">運輸・輸送</option>
                                                <option value="メーカー・製造">メーカー・製造</option>
                                                <option value="商社">商社</option>
                                                <option value="自動車">自動車</option>
                                                <option value="流通・小売">流通・小売</option>
                                                <option value="食品">食品</option>
                                                <option value="旅行・ホテル関連">旅行・ホテル関連</option>
                                                <option value="コンサルティング">コンサルティング</option>
                                                <option value="金融・証券・保険">金融・証券・保険</option>
                                                <option value="建築・不動産">建築・不動産</option>
                                                <option value="住宅・インテリア">住宅・インテリア</option>
                                                <option value="医療・医薬・介護・福祉関連">医療・医薬・介護・福祉関連</option>
                                                <option value="教育・学習支援関連">教育・学習支援関連</option>
                                                <option value="官公庁">官公庁</option>
                                                <option value="その他">その他</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li class="info-item ">
                                    <h3 class="title-item"><span class="text-red">※ </span>メールアドレス </h3>
                                    <div class="box-tarea">
                                        <span id="mail-status" class="notice"></span>
                                        <input type="text" name="email" id="email" class="texa-01" title="Type a valid email (format: your@email.com)" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" required="required" aria-required="true">
                                    </div>
                                </li>

                                <li class="info-item">
                                    <h3 class="title-item"><span class="text-red">※ </span>メールアドレス(確認)</h3>
                                    <div class="box-tarea">
                                        <input type="text" name="confirm_email" id="confirm_email" class="texa-01" onfocus="validateEmail(document.getElementById('email'), this);" 
    oninput="validateEmail(document.getElementById('email'), this);" required="required" aria-required="true">
                                    </div>
                                </li>
                                <li class="info-item">
                                    <h3 class="title-item"><span class="text-red">※ </span>電話番号</h3>
                                    <div class="box-tarea">
                                        <input type="text" name="phone" class="texa-01" required="required" aria-required="true"></input>
                                    </div>
                                </li>
                                
                            </ul>
                            <p class="title-note">
                                当社は、個人情報を、お問合せに関する内容確認、調査及びご返信時の参照情報として利用いたします。
                                お問合せにあたり、<a href ="https://www.1049.cc/privacy/" target="_blank" title="個人情報の取り扱い" class="text-red">個人情報の取り扱い </a>を必ずご確認ください。
                            </p>

                            <div class="check-item">
                                <label class="checkbox_field_text check-next">個人情報の取り扱いに同意する
                                    <input type="checkbox" name="check-test" required>
                                    <span class="check_mark"></span>
                                </label>
                            </div>
                            <div class="link-box">
                                <input type="submit" name="next" class="link" value="次へ">
                            </div>
                        </form>
                    </div>        
                </div>
            </div>
        </div>
    </main>
</body>
</html>