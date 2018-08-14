<?php
/**
 * Hämta data trafiklab
 *
 * @category   json data övning
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 * @link
 */
?>
    <?php
$SVAR = 100;
$RADIUS = 1000;

$lat = $_POST['lat'];
$lng = $_POST['lng'];

if ($lat && $lng) {

    // Adress till tjänsten
    $url = "http://api.sl.se/api2/nearbystops.json?key=5a04359da47042b7837f88a5c61908c9&originCoordLat=$lat&originCoordLong=$lng&maxresults=$SVAR&radius=$RADIUS";

    // Hämtar data och avkodar json
    $contents = file_get_contents($url);
    $stopData = json_decode($contents);
    $stops = $stopData->LocationList->StopLocation;

    $markers = "[";

    // Plocka ut alla hållplatser
    foreach ($stops as $stop) {
        $markers .= "['$stop->name', $stop->lat, $stop->lon],\n";
    }

    // Ta bort sista kommat
    $markers = substr($markers, 0, -2) . "]";

    // Skapa Google Maps kartan som Javascript
    echo "function initMap() {
        var bounds = new google.maps.LatLngBounds();
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14
        });\n";

    echo "var markers = $markers;\n";

    echo "for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });
        }\n
        map.fitBounds(bounds);\n
    }\n
    initMap();";
}