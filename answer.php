<?php 
    $day = (int)$_POST["day"];
    $month = (int)$_POST["month"];
    $year = (int)$_POST["year"];
    $birthnumber = $year*10000+$month*100+$day;
    $birth = $year*10000+$month*100+$day;
    $birthday = $month*100+$day;
    $dayjudge = 0;
    $monthjudge = 0;
    $yearjudge = 0;
    $birthdayjudge = 0;
    $birthjudge = 0;

    for($i=0;$i<36;$i++){
        if($i<8){
            $numbers[$i] = substr($birthnumber,$i,1);
        }elseif($i<15){
            $numbers[$i] = substr($birthnumber,$i-8,2);
        }elseif($i<21){
            $numbers[$i] = substr($birthnumber,$i-15,3);
        }elseif($i<26){
            $numbers[$i] = substr($birthnumber,$i-21,4);
        }elseif($i<30){
            $numbers[$i] = substr($birthnumber,$i-26,5);
        }elseif($i<33){
            $numbers[$i] = substr($birthnumber,$i-30,6);
        }elseif($i<35){
            $numbers[$i] = substr($birthnumber,$i-33,7);
        }else{
            $numbers[$i] = substr($birthnumber,$i-35,8);
        }
    }

    foreach($numbers as $number){
        $count = 0;
        if($number != 1 && $number !=0){
            for($i=2;$i<$number;$i++){
                if($number%$i == 0){
                $count++;
                }
            }
            if($count == 0){
                $primenumbers[] = $number;
            }
        }
    }


    $list = "";
    foreach($primenumbers as $primenumber){
        $list = $list.strval($primenumber).", ";
    }

    // 素数指数
    foreach($primenumbers as $primenumber){
        $sum += $primenumber;
    }

    // 素数指数の計算式
    $calculation = "";
    for($i=0;$i<count($primenumbers)-1;$i++){
        $calculation = $calculation.strval($primenumbers[$i])." + ";
    }
    $calculation = $calculation.strval($primenumbers[count($primenumbers)-1])." = ".strval($sum);


    for($i=2;$i<$day;$i++){
        if($day%$i == 0){
            $dayjudge++;
        }
    }

    for($i=2;$i<$month;$i++){
        if($day%$i == 0){
            $monthjudge++;
        }
    }

    for($i=2;$i<$year;$i++){
        if($day%$i == 0){
            $yearjudge++;
        }
    }

    for($i=2;$i< $birthday;$i++){
        if($birthday%$i == 0){
            $birthdayjudge++;
        }
        
    }


    for($i=2;$i< $birth;$i++){
        if($birth%$i == 0){
            $birthjudge++;
        }
    }

    
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>素数</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container">
    <div class="result1">
        <h3>あなたの素数指数は・・・</h3>
        <h1><?php echo $sum;?> <span>点</span></h1>
        <h3>です。</h3>

        <?php if($sum > 960095) : ?>
        <p>素晴らしい！　アインシュタイン（1879年3月14日生まれ）の素数指数　960095　よりも高い数値です。</p>
        <?php elseif($sum > 452135) : ?>
        <p>すごい！　レオナルド・ダ・ヴィンチ（1452年4月15日生まれ）の素数指数は　452135　よりも高い数値です。</p>
        <?php elseif($sum > 9584) : ?>
        <p>大丈夫！　ビルゲイツ（1955年10月28日生まれ）の素数指数は　9584　です。</p>
        <?php else : ?>
        <p>合成数に選ばれたと考えて前向きに生きていきましょう。</p>
        <?php endif ;?>
        
    </div>
        
    <div class="result2">
        <p><?php echo $year;?>年<?php echo $month;?>月<?php echo $day;?>日生まれのあなたに潜む素数は・・・</p>
        <p>(<?php echo $list;?>)</p>
        <p><?php echo $calculation;?></p>  
    </div>
        


    <div class="result3">
        <?php if($dayjudge == 0) : ?>
            <p>あなたの生まれた日　<span><?php echo $day;?></span> は素数です。</p>
        <?php endif ;?>
        <?php if($monthjudge == 0) : ?>
            <p>あなたの生まれた月　<span><?php echo $month;?></span> は素数です。</p>
        <?php endif ;?>
        <?php if($yearjudge == 0) : ?>
            <p>あなたは生まれた年 <span><?php echo $year;?></span> は素数です。</p>
        <?php endif ;?>
        <?php if($birthdayjudge == 0) : ?>
            <p>あなたの誕生日 <span><?php echo $birthday;?></span>　は素数です。</p>
        <?php endif ;?>
        <?php if($birthjudge == 0) : ?>
            <p>あなたの生年月日　<span><?php echo $birth;?></span>　は素数です。</p>
        <?php endif ;?>
    </div>

    <div class="result4">
        <p>ちなみに・・・</p>
        <p>アインシュタイン（1879年3月14日生まれ）の素数指数は　960095　です。</p>
        <p>ビルゲイツ（1955年10月28日生まれ）の素数指数は　9584　です。</p>
        <p>レオナルド・ダ・ヴィンチ（1452年4月15日生まれ）の素数指数は　452135　です。</p>
    </div>

    <div class="sns">
        <p>snsであなたの素数指数をシェアしよう！</p>
        <a href=""></a>
    </div>
    </div>
</body>

</html>