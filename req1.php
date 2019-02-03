<!DOCTYPE html>
<html>
<head>
	<title>Результат</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Stylesheets/req1style.css">
</head>
<body>
<?php
$date = $_GET['month']; 
$param = preg_split("/-[0]?/", $date);
include 'dbconnect.php';

$sql = "SELECT nazvanie,adres,datazakl,max(obshzena)
FROM postavshik
join zakaz on (postavshik.idpostavshik=zakaz.idpostavshik)
Where
 YEAR(datasost)=$param[0] and MONTH(datasost)=$param[1];";

include 'dbselect.php';
$answer = $results -> fetchAll();
?>
<table>
	<thead>
		<tr>
			<td>Название</td>
			<td>Адрес</td>
			<td>Датазаключ</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($answer as $line): ?>
		<tr> 
			<?php 
				echo "<td>$line[nazvanie]</td>";
				echo "<td>$line[adres]</td>";
				echo "<td>$line[datazakl]</td>";;
				?>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>
<?php exit(); ?>