<?php
	ob_start();
	$title="Список городов";

	if(isset($state) && $state){
		$title.=' - '.$state['Name'];
		$title.=' ('.count($cityList).')';

		echo '<div class="textposition"><a href="states">К списку стран</a></div>';
	}
?>

	<table class="table table-striped">
		<tr>
			<th style="width: 25%">ID</th>
			<th style="width: 25%">City name</th>
			<th style="width: 25%">CountryCode</th>
			<th style="width: 25%">Population</th>
		</tr>
		<tbody>
			<?php
			foreach ($cityList as $city) {
				echo '<tr>
					<td>'.$city['ID'].'</td>
					<td>'.$city['Name'].'</td>
					<td>'.$city['CountryCode'].'</td>
					<td>'.$city['Population'].'</td>
				</tr>';
			}
			echo '<tr>
				<td colspan=3 class="textposition">Total cities</td>';
			echo '<td>'. count($cityList).'</td>';
			echo '</tr>';
			?>
		</tbody>
	</table>

<?php
	if(isset($state)){
		echo '<div class="textposition"><a href="states">К списку стран</a></div>';
	}

	$content = ob_get_clean();
	include "view/templates/layout.php";
?>