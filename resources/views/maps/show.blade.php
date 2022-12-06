<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    function addToMap(locations, center){


/*
        var map = L.map('map'),{
                           center : center,
                           zoom : 12
                        });


               L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
*/



                var map = L.map('map').setView(center, 13);

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

              /*
                L.marker([51.5, -0.09]).addTo(map)
                    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                    .openPopup()
*/



     var customTitle ="";

        for (var i= 0; i < locations.length; i++ ) {
            customTitle = i.toString();
                if (i == (locations. length - 1) ) {
                     $customTitle = "last point" ;
                }

                marker = new L.marker([locations[i][0], locations[i][1]])
                .addTo(map)
                .bindPopup("test")
                .openPopup() ;

        }


    }





/*

        const popup = L.popup()
            .setLatLng([51.513, -0.09])
            .setContent('I am a standalone popup.')
            .openOn(map);

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent(`You clicked the map at ${e.latlng.toString()}`)
                .openOn(map);
        }

        map.on('click', onMapClick);
        */



        $.ajax({
            type:'GET',
            url:'/tracking',
            dataType : 'json' ,
           // data:'_token = <?php echo csrf_token() ?>',
            success:function(data) {
                addToMap(data, data.slice(-1)[0])
            } ,
            error : function(request, error){
           console.log(error) ;
           console.log(JSON.stringify(request)) ;
            }


         });


    </script>



</body>
</html>
