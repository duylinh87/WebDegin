
<?php
    session_start();
    if(isset($_POST['next'])) {
        /*
        $_SESSION['first-name'] = $_POST['firstname'];
        $_SESSION['last-name'] = $_POST['lastname'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['work'] = $_POST['work'];
        $_SESSION['learn'] = $_POST['learn'];
        $_SESSION['school'] = $_POST['school'];
        */

        foreach ($_POST as $key => $value) {
            $_SESSION['post'][$key] = $value;
        }    
        extract($_SESSION['post']); // Function to extract array
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <title>Persona Page02</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="./css/style.css" />
	<link rel="stylesheet" media="all" href="./css/page2.css" />
</head>

<body>
    <main id="main_wrap">
        <div id="form02">
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
                                <p class="note-line">基本情報</p>
                            </li>
                            <li class="item-line">
                                <p class="line active"></p>
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
                                <p class="line "></p>
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

                    <form id="frm02" action="page3.php" method="post">
                        <div class="box-form">
                            <h2 class="title-form">性格</h2>
                            <ul class="info-personality">
                                <!-- Sociable -->
                                <li class="info-item flex one">
                                    <h3 class="title-item">社交性</h3>
                                    <p class="text-info">
                                        外向的
                                    </p>
                                    <div class="box-input flex">                                        
                                        <div class="item-check-box ">
                                            <label>
                                                <input type="radio" name="sociable" id="sociable01" class="check-box" required="required" aria-required="true" value="sociable01">
                                                <span class="design one"></span>
                                                <p class="text">#フレンドリー</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box ">
                                            <label>
                                                <input type="radio" name="sociable" id="sociable02" class="check-box" required="required" aria-required="true" value="sociable02">
                                                <span class="design two"></span>
                                                <p class="text">#行動が早い</p>
                                            
                                            </label>
                                        </div>
                                        <div class="item-check-box ">
                                            <label>
                                                <input type="radio" name="sociable" id="sociable03" class="check-box" required="required" aria-required="true" value="sociable03">
                                                <span class="design"></span>
                                                <p class="text">#人と会うのが好き</p>
                                            
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="sociable" id="sociable04" class="check-box" required="required" aria-required="true" value="sociable04">
                                                <span class="design two"></span>
                                                <p class="text">#心配性</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="sociable" id="sociable05" class="check-box" required="required" aria-required="true" value="sociable05">
                                                <span class="design one"></span>
                                                <p class="text">#慎重</p>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="text-info right">
                                        内向的
                                    </p>
                                </li>

                                <!-- Opinion -->
                                <li class="info-item flex">
                                    <h3 class="title-item">価値観</h3>
                                    <p class="text-info">
                                        論理
                                    </p>
                                    <div class="box-input flex">
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion01" class="check-box" required="required" aria-required="true" value="opinion01-01">
                                                <span class="design one"></span>
                                                <p class="text">#頭の回転が早い</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion01" class="check-box" required="required" aria-required="true" value="opinion01-02">
                                                <span class="design two"></span>
                                                <p class="text">#合理主義</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion01" class="check-box" required="required" aria-required="true" value="opinion01-03">
                                                <span class="design"></span>
                                                <p class="text">#真面目</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion01" class="check-box" required="required" aria-required="true" value="opinion01-04">
                                                <span class="design two"></span>
                                                <p class="text">#察しが良い</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio"name="opinion01" class="check-box" required="required" aria-required="true" value="opinion01-05">
                                                <span class="design one"></span>
                                                <p class="text">#情に厚い</p>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="text-info right">
                                        感性
                                    </p>
                                </li>

                                <li class="info-item flex">
                                    <p class="text-info">
                                        規律
                                    </p>
                                    <div class="box-input flex">
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion02" class="check-box" required="required" aria-required="true"  value="opinion02-01">
                                                <span class="design one"></span>
                                                <p class="text ">#保守的</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion02" class="check-box" required="required" aria-required="true" value="opinion02-02">
                                                <span class="design two"></span>
                                                <p class="text ">#誘惑に強い</p>
                                            
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion02" class="check-box" required="required" aria-required="true" value="opinion02-03">
                                                <span class="design"></span>
                                                <p class="text ">#じっくり考える</p>
                                            
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion02" class="check-box" required="required" aria-required="true" value="opinion02-04">
                                                <span class="design two"></span>
                                                <p class="text ">#状況把握力</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box ">
                                            <label>
                                                <input type="radio" name="opinion02" class="check-box" required="required" aria-required="true" value="opinion02-05">
                                                <span class="design one"></span>
                                                <p class="text ">#臨機応変</p>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="text-info right">
                                        適応
                                    </p>
                                </li>

                                <li class="info-item flex">
                                    <p class="text-info ">
                                        自我
                                    </p>
                                    <div class="box-input flex">
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion03" class="check-box" required="required" aria-required="true"  value="opinion03-01">
                                                <span class="design one"></span>
                                                <p class="text ">#リーダーシップ</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion03" class="check-box" required="required" aria-required="true" value="opinion03-02">
                                                <span class="design two"></span>
                                                <p class="text ">#自己主張が得意</p>
                                            
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion03" class="check-box" required="required" aria-required="true" value="opinion03-03">
                                                <span class="design"></span>
                                                <p class="text ">#こだわりがある</p>
                                            
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion03" class="check-box" required="required" aria-required="true" value="opinion03-04">
                                                <span class="design two"></span>
                                                <p class="text ">#思いやりがある</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion03" class="check-box" required="required" aria-required="true" value="opinion03-05">
                                                <span class="design one"></span>
                                                <p class="text">#周りに合わせがち</p>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="text-info right">
                                        共感
                                    </p>
                                </li>


                                <li class="info-item flex">
                                    <p class="text-info">
                                        達成
                                    </p>
                                    <div class="box-input flex">
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion04" class="check-box" required="required" aria-required="true"  value="opinion04-01">
                                                <span class="design one"></span>
                                                <p class="text ">#負けず嫌い</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion04" class="check-box" required="required" aria-required="true" value="opinion04-02">
                                                <span class="design two"></span>
                                                <p class="text ">#ハングリー精神</p>
                                            
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion04" class="check-box" required="required" aria-required="true" value="opinion04-03">
                                                <span class="design"></span>
                                                <p class="text">#計画的</p>
                                            
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion04" class="check-box" required="required" aria-required="true" value="opinion04-04">
                                                <span class="design two"></span>
                                                <p class="text">#協調性</p>
                                            </label>
                                        </div>
                                        <div class="item-check-box">
                                            <label>
                                                <input type="radio" name="opinion04" class="check-box" required="required" aria-required="true" value="opinion04-05">
                                                <span class="design one"></span>
                                                <p class="text">#縁の下の力持ち</p>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="text-info right">
                                        貢献
                                    </p>
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
    <!--End main-->
</body>
</html>