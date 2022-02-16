// 1. инициализация
$ch = curl_init();

// 2. устанавливаем опции, включая урл
curl_setopt($ch, CURLOPT_URL, "http://www.google.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

// 3. выполнение запроса и получение ответа
$output = curl_exec($ch);

// 4. очистка ресурсов
curl_close($ch);