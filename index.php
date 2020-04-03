<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>素数</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
<div class="container">
    <div class="title"><h1>素数の子</h1></div>
    <h3 class="title">〜素数に選ばれた特別な存在〜</h3>
    <p>あなたの生年月日を入力してください。</p>
    <form action="answer.php" method="post">
        <div class="selects">
            <select id="year" name="year" class="select">
                <option value="0">----</option>
                <?php 
                for($i=2019;$i>=1900;$i--){
                    echo "<option value='{$i}'>{$i}</option>"; 
                }
                ?>
            </select>年
            
            <select id="month" name="month" class="select">
                <option value="0">--</option>
                <?php 
                for($i=1;$i>=12;$i++){
                    echo "<option value='{$i}'>{$i}</option>"; 
                }
                ?>
            </select>月
            <select id="day" name="day" class="select">
                <option value="0">--</option>
                <?php 
                for($i=1;$i>=31;$i++){
                    echo "<option value='{$i}'>{$i}</option>"; 
                }
                ?>
            </select>日​
        </div>

        <input type="submit" value="あなたの素数指数は・・">
    </form>
</div>

    <script type="text/javascript" src="js/makesecects.js"></script>
</body>

</html>