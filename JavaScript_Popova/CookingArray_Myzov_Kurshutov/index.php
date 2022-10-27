<style>
.content{
    float:left;
    width: 200px;
}
.clear{
    clear: both;
}

</style>
<?php
include_once 'recipes.php';
$text='';
foreach ($recipes as $country=>$info){
    $text.='<h3>'.$country.'</h3>';
    $text.='<img src="image/'.$info['photo'].'">';
    $text.='<p><b>Страна: </b>'.$info['country'].'</p>';
    $text.='<h3>Список ингредиентов</b></h3>';
    //students
    foreach ($info['ingredients'] as $ingredient){
        $text.='<div class="content">';
        $text.='<p>'.$ingredient['name'].'</p>';
        $text.='<p>'.$ingredient['description'].'</p>';
        $text.='</div>';
    }
    $text.='<div class="clear"><hr>';
}
echo $text;
?>

<p style="margin-top:20px;"><b>Design 2022 &copy; Рустем Куршутов и Владислав Мызов</b></p>