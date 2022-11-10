var locationData;
$.ajax({
  url: '../../Controller/ControllerMap.php',
  type: 'GET',
  dataType: 'json',
  async: false,
  success:function(result){
    locationData = result;
    console.log(result);
  }
});


//setup map

var map = L.map('map').setView([40.39801, -3.83492], 15);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 18
}).addTo(map);

L.control.scale().addTo(map);


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

