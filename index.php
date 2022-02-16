<html>
<head></head>
<title>Project</title>
<body>
<?php
    $ch = curl_init("http://google.com");
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, '1');

    // 3. выполнение запроса и получение ответа
    $output = curl_exec($ch);
    echo $output;
    // 4. очистка ресурсов
    curl_close($ch);
?>
</body>
</html>
