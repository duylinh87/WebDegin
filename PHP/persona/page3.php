
<?php
    session_start();
    if(isset($_POST['next'])) {
        /*
        $_SESSION['sociable'] = $_POST['sociable'];
        $_SESSION['opinion01'] = $_POST['opinion01'];
        $_SESSION['opinion02'] = $_POST['opinion02'];
        $_SESSION['opinion03'] = $_POST['opinion03'];
        $_SESSION['opinion04'] = $_POST['opinion04'];
        */

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
    <title>Persona Page03</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="./css/style.css" />
	<link rel="stylesheet" media="all" href="./css/page3.css" />
	<link rel="stylesheet" media="all" href="./css/validate.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./js/validate.js"></script>
</head>

<body>
    <main id="main_wrap">
        <div id="form03">
            <div class="form-main">
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
                                <p class="line active"></p>
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
                                <p class="line"></p>
                                <p class="note-line"> お問合せ</p>
                            </li>
                            <li class="item-line last">
                                <p class="line"></p>
                                <p class="note-line">完了</p>
                            </li>
                        </ul>
                    </div>

                    <form id="frm03" action="page4.php" method="post">
                        <div class="box-form">
                            <h2 class="title-form">ライフスタイル</h2>
                            <ul class="info-Lifestyle"> 
                                <!-- Family -->
                                <li class="info-item flex">
                                    <h3 class="title-item">家族構成</h3>
                                    <div class="box-input flex">
                                        <div class="item-check-box flex">
                                            <input type="radio" name="family" id="family01" class="check-box" required="required" aria-required="true" value="独身">
                                            <label class="label-check-box" for="family01">独身</label>
                                        </div>
                                        <div class="item-check-box flex">
                                            <input type="radio" name="family" id="family02" class="check-box" required="required" aria-required="true" value="既婚">
                                            <label class="label-check-box" for="family02">既婚</label>
                                        </div>
                                        <div class="item-check-box flex next">                                            
                                            <span class="span-check-box next" for="03">子供</span>
                                        </div>
                                        
                                        <div class="item-name">     
                                            <div class="select-form">
                                                <select class="select children" id="children" name="children" required disabled>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="それ以上">それ以上</option>
                                                </select>
                                            </div>                                       
                                            <label class="label-input right" for="children number">人</label>
                                        </div>
                                    </div>
                                </li>
                            
                                <!-- Marital status -->
                                <li class="info-item flex">
                                    <h3 class="title-item">生活スタイル</h3>
                                    <div class="box-input flex">
                                        <div class="item-check-box flex">
                                            <input type="radio" name="marital_status" id="04"  class="check-box" required="required" aria-required="true" value="朝型">
                                            <label class="label-check-box" for="04">朝型</label> 
                                        </div>
                                        <div class="item-check-box flex">
                                            <input type="radio" name="marital_status" id="05" class="check-box" required="required" aria-required="true" value="夜型">
                                            <label class="label-check-box" for="05">夜型</label> 
                                        </div>
                                    </div>
                                </li>

                                <!-- Spend holidays -->
                                <li class="info-item flex two">
                                    <h3 class="title-item">休日の過ごし方</h3>
                                    <div class="box-input flex">
                                        <div class="item-check-box flex two">
                                            <input type="radio" name="spend_holidays" id="06" class="check-box" required="required" aria-required="true" value="インドア">
                                            <label class="label-check-box" for="06">インドア</label>
                                        </div>
                                        <div class="item-check-box flex two">
                                            <input type="radio" name="spend_holidays" id="07" class="check-box" required="required" aria-required="true" value="アウトドア">
                                            <label class="label-check-box" for="07">アウトドア</label>
                                        </div>
                                    </div>
                                </li>

                                <!-- Hobby -->
                                <li class="info-item flex">
                                    <h3 class="title-item">趣味</h3>
                                    <div class="box-tarea">
                                        <textarea name="hobby" class="texa-01" required></textarea>
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
    <!--end main-->
</body>
</html>