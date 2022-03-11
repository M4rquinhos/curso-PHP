<?php

    $url = "https://api.dailymotion.com/videos?channel=music&limit=10";
    $opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));

    $respuesta = file_get_contents($url, false, stream_context_create($opciones));

    $objRespuesta = json_decode($respuesta);
    // print_r($objRespuesta);

    // foreach($objRespuesta->list as $video) {
    //     print_r($video->title);
    //     print_r($video->channel);
    // }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consumiendo API</title>
    </head>
    <body>
        <table>
           <thead>
                <tr>
                    <th>Título</th>
                    <th>Canal</th>
                </tr>
           </thead>
            <tbody>
                <?php
                    foreach($objRespuesta->list as $video) {
                        echo "<tr>";
                        echo "<td>".$video->title."</td>";
                        echo "<td>".$video->channel."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
    </html>