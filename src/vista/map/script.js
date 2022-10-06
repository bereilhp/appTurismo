
/*var lt = lg = 0;

if(navigator.geolocation){

  var success = function(position){

      var latitud = position.coords.latitude,
          longitud = position.coords.longitude;
          console.log(longitud);
          console.log(latitud);  
          lt = latitud;
          lg = longitud;
  }
  navigator.geolocation.getCurrentPosition(success, function(msg){

      console.error( msg );

  });

}*/

import "leaflet.locatecontrol";

  var map = L.map('map').
     setView([41.66, -4.72],
     15);

     L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
      maxZoom: 18
      }).addTo(map);

      L.control.scale().addTo(map);

     // L.marker([41.66, -4.71],{draggable: true}).addTo(map);

      var lc = L.control.locate({
        position: 'topleft',
        strings: {
          title: "Show me where I am!"
        }
      }).addTo(map);




      navigator.geolocation.getCurrentPosition(
        (pos) => {
          const { coords } = pos
          const { latitude, longitude } = coords
          console.log(latitude, longitude);
          L.marker([latitude, longitude], { icon: iconMarker }).addTo(myMap)
      
          setTimeout(() => {
            myMap.panTo(new L.LatLng(latitude, longitude))
          }, 5000)
        },
        (error) => {
          console.log(error)
        },
        {
          enableHighAccuracy: true,
          timeout: 5000,
          maximumAge: 0
        })