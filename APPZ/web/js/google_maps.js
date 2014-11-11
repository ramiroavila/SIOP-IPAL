
      var markers = [];

      function updateMarkers(map, jQueryCollection) {
        //Borro los Marcadores que existen:
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        $.each(jQueryCollection, function() {
          //Creo un nuevo marcador por Encuesta:
          var marker = new google.maps.Marker({
              position: new google.maps.LatLng(this.latitud,this.longitud),
              title: "MARKER #" + this.id,
              icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png',
             });
             marker.setMap(map);

             //Usted está aquí:
             var infowindow = new google.maps.InfoWindow({
               content: 'IPAL #' + this.id + ', INDICE: ' + this.indiceIPAL
             });

             google.maps.event.addListener(marker, 'click', function() {
               infowindow.open(map,marker);
             });

             markers.push(marker);
        });
      }

      function initialize(canvas, draggable, title, zoom, localizationFormInput) {

        var map;
        var initialLocation;
        var cam_tarapaca = new google.maps.LatLng(-33.43778, -70.65028);
        var browserSupportFlag =  new Boolean();
  
      var mapProp = {
          center: cam_tarapaca,
          zoom: zoom,
          draggable: true,
          scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        map =  new google.maps.Map(document.getElementById(canvas), mapProp);

        // Try W3C Geolocation (Preferred)
        if(navigator.geolocation) {
          browserSupportFlag = true;
          navigator.geolocation.getCurrentPosition(function(position) {
            initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
            map.setCenter(initialLocation);

            var marker = new google.maps.Marker({
              position: initialLocation,
              draggable: draggable,
              title: "MARKER"
             });

             if ($('#' + localizationFormInput).length > 0) {
               $('#' + localizationFormInput).val(initialLocation);
             }
             marker.setMap(map);

             //Usted està aquí:
             var infowindow = new google.maps.InfoWindow({
               content: title
             });

             google.maps.event.addListener(marker, 'click', function() {
               infowindow.open(map,marker);
             });

            }, function() {
              handleNoGeolocation(browserSupportFlag);
            });

        } else {
          browserSupportFlag = false;
          handleNoGeolocation(browserSupportFlag);
        }


        function handleNoGeolocation(errorFlag) {
          if (errorFlag == true) {
            initialLocation = cam_tarapaca;
          } 
        }

        map.setCenter(initialLocation); 
   
        return map;

      } //END Initialize