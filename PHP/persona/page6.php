
<?php
    session_start();
    if(isset($_POST['next'])) {
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
        extract($_SESSION['post']);
        if (isset($social_type)) {
            $social_type = implode(', ', $social_type);     
        }          
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <title>Persona Page06</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="./css/style.css" />
	<link rel="stylesheet" media="all" href="./css/page6.css" />
	<link rel="stylesheet" media="all" href="./css/validate.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/validate.js"></script>
</head>

<body>
    <main id="main_wrap">
        <div id="form06">
            <div class="form-main ">
                <div id="head-form">
                    <p class="img-box"><img src="./images/form_head_pc.png" alt=""></p>
                    <span class ="text-head"> ペルソナ設定ツール</span>
                </div>
                <div class="inner">
                    <h3 id="title-page">下記質問のご入力をお願いします</h3>
                    <div class="line-active">
                        <ul class="box-active flex">
                            <li class="item-line first">
                                <p class="line"></p>
                                <p class="note-line">基本情報</p>
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
                                <p class="note-line">転職・就職 </p>
                            </li>
                            <li class="item-line">
                                <p class="line active"></p>
                                <p class="note-line">その他</p>
                            </li>
                            <li class="item-line">
                                <p class="line"></p>
                                <p class="note-line">お問合せ</p>
                            </li>
                            <li class="item-line last">
                                <p class="line"></p>
                                <p class="note-line">完了</p>
                            </li>
                        </ul>
                    </div>

                    <form id="frm06" action="page7.php" method="post">
                        <div class="box-form">
                            <h2 class="title-form">その他</h2>
                            <ul class="info-social">
                                <!-- FAQ -->
                                <li class="info-item">
                                    <h3 class="title-item">Q1　基本情報の中で絶対に外せない項目はありますか？</h3>
                                    <div class="box-check checkbox_faq">
                                        <div class="check-item">
                                            <label class="checkbox_field_text">年齢
                                                <input type="checkbox" name="faq01" value="年齢">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div class="check-item">
                                            <label class="checkbox_field_text">性別
                                                <input type="checkbox" name="faq01" value="性別">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div class="check-item">
                                            <label class="checkbox_field_text">居住地
                                                <input type="checkbox" name="faq01" value="居住地">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>

                                        <div class="check-item">
                                            <label class="checkbox_field_text">職業
                                                <input type="checkbox" name="faq01" value="職業">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>

                                        <div class="check-item">
                                            <label class="checkbox_field_text">最終学歴
                                                <input type="checkbox" name="faq01" value="最終学歴">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>

                      
                                    </div>
                                </li>
                                <li class="info-item">
                                    <h3 class="title-item">Q2　外せない項目である、具体的な理由は何ですか？</h3>
                                    <div class="box-tarea">
                                        <textarea name="faq02" class="texa-01" required="required" aria-required="true"></textarea>
                                    </div>
                                </li>
                                <li class="info-item">
                                    <h3 class="title-item">Q3　モデルとなった「社内で活躍している人」が貴社に入社したきっかけは何ですか？</h3>
                                    <div class="box-tarea">
                                        <textarea name="faq03" class="texa-01" required="required" aria-required="true"></textarea>
                                    </div>
                                </li>
                                <li class="info-item">
                                    <h3 class="title-item">Q4　その方が貴社で働き続ける魅力は何ですか？</h3>
                                    <div class="box-tarea">
                                        <textarea name="faq04" class="texa-01" required="required" aria-required="true"></textarea>
                                    </div>
                                </li>

                                <li class="info-item">
                                    <h3 class="title-item">Q5　その方が貴社で働く中で、仕事以外の魅力は何ですか？</h3>
                                    <div class="box-tarea">
                                        <textarea name="faq05" class="texa-01" required="required" aria-required="true"></textarea>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="link-box">
                            <input type="submit" name="next" class="link" value="次へ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>