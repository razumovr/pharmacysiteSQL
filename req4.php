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

$sql = "SELECT nazvanie
FROM postavshik f left join (SELECT * FROM zakaz WHERE year(datasost)=$param[0] and month(datasost)=$param[1])s
 on f.idpostavshik=s.idpostavshik
Where datasost IS NULL;";

include 'dbselect.php';
$answer = $results -> fetchAll();
?>
<table>
	<thead>
		<tr>
			<td>Название</td>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($answer as $line): ?>
		<tr> 
			<?php echo "<td>$line[nazvanie]</td>"; ?>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>
<?php exit(); ?>