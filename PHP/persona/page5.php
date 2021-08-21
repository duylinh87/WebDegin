
<?php
    session_start();
    if(isset($_POST['next'])) {
        //print_r($_POST);die();
        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }
        extract($_SESSION['post']);
        $social_type = implode(', ', $social_type);
        //echo $time . '+' . $social_type;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <title>Persona Page05</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="./css/style.css" />
	<link rel="stylesheet" media="all" href="./css/page5.css" />
	<link rel="stylesheet" media="all" href="./css/validate.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/validate.js"></script>
</head>

<body>
    <main id="main_wrap">
        <div id="form05">
            <div class="form-main ">
                <div id="head-form">
                    <p class="img-box"><img src="./images/form_head_pc.png" alt=""></p>
                    <span class ="text-head">ペルソナ設定ツール</span>
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
                                <p class="line active"></p>
                                <p class="note-line">転職・就職</p>
                            </li>
                            <li class="item-line">
                                <p class="line"></p>
                                <p class="note-line">その他</p>
                            </li>
                            <li class="item-line">
                                <p class="line"></p>
                                <p class="note-line"> お問合せ</p>
                            </li>
                            <li class="item-line last">
                                <p class="line"></p>
                                <p class="note-line">完了</p>
                            </li>
                        </ul>
                    </div>

                    <form id="frm05" action="page6.php" method="post">
                        <div class="box-form">
                            <h2 class="title-form">転職・就職</h2>
                            <ul class="info-social">
                                <!-- Change job -->
                                <li class="info-item">
                                    <h3 class="title-item">転職活動を始めた理由</h3>
                                    <div class="box-check checkbox_reason_change_job">
                                        <div class="check-item">
                                            <label class="checkbox_field_text">人間関係が良くない
                                                <input type="checkbox" name="reason_change_job[]" value="人間関係が良くない">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div class="check-item">
                                            <label class="checkbox_field_text">残業が多い
                                                <input type="checkbox" name="reason_change_job[]" value="残業が多い">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div class="check-item">
                                            <label class="checkbox_field_text">給与が低い
                                                <input type="checkbox" name="reason_change_job[]" value="給与が低い">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>

                                        <div class="check-item">
                                            <label class="checkbox_field_text">休みが少ない
                                                <input type="checkbox" name="reason_change_job[]" value="休みが少ない">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>

                                        <div class="check-item">
                                            <label class="checkbox_field_text">スキルアップしたい
                                                <input type="checkbox" name="reason_change_job[]" value="スキルアップしたい">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>

                                        <div class="check-item">
                                            <label class="checkbox_field_text">異業種を経験したい
                                                <input type="checkbox" name="reason_change_job[]" value="異業種を経験したい">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div style="visibility:hidden; color:red;" id="chk_option_error">
                                            Please select at least one option !
                                        </div>
                                    </div>
                                </li>
                                <li class="info-item">
                                    <h3 class="title-item">キャリアプラン</h3>
                                    <div class="box-tarea">
                                        <h4 class="title-tea">3年後はどうなっていたいですか？</h4>
                                        <textarea name="career_plan" class="texa-01" required="required" aria-required="true"></textarea>
                                    </div>
                                </li>
                                <li class="info-item check-number">
                                    <h3 class="title-item">優先順位</h3>
                                    <div class="box-check">
                                        <div class="check-item">
                                            <label class="checkbox_field_text">年収
                                                <input type="checkbox" name="priority_job[]" value="年収" required>
                                                <span class="check_mark number one" data-number =""></span>
                                            </label>
                                        </div>
                                        <div class="check-item">
                                            <label class="checkbox_field_text">仕事内容
                                                <input type="checkbox" name="priority_job[]" value="仕事内容" required>
                                                <span class="check_mark number two" data-number=""></span>
                                            </label>
                                        </div>
                                        <div class="check-item">
                                            <label class="checkbox_field_text">勤務地
                                                <input type="checkbox" name="priority_job[]" value="勤務地" required>
                                                <span class="check_mark number three" data-number=""></span>
                                            </label>
                                        </div>

                                        <div class="check-item">
                                            <label class="checkbox_field_text">雇用形態
                                                <input type="checkbox" name="priority_job[]" value="雇用形態" required>
                                                <span class="check_mark number four" data-number=""></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>

                                <li class="info-item">
                                    <h3 class="title-item">思考性<span class="text-note">※複数選択可</span></h3>
                                    <div class="box-check checkbox_think_job">
                                        <div class="check-item">
                                            <label class="checkbox_field_text">事業の安定性
                                                <input type="checkbox" name="think_job[]" value="事業の安定性">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        
                                        <div class="check-item">
                                            <label class="checkbox_field_text">成長・キャリアアップ
                                                <input type="checkbox" name="think_job[]" value="成長・キャリアアップ">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div class="check-item ">
                                            <label class="checkbox_field_text">ワークライフバランス
                                                <input type="checkbox" name="think_job[]" value="ワークライフバランス">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>

                                        <div class="check-item">
                                            <label class="checkbox_field_text">仕事のやりがい
                                                <input type="checkbox" name="think_job[]" value="仕事のやりがい">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>

                                        <div class="check-item">
                                            <label class="checkbox_field_text">職場の雰囲気・人間関係
                                                <input type="checkbox" name="think_job" value="職場の雰囲気・人間関係">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>

                                        <div class="check-item">
                                            <label class="checkbox_field_text">給与
                                                <input type="checkbox" name="think_job" value="給与">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </li>

                                <li class="info-item">
                                    <h3 class="title-item">転職活動の方法<span class="text-note two">※複数選択可</span></h3>
                                    <div class="box-check checkbox_how_to_change_job">
                                        <div class="check-item">
                                            <label class="checkbox_field_text">職業紹介・エージェント
                                                <input type="checkbox" name="how_to_change_job[]" value="職業紹介・エージェント">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div class="check-item">
                                            <label class="checkbox_field_text">スカウトサービス
                                                <input type="checkbox" name="how_to_change_job[]" value="スカウトサービス">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div class="check-item">
                                            <label class="checkbox_field_text">自己応募
                                                <input type="checkbox" name="how_to_change_job[]" value="自己応募">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
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