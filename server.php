<?php

    $stringRawData = file_get_contents ('./database/dischi.json');

    //var_dump($stringRawData);

    header('Content-Type: application/json');
    echo json_encode($stringRawData);



?>
