
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

//create icon objects
Icons = [];

for(var url of locationData.image_icon) {
  Icons.push(createIcon(url));
}

//setup map
//$(document).ready(function () {
var map = L.map('map').setView([40.416775, -3.703790], 14);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 18
}).addTo(map);


L.geolet({
  position: 'topleft'
}).addTo(map);



 L.control.Legend({
  position: "bottomright",
  legends: [{
    label: " Monuments",
    type: "image",
    url: "https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/344/external-location-banking-and-financial-xnimrodx-lineal-color-xnimrodx.png",
  },{
    label: " Park",
    type: "image",
    url: "https://img.icons8.com/doodle/344/spinach.png",
  },{
    label: " Sports",
    type: "image",
    url: "https://img.icons8.com/fluency/344/stadium-.png",
  },{
    label: " Theme park",
    type: "image",
    url: "https://img.icons8.com/external-flaticons-lineal-color-flat-icons/344/external-theme-park-summer-travel-flaticons-lineal-color-flat-icons-2.png",
  },{
    label: " Music",
    type: "image",
    url: "https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/344/external-location-music-icongeek26-linear-colour-icongeek26.png",
  },{
    label: " Wifi",
    type: "image",
    url: "https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/344/external-location-internet-of-things-flatart-icons-lineal-color-flatarticons.png",
  },{
    label: " Coffee",
    type: "image",
    url: "https://img.icons8.com/external-flatarticons-blue-flatarticons/344/external-location-coffee-shop-flatart-icons-lineal-color-flatarticons-1.png",
  },{
    label: " Food",
    type: "image",
    url: "https://img.icons8.com/external-nawicon-outline-color-nawicon/344/external-location-food-delivery-nawicon-outline-color-nawicon.png",
  },{
    label: " Pharmacy",
    type: "image",
    url: "https://img.icons8.com/color-glass/452/find-clinic.png",
  },{
    label: " Bank",
    type: "image",
    url: "https://img.icons8.com/external-anggara-filled-outline-anggara-putra/344/external-location-ecommerce-anggara-filled-outline-anggara-putra.png",
  },{
    label: " Cinema",
    type: "image",
    url: "https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/344/external-location-news-flatart-icons-lineal-color-flatarticons.png",
  },{
    label: " Business",
    type: "image",
    url: "https://img.icons8.com/external-linector-lineal-color-linector/2x/external-location-hotel-service-linector-lineal-color-linector.png",
  },{
    label: " Church",
    type: "image",
    url: "https://img.icons8.com/external-flatarticons-blue-flatarticons/344/external-location-easter-flatarticons-blue-flatarticons.png",
  },{
    label: " SuperMarket",
    type: "image",
    url: "https://img.icons8.com/external-flat-zulfa-mahendra/344/external-location-ecommerce-flat-zulfa-mahendra.png",
  }]

}).addTo(map);


L.control.scale().addTo(map);

async function drawMarker(data){
  L.marker(data.Coordenadas, {
    title: data.Nombre, //
    draggable: false,
    opacity: 0.95,
    icon: data.Icono
  }).bindPopup((layer) => formatPopup(data))
    .addTo(map);

}

//Function to format a popup (including the click elements)
function formatPopup(data){
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "popup.html?shit="+ Math.random().toString(), false) //WARNING: "?shit="+ Math.random().toString()" is using to testing popups only!
  xhr.send();
  let sel = $('<div>', { id: "M"+ data.ID, html: xhr.responseText});
  sel.find("div.popup").on('click', () => visibilityChange(sel.find(".popup-big")));
  sel.find('#name').text(data.Nombre);
  sel.find('#description').text(data.Description);
  return sel[0];
}

function visibilityChange(sel){
  if (sel.css("display") == "none")
    sel.css("display","inline");
  else if (sel.css("display") == "inline")
    sel.css("display","none");
}

//draw map markers

for(var i = 0; i < locationData.Locations.length; i++){
  const location = locationData.Locations[i];

  drawMarker({
    Coordenadas: [location.latitude, location.longitude],
    ID: location.id_place,
    Nombre: location.name_place, //hay que cambiar esta linea luego --------------------------------------------------------------------
    Description: location.description_place,
    Icono: Icons[location.id_icon - 1] //por array indexing
  });
}



const rutas = [];
let buslat = null;
let buslon = null;	

  function mostrar(e){
    if(e.id == 'buscar'){
      var busqueda = document.getElementById('nom0').value;
      for(var i = 0; i < locationData.Locations.length; i++){
        const location = locationData.Locations[i];

        if(busqueda.toUpperCase() == location.name_place.toUpperCase()){
          buslat = (location.latitude);
          buslon = (location.longitude);
        }
      }

      map.flyTo([buslat, buslon], 18);


    }
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
      var origen = document.getElementById('nom1').value;
      var destino = document.getElementById('nom2').value;


      for(var i = 0; i < locationData.Locations.length; i++){
        const location = locationData.Locations[i];
        if(origen.toUpperCase() == location.name_place.toUpperCase()){
          rutas.push(location);
        }else if(destino.toUpperCase() == location.name_place.toUpperCase()){
          rutas.push(location);
        }else{
         // console.log("No existe ningún destino con ese nombre");
        }
      }

      var control = L.Routing.control({
        waypoints: [
           L.latLng([rutas[1].latitude, rutas[1].longitude]),
           L.latLng([rutas[0].latitude, rutas[0].longitude])],
           createMarker: function()  {return null},
           router: new L.Routing.osrmv1({
            language: 'en',
           }),
           collapsible: true,

        }).addTo(map);

        rutas.pop();
        rutas.pop();

    }
  }


//});
