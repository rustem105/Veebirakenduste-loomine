
<?php
echo "<h2>1. Массив - пример</h2>";
$numbers = array(9, 8, 7, 6, 5, 4, 3);

//массив, как одно значение - один элемент массива
foreach ($numbers as $num) {
    echo $num.' ';
}

?>
<hr>
<?php
//----------------------2.-----------
    echo "<h2>2. Массив городов</h2>";
    $countries=array("Estonia","Russia","Norway","China");
    //----------обработка
    $text="";
    foreach ($countries as $country)
    {
            $text.='<li>'.$country.'</li>';
    }
    echo "<h3>Список городов</h3>";
    echo '<ul>';
        echo $text;
    echo '</ul>';
    echo '<hr>';

//----------------------3.-----------
$newCountries=array (
    array(0, 'Эстония', 'Таллинн'),
    array(1, 'Россия', 'Москва'),
    array(2, 'Германия', 'Берлин')
);
echo "<h2>3. Государства - столица</h2>";
$k=0;
foreach($newCountries as $country)
    {
        $k++;
        echo $k.'. <b>'.$country[1].'</b>';
        echo ' - '.$country[2].'<br>';
    }
    echo '<p>Всего в списке:'.count($newCountries).'</p>';

//----------------------4.-----------
$myCountries=array(
    array(
        'id'=>0,
        'name'=> 'Эстония',
        'capital'=> 'Таллинн',
        'cities'=>array('Narva','Jõhvi')
    ),
    array(
        'id'=>1,
        'name'=> 'Россия',
        'capital'=> 'Москва',
        'cities'=>array('Tomsk','Kaluga')
    ),
    array(
        'id'=>2,
        'name'=> 'Германия',
        'capital'=> 'Берлин',
        'cities'=>array('Rostok','Munich')
    ),
);

echo "<h2>4. Государства, города</h2>";
foreach($myCountries as $country){
    echo $country['name'].' - '.$country['capital'];
    echo '<ul>';
    foreach($country['cities'] as $city){
        echo "<li>".$city."</li>";
    }
    echo '</ul>';
}

?>