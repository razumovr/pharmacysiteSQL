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

$sql = "SELECT nazvanie,count(idzakaz) pdf
FROM postavshik
join zakaz on postavshik.idpostavshik=zakaz.idpostavshik
Where datasost > (NOW() - INTERVAL $q  MONTH)
group by nazvanie";

include 'dbselect.php';
$answer = $results -> fetchAll();
?>
<table>
	<thead>
		<tr>
			<td>Название</td>
			<td>Количество заказов</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($answer as $line): ?>
		<tr> 
			<?php echo "<td>$line[nazvanie]</td>";
				echo "<td>$line[pdf]</td>"; ?>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>
<?php exit(); ?>