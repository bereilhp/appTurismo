var locationData;
$.ajax({
  url: '../../Controller/ControllerMap.php',
  type: 'GET',
  dataType: 'json',
  async: false,
  success:function(result){
    locationData = result;
  }
});

function createIcon(url){
  return L.icon({
    iconUrl: url,
    iconSize: [40, 40],
    iconAnchor: [15, 40],
    shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
    shadowSize: [35, 50],
    shadowAnchor: [0, 55],
    popupAnchor: [0, -40]
  })
}



//setup map

var map = L.map('map').setView([40.39801, -3.83492], 15);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 18
}).addTo(map);

//L.control.scale().addTo(map);



var browserLat;
var browserLong;  
mapa();

function mapa (){
navigator.geolocation.getCurrentPosition(function(position) {
    browserLat =  position.coords.latitude;
    browserLong = position.coords.longitude;

    marker_actual = L.marker([browserLat,browserLong]).addTo(map);
    map.setView([browserLat,browserLong], 18);  
    
}, function(err) {
    console.error(err);
});

}

L.control.scale().addTo(map);

function drawMarker(data){
  L.marker(data.Coordenadas, {
    title: data.Nombre, //
    draggable: false,
    opacity: 0.95,
    icon: data.Icono
  }).bindPopup("<i>" + data.Nombre + "</i>")
    .addTo(map);
}


//create icon objects
Icons = [];

for(var url of locationData.image_icon) {
  Icons.push(createIcon(url)); 
}
 
 
//draw map markers


for(var i = 0; i < locationData.Locations.length; i++){
  const location = locationData.Locations[i];
  
  drawMarker({
    Coordenadas: [location.latitude, location.longitude],
    Nombre: location.description_place, //hay que cambiar esta linea luego --------------------------------------------------------------------
    Icono: Icons[location.id_icon - 1] //por array indexing
  });
}

function onClick(e) {
  alert(this.getLatLng());
}

const rutas = [];

  function mostrar(e){

    mapa();
   
    
    console.log("HE DADO AL BOTONNNNNNN");
    console.log(e.id);
    if(e.id == 'formRuta'){
      $("#ocultarMostrar").each(function() {
        displaying = $(this).css("display");
        if(displaying == "block") {
          $(this).fadeOut('slow',function() {
          $(this).css("display","none");
          });
        } else {
          $(this).fadeIn('slow',function() {
            $(this).css("display","block");
          });
        }
      });

    }if(e.id == 'hacerRuta'){
      
      console.log("array de las rutas:");
      console.log(rutas[0], rutas[1]);

      var origen = document.getElementById('nom1').value;
      var destino = document.getElementById('nom2').value;
      
      
      console.log("---------");
      console.log(origen, destino);
      console.log("------yuyuytu---");

      for(var i = 0; i < locationData.Locations.length; i++){
        const location = locationData.Locations[i];
        if(origen.toUpperCase() == location.description_place.toUpperCase()){
          
          rutas.push([location.latitude, location.longitude]);
        }else if(destino.toUpperCase() == location.description_place.toUpperCase()){
          rutas.push([location.latitude, location.longitude]);
        }else{
         // console.log("No existe ningún destino con ese nombre");    
        }
      }

      console.log(rutas[0], rutas[1]);
      L.Routing.control({ 
        waypoints: [ 
           L.latLng(rutas[0]), 
           L.latLng(rutas[1])] 
        }).addTo(map);

        rutas.pop();
        rutas.pop(); 
        console.log("array de las rutas3:");
      console.log(rutas[0], rutas[1]);
    
      /*for(var key in locationData){
        
        if(origen.toUpperCase() == locationData[key].Nombre.toUpperCase()){
          rutas.push(locationData[key]);
        }else if(destino.toUpperCase() == locationData[key].Nombre.toUpperCase()){
          rutas.push(locationData[key]);
        }else{
         // console.log("No existe ningún destino con ese nombre");    
        }
      }
      console.log("array de las rutas2:");
      console.log(rutas[0], rutas[1]);
      
      L.Routing.control({ 
        waypoints: [ 
           L.latLng(rutas[0].Coordenadas), 
           L.latLng(rutas[1].Coordenadas)] 
        }).addTo(map);

        rutas.pop();
        rutas.pop(); 
        console.log("array de las rutas3:");
      console.log(rutas[0], rutas[1]);*/
    }
  }

