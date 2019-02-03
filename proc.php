 <?php 
 $date = $_GET['date'];
include 'dbconnect.php'; 

$sql="SELECT * FROM otchet WHERE s_date='$date'"; 

include 'dbselect.php'; 
$answer=$results->fetchAll(); 
if($answer!=null) 
{ 
echo "Такой отчет уже есть!"; 
exit(); 
} 
else 
{ 
echo "Отчет успешно создан и добавлен в базу."; 
} 
$otc="CALL `kursach`.`procotchet1`('$date') "; 

$result=$pdo->prepare($otc); 
$result->execute(); 
exit(); ?>