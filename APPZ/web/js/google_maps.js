
      var markers = [];

      function updateMarkers(map, jQueryCollection) {
        //Borro los Marcadores que existen:
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        $.each(jQueryCollection, function(index, item) {
          //Creo un nuevo marcador por Encuesta:
          if ( item.longitud.length > 3 ) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(item.latitud,item.longitud),
                title: "MARKER #" + item.id,
                icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
               });
               marker.setMap(map);

               var infowindow = new google.maps.InfoWindow({
                 content: '<h3>IPAL #' + item.id + '</h3><h5>INDICE: ' + item.indiceIPAL + '</h5><p><a target="ipal" href="/encuestas/' + item.id + '.html">Ver IPAL</a></p>'
               });

               google.maps.event.addListener(marker, 'click', function() {
                 infowindow.open(map,marker);
               });

               markers.push(marker);
            }
        });
      }

      function initializeMap() {

        var cam_suecia = new google.maps.LatLng(-33.417754800, -70.604835400);
        var browserSupportFlag =  new Boolean();

        var mapProp = {
          draggable: true,
          scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          zoom: 12
        };

        map =  new google.maps.Map(document.getElementById("map-canvas"), mapProp);

        $('#map-canvas').hide();
        $("#map-tab").on('shown.bs.tab', function() {
          $('#map-canvas').show();
          google.maps.event.trigger(map, "resize");
          map.setCenter(cam_suecia);
        });


        return map;

      } //END Initialize
