<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet">
<?php
include_once 'recipes.php';
$text='';
foreach ($recipes as $country=>$info){
    $text.='<div style="text-align:center;">';
    $text.='<h3>'.$country.'</h3>';
    $text.='<img src="image/'.$info['photo'].'">';
    $text.='<p><b>Страна: </b>'.$info['country'].'</p>';
    $text.='<h3>Список ингредиентов</b></h3>';
    //students
    foreach ($info['ingredients'] as $ingredient){
        $text.='<div class="content">';
        $text.='<p>'.$ingredient['name'];
        $text.='-'.$ingredient['description'].'</p>';
        $text.='</div>';
    }
    
    $text.='<div class="clear"></div>'; 
    $text.='</div><hr>';
}
echo $text;
?>

<p style="margin-top:20px;"><b>Design 2022 &copy; Рустем Куршутов и Владислав Мызов</b></p>