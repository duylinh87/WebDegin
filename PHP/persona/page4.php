
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
    <title>Persona Page04</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="./css/style.css" />
	<link rel="stylesheet" media="all" href="./css/page4.css" />
	<link rel="stylesheet" media="all" href="./css/validate.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/validate.js"></script>
</head>

<body>
    <main id="main_wrap">
        <div id="form04">
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
                            <li class="item-line ">
                                <p class="line active"></p>
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
                                <p class="line"></p>
                                <p class="note-line"> お問合せ</p>
                            </li>
                            <li class="item-line last">
                                <p class="line"></p>
                                <p class="note-line">完了</p>
                            </li>
                        </ul>
                    </div>
                    
                    <form id="frm04" action="page5.php" method="post"> 
                        <div class="box-form">
                            <h2 class="title-form">インターネット環境</h2>
                            <ul class="info-social">
                                <!-- Internet -->
                                <li class="info-item flex">
                                    <h3 class="title-item">インターネット環境</h3>
                                    <div class="box-input flex">
                                        <div class="item-check-box flex">
                                            <input type="radio" name="internet" class="check-box" value="有" required="required" aria-required="true">
                                            <label class="label-check-box" for="01">有</label>
                                        </div>
                                        <div class="item-check-box flex">
                                            <input type="radio" name="internet" class="check-box" value="無" required="required" aria-required="true">
                                            <label class="label-check-box " for="02">無</label>
                                        </div>
                                    </div>
                                </li>

                                <li class="info-item ">
                                    <h3 class="title-item">使用時間</h3>
                                    <div class="box-select flex">
                                        <span id="time-status" class="notice"></span>	
                                        <span class="oneday">一日に</span>
                                        <div class="select-form">
                                            <select class="select time" id="time" name="time" required>
                                                <option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                            </select>
                                        </div>
                                        <span class="time">時間程度</span>
                                    </div>
                                </li>

                                <li class="info-item">
                                    <h3 class="title-item">利用しているSNS<span class="text-note">※複数選択可</span></h3>
                                    <div class="box-check checkbox_group_social">
                                        <div class="check-item flex">
                                            <label class="checkbox_field_text">Facebook
                                                <input type="checkbox" name="social_type[]" value="Facebook">
                                                <span class="check_mark"></span>
                                            </label>
                                            <label class="checkbox_field_text">Twiter
                                                <input type="checkbox" name="social_type[]" value="Twiter">
                                                <span class="check_mark"></span>
                                            </label>
                                            <label class="checkbox_field_text">Instagram
                                                <input type="checkbox" name="social_type[]" value="Instagram">
                                                <span class="check_mark"></span>
                                            </label>
                                        </div>
                                        <div class="check-item flex">
                                            <label class="checkbox_field_text">その他
                                                <input type="checkbox" name="social_type[]" id="check_social_type" value="その他"><!-- Check to display -->
                                                <span class="check_mark"></span>
                                            </label>
                                            <input name="other_social_type" id="other_social_type">
                                        </div>
                                        <div style="visibility:hidden; color:red;" id="chk_option_error">
                                            Please select at least one option !
                                        </div>
                                    </div>
                                </li>

                                <li class="info-item">
                                    <h3 class="title-item">各SNSの利用割合</h3>
                                    <div class="box-ratio">
                                        <div class="item-name">
                                            <label class="label-input">Facebook</label>
                                            <input type="text" name="facebook_percent" id="facebook_percent" title="Number only" pattern="[0-9.]+" required>
                                            <span class ="ratio">%</span>
                                        </div>
                                        <div class="item-name">
                                            <label class="label-input" for="radio02">Twitter</label>
                                            <input type="text" name="twitter_percent" id="twitter_percent" title="Number only" pattern="[0-9.]+" required>
                                            <span class ="ratio">%</span>
                                        </div>
                                        <div class="item-name">
                                            <label class="label-input">Instagram</label>
                                            <input type="text" name="instagram_percent" id="instagram_percent" title="Number only" pattern="[0-9.]+" required>
                                            <span class ="ratio">%</span>
                                        </div>
                                        <div class="item-name">
                                            <label class="label-input">その他</label>
                                            <input  type="text" name="other_social_percent" id="other_percent" title="Number only" pattern="[0-9.]+" required>
                                            <span class ="ratio">%</span>
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