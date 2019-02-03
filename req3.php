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

$sql = "SELECT nazvanie,adres,datazakl
FROM postavshik  left join
zakaz on postavshik.idpostavshik=zakaz.idpostavshik
Where zakaz.idzakaz IS NULL;";

include 'dbselect.php';
$answer = $results -> fetchAll();
?>
<table>
	<thead>
		<tr>
			<td>Название</td>
			<td>Адрес</td>
			<td>Дата.заключения</td>
		</tr>
	</thead>
	<?php foreach ($answer as $line): ?>
		<tr> 
			<?php 
				echo "<td>$line[nazvanie]</td>";
				echo "<td>$line[adres]</td>";
				echo "<td>$line[datazakl]</td>"; ?>
		</tr>
	<?php endforeach; ?>
</table>
</body>
</html>
<?php exit(); ?>