<?php
	try {
		$pdo = new PDO("mysql:host=localhost; dbname=kursach", 'root', 'root');
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
	} catch (PDOException $e) {
		echo "Ошибка подключения к БД: " . $e -> GetMessage();
		exit();
	}
	?>