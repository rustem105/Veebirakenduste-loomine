<?php
    ob_start();
    $titel="Список стран - управление";
?>
    <?php
    if(isset($_SESSION['message'])) {
        echo '<div style="text-align: left; margin-bottom: 5px; background-color: #e6e6de;"><p>';
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        echo '</p></div>';
    }
    ?>


    <div style="text-align: right; margin-bottom: 5px;">
        <a href="addcountry" class=" btn-primary btn-sm btn-flat"> New country</a>
</div>
<table class="table table-striped">
    <tr>
        <th style="width:10%">Code</th>
        <th style="width:10%">Country name</th>
        <th style="width:10%">IndepYear</th>
        <th style="width:10%">Population</th>
        <th style="width:15%">Continent</th>
        <th style="width:25%">GovernmentForm</th>
        <th style="width:15%">Действия</th>
    </tr>
    <tbody>
        <?php
            foreach ($stateList as $state) {
            echo '<tr>
                <td>'.$state['Code'].'</td>
                <td>'.$state['Name'].'</td>
                <td>'.$state['IndepYear'].'</td>
                <td>'.$state['Population'].'</td>
                <td>'.$state['Continent'].'</td>
                <td>'.$state['GovernmentForm'].'</td>
                <td>
                    <a href="editCountry?'.$state['Code'].'"class=" btn-success btn-sm edit btn-flat">Edit</a> 
                    <a href="deleteCountry?'.$state['Code'].'"class=" btn-danger btn-sm delete btn-flat">Delete</a>
                </td>
                </tr>';
            }
            echo '<tr>
                <td colspan=6 class="textposition">Total countries</td>';
            echo '<td>'. count($stateList).'</td>';
            echo '</tr>';
        ?>
        </tbody>
    </table>

<?php
$content = ob_get_clean();
include "view/templates/layout.php";
?>