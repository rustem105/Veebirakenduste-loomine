<?php
	ob_start();
	$title="Список городов";

echo '<tr>
	<td colspan=6 class="textposition">Total cities: </td>';
	echo '<td>'.count($citiesList).'</td>';
	echo '</tr>';
?>
	<table class="table table-striped">
		<tr>
			<th style="width: 15%">ID</th>
			<th style="width: 30%">Name</th>
			<th style="width: 15%">CountryCode</th>
			<th style="width: 40%">Population</th>
		</tr>
		<tbody>
		<?php
			foreach($citiesList as $city) {
			echo '<tr>
				<td>'.$city['ID'].'</td>
				<td>'.$city['Name'].'</td>
				<td>'.$city['CountryCode'].'</td>
				<td>'.$city['Population'].'</td>';
			}
			echo '<tr>
				<td colspan=6 class="textposition">Total cities</td>';
			echo '<td>'.count($citiesList).'</td>';
			echo '</tr>';
		?>
		</tbody>
		
	</table>

<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";
?>