<?php

    $stringRawData = file_get_contents ('./database/dischi.json');

    $disk = json_decode($stringRawData);
    //var_dump($stringRawData);

    header('Content-Type: application/json');
    echo json_encode($disk);



?>
