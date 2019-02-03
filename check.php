<!DOCTYPE html>
<html>
<head>
	<title>Результат</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Stylesheets/req1style.css">
</head>
<body>
<?php
include 'dbconnect.php';

$sql = "SELECT * FROM `kursach`.`otchet`;";

include 'dbselect.php';
$answer = $results -> fetchAll();
?>
<table>
	<thead>
		<tr>
			<td>Идентификатор</td>
			<td>Название</td>
			<td>Фирма</td>
			<td>Подсчет</td>
			<td>Дата</td>
		</tr>
	</thead>
	<?php foreach ($answer as $line): ?>
		<tr> 
			<?php echo "<td>$line[idotchet]</td>";
				echo "<td>$line[NAZV]</td>";
				echo "<td>$line[FIRM]</td>";
				echo "<td>$line[COUN]</td>";
                echo "<td>$line[s_date]</td>"	?>
		</tr>
	<?php endforeach; ?>
</table>
</body>
</html>
<?php exit(); ?>