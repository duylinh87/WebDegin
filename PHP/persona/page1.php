
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <title>Persona</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="./css/style.css" />
	<link rel="stylesheet" media="all" href="./css/page1.css" />
  
</head>

<body>
    <main id="main_wrap">
        <div id="form">
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
                                <p class="line active"></p>
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
                                <p class="note-line">転職・就職</p>
                            </li>
                            <li class="item-line">
                                <p class="line"></p>
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
                    
                    <form id="frm01" action="page2.php" method="post" onsubmit="validateForm01()">
                        <div class="box-form">
                            <h2 class="title-form">基本情報</h2>
                            <ul class="info-base">
                                <li class="info-item flex">
                                    <p class="text-info flex">
                                        年齢
                                    </p>
                                    <div class="box-input">
                                        <div class="item-name">                                           	
                                            <input id="age" name="age" required title="Number only" pattern="[0-9.]+" required>
                                            <label class="label-input right" for="age">歳</label>
                                        </div>
                                    </div>
                                </li>

                                <li class="info-item flex">
                                    <p class="text-info flex">
                                        性別
                                    </p>
                                    <div class="box-input flex">
                                        <div class="item-check-box flex">
                                            <input type="radio" name="gender" id="female" class="check-box" value="男性" required>
                                            <label class="label-check-box" for="female">男性</label>
                                        </div>
                                        <div class="item-check-box flex">
                                            <input type="radio" name="gender" id="male" class="check-box" value="女性" required>
                                            <label class="label-check-box" for="male">女性</label>
                                        </div>
                                    </div>
                                </li>

                                <li class="info-item flex">
                                    <p class="text-info flex">
                                        現住所
                                    </p>
                                    <div class="box-input">
                                    <div class="select-form">
                                            <select class="select address" id="address" name="address" required>
                                                <option value="北海道">北海道</option>
                                                <option value="青森県">青森県</option>
                                                <option value="岩手県">岩手県</option>
                                                <option value="宮城県">宮城県</option>
                                                <option value="秋田県">秋田県</option>
                                                <option value="山形県">山形県</option>
                                                <option value="福島県">福島県</option>
                                                <option value="茨城県">茨城県</option>
                                                <option value="栃木県">栃木県</option>
                                                <option value="群馬県">群馬県</option>
                                                <option value="埼玉県">埼玉県</option>
                                                <option value="千葉県">千葉県</option>
                                                <option value="東京都">東京都</option>
                                                <option value="神奈川県">神奈川県</option>
                                                <option value="新潟県">新潟県</option>
                                                <option value="富山県">富山県</option>
                                                <option value="石川県">石川県</option>
                                                <option value="福井県">福井県</option>
                                                <option value="山梨県">山梨県</option>
                                                <option value="長野県">長野県</option>
                                                <option value="岐阜県">岐阜県</option>
                                                <option value="静岡県">静岡県</option>
                                                <option value="愛知県">愛知県</option>
                                                <option value="三重県">三重県</option>
                                                <option value="滋賀県">滋賀県</option>
                                                <option value="京都府">京都府</option>
                                                <option value="大阪府">大阪府</option>
                                                <option value="兵庫県">兵庫県</option>
                                                <option value="奈良県">奈良県</option>
                                                <option value="和歌山県">和歌山県</option>
                                                <option value="鳥取県">鳥取県</option>
                                                <option value="島根県">島根県</option>
                                                <option value="岡山県">岡山県</option>
                                                <option value="広島県">広島県</option>
                                                <option value="山口県">山口県</option>
                                                <option value="徳島県">徳島県</option>
                                                <option value="香川県">香川県</option>
                                                <option value="愛媛県">愛媛県</option>
                                                <option value="高知県">高知県</option>
                                                <option value="福岡県">福岡県</option>
                                                <option value="佐賀県">佐賀県</option>
                                                <option value="長崎県">長崎県</option>
                                                <option value="熊本県">熊本県</option>
                                                <option value="大分県">大分県</option>
                                                <option value="宮崎県">宮崎県</option>
                                                <option value="鹿児島県">鹿児島県</option>
                                                <option value="沖縄県">沖縄県</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>

                                <li class="info-item flex">
                                    <p class="text-info flex">
                                        職種
                                    </p>
                                    <div class="box-input">
                                        <div class="select-form">
                                            <select class="select job" id="job" name="job" required>
                                                <option value="営業">営業</option>
                                                <option value="企画・管理">企画・管理</option>
                                                <option value="ITエンジニア">ITエンジニア</option>
                                                <option value="建築・土木系エンジニア">建築・土木系エンジニア</option>
                                                <option value="素材・化学・食品系エンジニア">素材・化学・食品系エンジニア</option>
                                                <option value="クリエイティブ">クリエイティブ</option>
                                                <option value="事務・アシスタント">事務・アシスタント</option>
                                                <option value="販売・サービス">販売・サービス</option>
                                                <option value="医療系専門職">医療系専門職</option>
                                                <option value="金融系専門職">金融系専門職</option>
                                                <option value="コンサルタント">コンサルタント</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li class="info-item flex">
                                    <p class="text-info flex">
                                        役職
                                    </p>
                                    <div class="box-input flex">
                                        <div class="item-check-box flex">
                                            <input type="radio" name="check_position" id="position_yes" class="check-box" value="有" required>
                                            <label class="label-check-box" for="female">有</label>
                                        </div>
                                        <div class="item-check-box flex">
                                            <input type="radio" name="check_position" id="position_no" class="check-box" value="無" required>
                                            <label class="label-check-box" for="male">無</label>
                                        </div>
                                    </div>
                                </li>

                                <li class="info-item flex">
                                    <p class="text-info flex">
                                        最終学歴
                                    </p>
                                    <div class="box-right">
                                        <div class="box-check flex">
                                            <div class="item-check-box flex">
                                                <input type="radio" id="03" name="learn" class="check-box" value="4年制大学卒業" required>
                                                <label class="label-check-box" for="03">4年制大学卒業</label>
                                            </div>
                                            <div class="item-check-box flex">
                                                <input type="radio" id="04" name="learn" class="check-box" value="大学院修了" required>
                                                <label class="label-check-box" for="04">大学院修了</label>
                                            </div>
                                            <div class="item-check-box flex">
                                                <input type="radio" id="05" name="learn" class="check-box" value="短大卒業" required>
                                                <label class="label-check-box" for="05">短大卒業</label>
                                            </div>
                                        </div>
                                        <div class="box-check flex">
                                            <div class="item-check-box flex">
                                                <input type="radio" id="06" name="learn" class="check-box" value="専門学校卒業" required>
                                                <label class="label-check-box" for="06">専門学校卒業</label>
                                            </div>
                                            <div class="item-check-box flex">
                                                <input type="radio" id="07" name="learn" class="check-box" value="高卒" required>
                                                <label class="label-check-box" for="07">高卒</label>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="info-item flex">
                                    <p class="text-info flex">
                                        出身大学
                                    </p>
                                    <div class="box-input flex">
                                        <div class="item-check-box flex">
                                            <input type="radio" id="08" name="school" class="check-box" value="文系" required>
                                            <label class="label-check-box" for="08">文系</label>
                                        </div>
                                        <div class="item-check-box flex">
                                            <input type="radio" id="09" name="school" class="check-box" value="理系" required>
                                            <label class="label-check-box" for="09">理系</label>
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
    <!--End main-->
</body>
</html>