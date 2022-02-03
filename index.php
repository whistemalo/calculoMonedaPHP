<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Divisa</title>
</head>
<body>
    <?php

        $headers = [
            "User-Agent: Example REST API Client"  
        ];

        $ch = curl_init("https://api.github.com/user/repos");
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_exec($ch);

        curl_close($ch);
    ?>
</body>
</html>