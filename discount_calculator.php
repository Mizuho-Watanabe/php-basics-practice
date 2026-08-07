<?php

//要件1
$original_price = 5000;
$discount_rate = 0.2;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-1-6 addition</title>
</head>
<body>
    <p>課題1：割引計算プログラム<br>
    元の値段：<?php echo $original_price; ?><br>
    割引後：<?php echo $final_price; ?></p>

    <p>課題2：偶数・奇数判定プログラム<br>
    <?php
      $number = 568;
      if ($number % 2 ==0) {
        echo "{$number}は偶数です";
      } else {
        echo "{$number}は奇数です";
      }
      ?></p>

      <p>課題3：複数条件の判定<br>
      <?php
        $age = 25;
        $is_member = false;
        $is_student = true;
        if ($age >=18 && $is_member) {
            echo "割引が適用されます <br>";
        }
        if ($age >=65 || $is_student) {
            echo "シニア・学生割引が適用されます";
        }
        ?></p>

        <p>課題4：複合代入演算子の練習<br>
        <?php
          $score = 100;
          echo "初期スコア：{$score}点<br>";
          $score += 50;
          echo "ボーナスステージクリア：{$score}点<br>";
          $score -= 30;
          echo "ダメージを受けた：{$score}点<br>";
          $score *= 2;
          echo "アイテム報酬込み：{$score}点<br>";
          echo "最終スコア：{$score}点";
        ?>
</body>
</html>