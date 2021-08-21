
<?php
    session_start();    
    foreach ($_POST as $key => $value) {
        $_SESSION['post'][$key] = $value;
    }
    extract($_SESSION['post']);

    
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <title>Complete</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="./css/style.css" />
	<link rel="stylesheet" media="all" href="./css/complete.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
</head>

<body class="page" onload="getPDF();">
    <main id="main_wrap">
        <div id="complete">
            <div class="form-main ">
                <div id="head-form">
                    <p class="img-box"><img src="./images/form_head_pc.png" alt=""></p>
                    <span class ="text-head">ペルソナ設定ツール</span>
                </div>
                <div class="inner">
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
                                <p class="note-line">その他</p>
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
                                <p class="line active"></p>
                                <p class="note-line">完了</p>
                            </li>
                        </ul>
                    </div>

                    <div class="box-form">
                        <div class="title-info flex">
                            <p class="box-img">                               
                                <?php 
                                    if (isset($gender)) {
                                        if ($gender === '男性') {
                                            echo '<img src="./images/complete_pic_male.jpg" class="img-width" alt="">';
                                        }
                                        if ($gender === '女性') {
                                            echo '<img src="./images/complete_pic_female.jpg" class="img-width" alt="">';
                                        }
                                    } 
                                ?>
                            </p>
                            <ul class="box-text">
                                <li class="item-text flex">
                                    <p class="text-left name">名前</p>
                                    <p class="text-right"><?php if(isset($name)) echo $name; ?></p>
                                </li>
                                <li class="item-text flex">
                                    <p class="text-left age">年齢</p>
                                    <p class="text-right"><?php if(isset($age)) echo $age . '歳'; ?></p>
                                </li>
                                <li class="item-text flex">
                                    <p class="text-left gender">性別</p>                                    
                                    <p class="text-right"><?php if(isset($gender)) echo $gender; ?></p>
                                </li>
                                <li class="item-text flex">
                                    <p class="text-left address">現住所</p>
                                    <p class="text-right"><?php if(isset($address)) echo $address; ?></p>
                                </li>
                                <li class="item-text flex">
                                    <p class="text-left job">職種</p>
                                    <p class="text-right"><?php if(isset($job)) echo $job; ?></p>
                                </li>
                                <li class="item-text flex">
                                    <p class="text-left position">役職</p>
                                    <p class="text-right"><?php if(isset($check_position)) echo $check_position; ?></p>
                                </li>
                                <li class="item-text flex">
                                    <p class="text-left school">最終学歴 </p>
                                    <p class="text-right"><?php if(isset($learn)) echo $learn; ?></p>
                                </li>
                                <li class="item-text flex">
                                    <p class="text-left learn">出身大学 </p>
                                    <p class="text-right"><?php if(isset($school)) echo $school; ?></p>
                                </li>
                            </ul>
                        </div>

                        <div class="content-personality"><!-- Page2 -->
                            <h2 class="title-form">性格</h2>
                             <ul class="box-block flex">
                                 <li class="item-block" id="<?php if(isset($sociable)) echo $sociable; ?>">
                                    <?php 
                                        if ($sociable == 'sociable01') echo '#フレンドリー'; 
                                        elseif ($sociable == 'sociable02') echo '#行動が早い'; 
                                        elseif ($sociable == 'sociable03') echo '#人と会うのが好き'; 
                                        elseif ($sociable == 'sociable04') echo '#心配性'; 
                                        elseif ($sociable == 'sociable05') echo '#慎重'; 
                                     ?>
                                </li>
                                 <li class="item-block" id="<?php echo $opinion01; ?>">
                                    <?php 
                                        if ($opinion01 == 'opinion01-01') echo '#頭の回転が早い'; 
                                        elseif ($opinion01 == 'opinion01-02') echo '#合理主義'; 
                                        elseif ($opinion01 == 'opinion01-03') echo '#真面目'; 
                                        elseif ($opinion01 == 'opinion01-04') echo '#察しが良い'; 
                                        elseif ($opinion01 == 'opinion01-05') echo '#情に厚い'; 
                                     ?>
                                </li>
                                <li class="item-block" id="<?php echo $opinion02; ?>">
                                    <?php 
                                        if ($opinion02 == 'opinion02-01') echo '#保守的'; 
                                        elseif ($opinion02 == 'opinion02-02') echo '#誘惑に強い'; 
                                        elseif ($opinion02 == 'opinion02-03') echo '#じっくり考える'; 
                                        elseif ($opinion02 == 'opinion02-04') echo '#状況把握力'; 
                                        elseif ($opinion02 == 'opinion02-05') echo '#臨機応変'; 
                                     ?>
                                </li>
                                <li class="item-block" id="<?php echo $opinion03; ?>">
                                    <?php 
                                        if ($opinion03 == 'opinion03-01') echo '#リーダーシップ';
                                        elseif ($opinion03 == 'opinion03-02') echo '#自己主張が得意';
                                        elseif ($opinion03 == 'opinion03-03') echo '#こだわりがある';
                                        elseif ($opinion03 == 'opinion03-04') echo '#思いやりがある';
                                        elseif ($opinion03 == 'opinion03-05') echo '#周りに合わせがち';
                                     ?>
                                </li>
                                    <li class="item-block" id="<?php echo $opinion04; ?>">
                                        <?php 
                                            if ($opinion04 == 'opinion04-01') echo '#負けず嫌い'; 
                                            elseif ($opinion04 == 'opinion04-02') echo '#ハングリー精神'; 
                                            elseif ($opinion04 == 'opinion04-03') echo '#計画的'; 
                                            elseif ($opinion04 == 'opinion04-04') echo '#協調性'; 
                                            elseif ($opinion04 == 'opinion04-05') echo '#縁の下の力持ち'; 
                                        ?>
                                </li>                       
                             </ul>
                        </div>

                        <div class="all-check">                           
                             <ul class="box-all">
                                 <li class="item-check" id ="form-03">
                                    <h2 class="title-form">ライフスタイル</h2>
                                    <div class="box-result">
                                        <h3 class="title-item">家族構成</h3><!-- Family -->
                                        <p class="result">
                                            <?php 
                                                if (isset($family)) {
                                                    if ($family == '既婚') echo $family . ': ' . $children . '人'; 
                                                    else echo $family;
                                                }                                                
                                            ?>
                                        </p>
                                        <h3 class="title-item">生活スタイル</h3><!-- Marital status -->
                                        <p class="result">
                                            <?php if (isset($marital_status)) echo $marital_status; ?>
                                        </p>
                                        <h3 class="title-item">休日の過ごし方</h3><!-- Spend holidays -->
                                        <p class="result">
                                            <?php if (isset($spend_holidays)) echo $spend_holidays; ?>
                                        </p>
                                        <h3 class="title-item">趣味</h3><!-- Hobby -->
                                        <p class="result">
                                            <?php if (isset($hobby)) echo $hobby; ?>
                                        </p>
                                    </div>
                                 </li>

                                 <li class="item-check" id ="form-04">
                                    <h2 class="title-form">インターネット環境</h2>
                                    <div class="box-result">
                                        <h3 class="title-item">インターネット環境</h3>
                                        <p class="result" id="result01">
                                            <?php if (isset($internet)) echo $internet; ?>
                                        </p>
                                        <h3 class="title-item">使用時間</h3>
                                        <p class="result" id="result01">
                                            <span class ="item-result">一日に</span>
                                            <span class ="item-result"><?php if (isset($time)) echo $time; ?></span>
                                            <span class ="item-result">時間程度</span>
                                        </p>
                                        <h3 class="title-item">利用しているSNS</h3>
                                        <p class="result" id="result01">
                                            <?php  
                                                if (isset($social_type)) {
                                                    foreach ($social_type as $social_type_item) {
                                                        if ($social_type_item == 'その他' && isset($other_social_type)) {
                                                            $social_type_item = $other_social_type;
                                                        }
                                                        echo '<span class="item-result">';
                                                        echo $social_type_item;
                                                        echo '</span>';
                                                    }
                                                }                                                
                                            ?>
                                        </p>
                                        <h3 class="title-item">各SNSの利用割合</h3>
                                        <p class="result social" id="result01">
                                        <?php                                           
                                            if (isset($facebook_percent)) {
                                                echo '<span class="item-result">';
                                                echo 'Facebook ' . $facebook_percent . '%';
                                                echo '</span>';
                                            }
                                            if (isset($twitter_percent)) {
                                                echo '<span class="item-result">';
                                                echo 'Twitter ' . $twitter_percent . '%';
                                                echo '</span>';
                                            }
                                            if (isset($instagram_percent)) {
                                                echo '<span class="item-result">';
                                                echo 'Instagram ' . $instagram_percent . '%';
                                                echo '</span>';
                                            }
                                            if (isset($other_social_percent)) {
                                                echo '<span class="item-result">';
                                                echo 'その他 ' . $other_social_percent . '%';
                                                echo '</span>';
                                            }
                                        ?>  
                                        </p>
                                    </div>
                                 </li>

                                 <li class="item-check" id="form-05">
                                    <h2 class="title-form">転職・就職</h2>
                                    <div class="box-result">
                                        <h3 class="title-item">転職活動を始めた理由</h3>
                                        <p class="result" id="result01">
                                            <?php  
                                                if (isset($reason_change_job)) {
                                                    foreach ($reason_change_job as $reason_change_job_item) {
                                                        echo '<span class="item-result">';
                                                        echo $reason_change_job_item;
                                                        echo '</span>';
                                                    }
                                                }
                                            ?>
                                        </p>
                                        <h3 class="title-item">キャリアプラン</h3>
                                        <p class="result" id="result01">
                                            <?php if (isset($career_plan)) echo $career_plan; ?>
                                        </p>
                                        <h3 class="title-item">優先順位</h3>
                                        <p class="result" id="result01">
                                            <?php   
                                                
                                                if (isset($priority_job)) {                                                    
                                                    sort($priority_job);
                                                    foreach ($priority_job as $priority_job_item) {
                                                        echo '<span class="item-result">';
                                                        echo $priority_job_item;
                                                        echo '</span>';
                                                    }
                                                }
                                            ?>
                                        </p>
                                        <h3 class="title-item">思考性</h3>
                                        <p class="result" id="result01">
                                            <?php
                                                if (isset($think_job)) {                                                    
                                                    foreach ($think_job as $think_job_item) {
                                                        //sort($think_job_item);
                                                        echo '<span class="item-result">';
                                                        echo $think_job_item;
                                                        echo '</span>';
                                                    }
                                                }
                                            ?>
                                        </p>
                                        <h3 class="title-item">転職活動の方法</h3>
                                        <p class="result" id="result01">
                                            <?php
                                                if (isset($how_to_change_job)) {
                                                    foreach ($how_to_change_job as $how_to_change_job_item) {
                                                        echo '<span class="item-result">';
                                                        echo $how_to_change_job_item;
                                                        echo '</span>';
                                                    }
                                                }                                                
                                            ?>
                                        </p>
                                    </div>
                                 </li>

                                 <li class="item-check" id="form-06">
                                    <h2 class="title-form">その他</h2>
                                    <div class="box-result">
                                        <h3 class="title-item">質問1　基本情報の中で絶対に外せない項目はありますか？</h3>
                                        <p class="result" id="result01">
                                            <?php if(isset($faq01)) echo $faq01; ?>
                                        </p>
                                        <h3 class="title-item">質問2　外せない項目である、具体的な理由は何ですか？</h3>
                                        <p class="result" id="result01">
                                            <?php if(isset($faq02)) echo $faq02; ?>
                                        </p>
                                        <h3 class="title-item">質問3　モデルとなった「社内で活躍している人」が貴社に入社したきっかけは何ですか？</h3>
                                        <p class="result" id="result01">
                                            <?php if(isset($faq03)) echo $faq03; ?>
                                        </p>
                                        <h3 class="title-item">質問4　その方が貴社で働き続ける魅力は何ですか？</h3>
                                        <p class="result" id="result01">
                                            <?php if(isset($faq04)) echo $faq04; ?>
                                        </p>
                                        <h3 class="title-item">質問5　その方が貴社で働く中で、仕事以外の魅力は何ですか？</h3>
                                        <p class="result" id="result01">
                                            <?php if(isset($faq05)) echo $faq05; ?>
                                        </p>
                                    </div>
                                 </li>
                             </ul>
                        </div>
                    </div>
                    <div id="link-box" class="link-box">
                        <a id="link" class="link" download>診断結果を保存する</a>
                        <p class="link-note">※診断結果をPDFデータで保存できます</p>
                    </div>
                </div>
            </div>
        </div>        
    </main>
    <!-- Script -->
    <script type='text/javascript'>    
        function getPDF(){            
            var email =  '<?php echo $email;?>';
          
            var HTML_Width = $(".page").width();
            var HTML_Height = $(".page").height();
            var top_left_margin = 10;
            var PDF_Width = HTML_Width+(top_left_margin*2);
            var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
            var canvas_image_width = HTML_Width;
            var canvas_image_height = HTML_Height;
            var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;

            html2canvas($(".page")[0],{allowTaint:true}).then(function(canvas) {
                canvas.getContext('2d');            
                console.log(canvas.height+"  "+canvas.width);
                
                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
                pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);                
                
                for (var i = 1; i <= totalPDFPages; i++) {
                    pdf.addPage(PDF_Width, PDF_Height);
                    pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
                }            
                //pdf.save("HTML-Document.pdf");
                var pdfupload = btoa(pdf.output()); 
                var file_name = 'persona';
                var filename_url = 'files/' + file_name + '.pdf';
                //alert(filename_val);
                $.ajax({
                    method: "POST",
                    url: "handler.php",
                    data: {data: pdfupload, filename: file_name, email: email},
                    }).done(function(data){
                    //   alert(data);
                    console.log(data); 
                    
                    document.getElementById('link').removeAttribute("disabled");                  
                    document.getElementById('link').classList.add('active');   
                    document.getElementById('link').setAttribute("href", filename_url);                 
                }); 
            });
        };
  </script>
</body>
</html>


