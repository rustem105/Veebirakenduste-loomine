<h2>PHP example</h2>
<hr>
<?php
    echo 'Project Example';
    echo '<h3>Hello, world!</h3>';

?>
<?php
//--------------------------


    echo "<h2>Переменные - пример</h2>";
    $num1=10;
    $num2=15;
    $sum=$num1+$num2;
    echo $num1.'+'.$num2.'='.$sum;
//---------------------------
    /*
возраст 12 лет
<12 - ребенок

>12 подросток 

*/

echo '<h2>Пример условия Если - ИНАЧЕ</h2>';

$name="Ivan";
$age=-7;
if($age>12)
    $comment="подросток";
elseif($age>=0 && $age<=12)
    $comment="ребенок";
else
    $comment="ошибка ввода";

echo 'Имя: '.$name.' возраст: '.$age.'лет - '.$comment;
?>