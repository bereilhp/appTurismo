$.ajax({
  url: '../../Controller/ControllerMap.php',
  type: 'GET',
  dataType: 'json',
  success:function(result){
      alert(result);
  }
});

var Icono = L.icon({
  iconUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono.png",
  iconSize: [30, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoVerde = L.icon({
  iconUrl: "https://img.icons8.com/doodle/344/spinach.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoMonumento = L.icon({
  iconUrl: "https://img.icons8.com/external-xnimrodx-lineal-color-xnimrodx/344/external-location-banking-and-financial-xnimrodx-lineal-color-xnimrodx.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoWifi = L.icon({
  iconUrl: "https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/344/external-location-internet-of-things-flatart-icons-lineal-color-flatarticons.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoMusica = L.icon({
  iconUrl: "https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/344/external-location-music-icongeek26-linear-colour-icongeek26.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoCine = L.icon({
  iconUrl: "https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/344/external-location-news-flatart-icons-lineal-color-flatarticons.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoIglesia = L.icon({
  iconUrl: "https://img.icons8.com/external-flatarticons-blue-flatarticons/344/external-location-easter-flatarticons-blue-flatarticons.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoComida = L.icon({
  iconUrl: "https://img.icons8.com/external-nawicon-outline-color-nawicon/344/external-location-food-delivery-nawicon-outline-color-nawicon.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoBar = L.icon({
  iconUrl: "https://img.icons8.com/external-flatarticons-blue-flatarticons/344/external-location-coffee-shop-flatart-icons-lineal-color-flatarticons-1.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoBancos = L.icon({
  iconUrl: "https://img.icons8.com/external-anggara-filled-outline-anggara-putra/344/external-location-ecommerce-anggara-filled-outline-anggara-putra.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoFarmacias = L.icon({
  iconUrl: "https://img.icons8.com/color-glass/452/find-clinic.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoSuper = L.icon({
  iconUrl: "https://img.icons8.com/external-flat-zulfa-mahendra/344/external-location-ecommerce-flat-zulfa-mahendra.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoEmpresa = L.icon({
  iconUrl: "https://img.icons8.com/external-linector-lineal-color-linector/2x/external-location-hotel-service-linector-lineal-color-linector.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoDeportes = L.icon({
  iconUrl: "https://img.icons8.com/fluency/344/stadium-.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});

var IconoParqueAtracciones = L.icon({
  iconUrl: "https://img.icons8.com/external-flaticons-lineal-color-flat-icons/344/external-theme-park-summer-travel-flaticons-lineal-color-flat-icons-2.png",
  iconSize: [40, 40],
  iconAnchor: [15, 40],
  shadowUrl: "https://vivaelsoftwarelibre.com/wp-content/uploads/2020/05/icono_sombra.png",
  shadowSize: [35, 50],
  shadowAnchor: [0, 55],
  popupAnchor: [0, -40]
});
//let madrid = [40.4165, -3.70256];
let locationData = [{Coordenadas: [40.41395, -3.69215], Nombre : "Museo del Prado", Icono : IconoMonumento},
{Coordenadas : [40.41618, -3.69490], Nombre : "Museo Thyssen", Icono: IconoMonumento},
{Coordenadas : [40.41122, -3.69358], Nombre : "Caixa Forum", Icono: IconoMonumento},
{Coordenadas : [40.40805, -3.69460], Nombre : "Museo Reina Sofia", Icono: IconoMonumento},
{Coordenadas : [40.41847, -3.71055], Nombre : "Teatro Real", Icono: IconoCine},
{Coordenadas : [40.42048, -3.71405], Nombre : "Jardines Sabatini", Icono: IconoVerde},
{Coordenadas : [40.41803, -3.71438], Nombre : "Palacio Real", Icono: IconoMonumento},
{Coordenadas : [40.41596, -3.71455], Nombre : "Catedral Almudena", Icono: IconoIglesia},
{Coordenadas: [40.41317, -3.68307], Nombre: "Parque del Retiro", Icono: IconoVerde},
{Coordenadas: [40.42028, -3.68880], Nombre: "Puerta de Alcala", Icono: IconoMonumento},
{Coordenadas: [40.41583, -3.70738], Nombre: "Plaza Mayor", Icono: IconoMonumento},
{Coordenadas: [40.43548, -3.69247], Nombre: "Museo Sorolla", Icono: IconoMonumento},
{Coordenadas: [40.45316, -3.68832], Nombre: "Estadio Santiago Bernabeu", Icono: IconoDeportes},
{Coordenadas: [40.47729, -3.68798], Nombre: "Las Cuatro Torres", Icono: IconoEmpresa},
{Coordenadas: [40.43633, -3.59948], Nombre: "Estadio Civitas Metropolitano", Icono: IconoDeportes},
{Coordenadas: [40.44566, -3.65693], Nombre: "Parque de atracciones Warner", Icono: IconoParqueAtracciones},
{Coordenadas: [40.43256, -3.68720], Nombre: "Centro comercial ABC Serrano", Icono: IconoWifi},
{Coordenadas: [40.41203, -3.75009], Nombre: "Parque de Atracciones de Madrid", Icono: IconoParqueAtracciones},
{Coordenadas: [40.42400, -3.67173], Nombre: "Wizink Center", Icono: IconoMusica},
{Coordenadas: [40.38614, -3.738], Nombre: "Palacio Vistalegre Arena", Icono: IconoMusica},
{Coordenadas: [40.42556, -3.70394], Nombre: "Ojala Bar", Icono: IconoBar},
{Coordenadas: [40.44120, -3.71532], Nombre: "Cherry Pecas Bar", Icono: IconoBar},
{Coordenadas: [40.42526, -3.70073], Nombre: "Oven Restaurante", Icono: IconoComida},
{Coordenadas: [40.41990, -3.69937], Nombre: "Steak Burger Restaurante", Icono: IconoComida},
{Coordenadas: [40.41872, -3.69443], Nombre: "Banco de España", Icono: IconoBancos},
{Coordenadas: [40.41966, -3.67130], Nombre: "Hospital Gregorio Marañon", Icono: IconoFarmacias},
{Coordenadas: [40.41793, -3.67321], Nombre: "Carrefour", Icono: IconoSuper},
{Coordenadas: [40.39801, -3.83492], Nombre: "Universidad CEU San Pablo Monteprincipe", Icono: IconoMonumento},
]


var map = L.map('map').setView([40.39801, -3.83492], 15);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 18
}).addTo(map);

L.control.scale().addTo(map);

function DrawMarkers(data){
    L.marker(data.Coordenadas, {
      title: data.Nombre,
      draggable: false,
      opacity: 0.95,
      icon: data.Icono
    }).bindPopup("<i>" + data.Nombre + "</i>")
      .addTo(map);
}

for(var key in locationData){
  DrawMarkers(locationData[key])
}


