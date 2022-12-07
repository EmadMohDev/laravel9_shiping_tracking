<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Tracking on Map</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
</head>
<body>



<div id="map" style="width: 1000px; height: 400px;"></div>



<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>


    <script>

        // basic example for leaflet :
        // https://leafletjs.com/examples/quick-start/



         // initalize the map to the center on   [30.05072510744215, 31.30558905318965]   and make zomm:  11
        var map = L.map('map').setView([30.05072510744215, 31.30558905318965], 11);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);


        // Draw the marker
        marker = new L.marker([30.05072510744215, 31.30558905318965])
                .addTo(map)
                .bindPopup("center")
                .openPopup() ;



         // Dealing with events
         var popup = L.popup();

            function onMapClick(e) {
            popup
            .setLatLng(e.latlng)
            .setContent(`You clicked the map at ${e.latlng.toString()}`)
            .openOn(map);
            }

            map.on('click', onMapClick);


    </script>



</body>
</html>
