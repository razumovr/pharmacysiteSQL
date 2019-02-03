<!DOCTYPE html>
<html>
<head>
	<title>Результат</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Stylesheets/req1style.css">
</head>
<body>
<?php
$q = $_GET['qual'];
include 'dbconnect.php';

$sql = "SELECT nazvanie,strana,firma,zena,kolichetvo
from nomenklatura
join lekarstva on(lekarstva.idnomenklatura=nomenklatura.idnomenklatura)
group by zena,firma;";

include 'dbselect.php';
$answer = $results -> fetchAll();
?>
<table>
	<thead>
		<tr>
			<td>Название</td>
			<td>Страна</td>
			<td>Фирма</td>
			<td>Цена</td>
			<td>Количество</td>
		</tr>
	</thead>
	<?php foreach ($answer as $line): ?>
		<tr> 
			<?php echo "<td>$line[nazvanie]</td>";
				echo "<td>$line[strana]</td>";
				echo "<td>$line[firma]</td>";
				echo "<td>$line[zena]</td>";
				echo "<td>$line[kolichetvo]</td>"; ?>
		</tr>
	<?php endforeach; ?>
</table>
</body>
</html>
<?php exit(); ?>