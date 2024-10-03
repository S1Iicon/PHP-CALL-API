<?php
    const API_URL = "https://whenisthenextmcufilm.com/api";
    $ch = curl_init(API_URL);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);

    $data = json_decode($result, true);

    curl_close($ch);

    // Si solo quieres hacer un get de la API "file_get_contents(API_URL)"
?>

<head>
    <meta charset="UTF-8">
    <title>La próxima pelicula de Marvel</title>

</head>
<body>
    <h1><?=$data["title"]?></h1>
    <p><?=$data["release_date"]?></p>
    <section>
        <img src="<?= $data["poster_url"]?>" alt="<?= $data["title"]?>">
    </section>
</body>