<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Tågtider API - avgångar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Tågtider API - Exempel</h1>
    <?php

    // Inställningar för tjänsten
    $url        = 'http://api.tagtider.net/v1/stations/243/transfers/departures.xml';
    $key        = 'tagtider';
    $secret     = 'codemocracy';
    $options    = array(
        CURLOPT_FRESH_CONNECT   => 1,
        CURLOPT_URL             => $url,
        CURLOPT_USERAGENT       => 'Tågtider Exempel',
        CURLOPT_HTTPAUTH        => CURLAUTH_DIGEST,
        CURLOPT_USERPWD         => $key . ":" . $secret,
        CURLOPT_RETURNTRANSFER  => 3,
    );

    // Hämta data
    $session = curl_init();
    curl_setopt_array($session, $options);
    $response = curl_exec($session);
    curl_close($session);

    // Kolla om data är i xml-format
    if ($response) {
        $xml = simplexml_load_string($response) or die("Error: Cannot create object");
        //print_r($xml);
        $transfer = $xml->station->transfers->transfer;

        // Skriv i data i tabellform
        echo "<table class=\"table table-dark table-striped table-hover\">";
        echo "<tr>
        <th>Avgångstid</th>
        <th>Destination</th>
        <th>Tågbolag</th>
        <th>Spår</th>
        </tr>";
        foreach ($transfer as $value) {
            //print_r( $xml->station->transfers->transfer[0] );
            echo "<tr>";
            echo "<td>{$value->departure}</td>";
            echo "<td>{$value->destination}</td>";
            echo "<td>{$value->type}</td>";
            echo "<td>{$value->track}</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
</body>
