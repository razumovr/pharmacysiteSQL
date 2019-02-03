<?php
	try {
		$results = $pdo -> query($sql);
	} catch (PdoExeption $e) {
		echo "Ошибка при извлечении данных" . $e -> GetMessage();
		exit();
	}
	?>