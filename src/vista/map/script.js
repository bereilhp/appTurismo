
let museoDelPrado = [40.41395, 0 - 3.69215]
let museoThyssen = [40.41618, -3.69490];
let laCaixaForum = [40.41122, -3.69358];
let museoReinaSofia = [40.40805, -3.69460];
let teatroReal = [40.41847, -3.71055];
let jardinesSabatini = [40.42048, -3.71405];
let palacioReal = [40.41803, -3.71438];
let catedralAlmudena = [40.41596, -3.71455];
//let madrid = [40.4165, -3.70256];
let coordRetiro = [40.41317, -3.68307];
let puertaDeAlcala = [40.42028, -3.68880];
let plazaMayor = [40.41583, -3.70738];
let museoSorolla = [40.43548, -3.69247];
let berna = [40.45316, -3.68832];
let torres = [40.47729, -3.68798];
let wanda = [40.43633, -3.59948];
let warner = [40.44566, -3.65693];
let abc = [40.43256, -3.68720];
let parqueAtraccion = [40.41203, -3.75009];
let wizink = [40.42400, -3.67173];
let palacioVista = [40.38614, -3.738];
let ojala = [40.42556, -3.70394];
let cherry = [40.44120, -3.71532];
let oven = [40.42526, -3.70073];
let steakBurger = [40.41990, -3.69937];
let bancoEspaña = [40.41872, -3.69443];
let farmacia = [40.41966, -3.67130];
let supermercado = [40.41793, -3.67321];

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

var IconoRestaurantes = L.icon({
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



var map = L.map('map').setView([40.41317, -3.68307], 15);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 18
}).addTo(map);

L.control.scale().addTo(map);
L.marker([40.39801, -3.83492], { draggable: false }).addTo(map);


var MuseoPrado = L.marker(museoDelPrado, {
  title: "Museo del prado",
  draggable: false,
  opacity: 0.95,
  icon: IconoMonumento
}).bindPopup("<i>Museo del Prado</i>")
  .addTo(map);

var Thyssen = L.marker(museoThyssen, {
  title: "Museo Thyssen",
  draggable: false,
  opacity: 0.95,
  icon: IconoMonumento
}).bindPopup("<i>Museo Thyssen</i>")
  .addTo(map);

var Caixa = L.marker(laCaixaForum, {
  title: "Caixa Forum",
  draggable: false,
  opacity: 0.95,
  icon: IconoMonumento
}).bindPopup("<i>Caixa Forum</i>")
  .addTo(map);

var ReinaSfia = L.marker(museoReinaSofia, {
  title: "Museo Reina Sofia",
  draggable: false,
  opacity: 0.95,
  icon: IconoMonumento
}).bindPopup("<i>Museo Reina Sofia</i>")
  .addTo(map);

var TeatroRl = L.marker(teatroReal, {
  title: "Teatro Real",
  draggable: false,
  opacity: 0.95,
  icon: IconoCine
}).bindPopup("<i>Teatro Real</i>")
  .addTo(map);

var JardinesSab = L.marker(jardinesSabatini, {
  title: "Jardines Sabatini",
  draggable: false,
  opacity: 0.95,
  icon: IconoVerde
}).bindPopup("<i>Jardines Sabatini</i>")
  .addTo(map);

var PalacioR = L.marker(palacioReal, {
  title: "Palacio Real",
  draggable: false,
  opacity: 0.95,
  icon: IconoMonumento
}).bindPopup("<i>Palacio Real</i>")
  .addTo(map);

var Almudena = L.marker(catedralAlmudena, {
  title: "Catedral de la Almudena",
  draggable: false,
  opacity: 0.95,
  icon: IconoIglesia
}).bindPopup("<i>Catedral de la Almudena</i>")
  .addTo(map);

var Retiro = L.marker(coordRetiro, {
  title: "Retiro",
  draggable: false,
  opacity: 0.95,
  icon: IconoVerde
}).bindPopup("<i>Retiro</i>")
  .addTo(map);

var PuertaAlcala = L.marker(puertaDeAlcala, {
  title: "Puerta de Alcala",
  draggable: false,
  opacity: 0.95,
  icon: IconoMonumento
}).bindPopup("<i>Puerta de Alcala</i>")
  .addTo(map);

var PlazaMay = L.marker(plazaMayor, {
  title: "Plaza Mayor",
  draggable: false,
  opacity: 0.95,
  icon: IconoMonumento
}).bindPopup("<i>Plaza Mayor</i>")
  .addTo(map);

var Sorolla = L.marker(museoSorolla, {
  title: "Museo Sorolla",
  draggable: false,
  opacity: 0.95,
  icon: IconoMonumento
}).bindPopup("<i>Museo Sorolla</i>")
  .addTo(map);

var Bernabeu = L.marker(berna, {
  title: "Estadio Santiago Bernabeu",
  draggable: false,
  opacity: 0.95,
  icon: IconoDeportes
}).bindPopup("<i>Estadio Santiago Bernabeu</i>")
  .addTo(map);

var CuatroTorres = L.marker(torres, {
  title: "Las Cuatro Torres",
  draggable: false,
  opacity: 0.95,
  icon: IconoEmpresa
}).bindPopup("<i>Las Cuatro Torres</i>")
  .addTo(map);

var metropolitano = L.marker(wanda, {
  title: "Estadio Civitas Metropolitano",
  draggable: false,
  opacity: 0.95,
  icon: IconoDeportes
}).bindPopup("<i>Estadio Civitas Metropolitano</i>")
  .addTo(map);

var ParqueWar = L.marker(warner, {
  title: "Parque Warner",
  draggable: false,
  opacity: 0.95,
  icon: IconoParqueAtracciones
}).bindPopup("<p>Parque Warner</p>")
  .addTo(map);

var abcSerrano = L.marker(abc, {
  title: "Abc Serrano",
  draggable: false,
  opacity: 0.95,
  icon: IconoWifi
}).bindPopup("<p>Centro Comercial ABC Serrano</p>")
  .addTo(map);

var elParqueDeAtracciones = L.marker(parqueAtraccion, {
  title: "Parque de Atracciones",
  draggable: false,
  opacity: 0.95,
  icon: IconoParqueAtracciones
}).bindPopup("<p>Parque de Atracciones</p>")
  .addTo(map);

var wizinkCenter = L.marker(wizink, {
  title: "Wizink Center",
  draggable: false,
  opacity: 0.95,
  icon: IconoMusica
}).bindPopup("<p>Wizink Center</p>")
  .addTo(map);

var palacioVistalegre = L.marker(palacioVista, {
  title: "Palacio Vistalegre Arena",
  draggable: false,
  opacity: 0.95,
  icon: IconoMusica
}).bindPopup("<p>Palacio Vistalegre Arena</p>")
  .addTo(map);

var oajalaBar = L.marker(ojala, {
  title: "Ojala",
  draggable: false,
  opacity: 0.95,
  icon: IconoRestaurantes
}).bindPopup("<p>Ojala Bar</p>")
  .addTo(map);

var cherryPecas = L.marker(cherry, {
  title: "Cherry Pecas Bar",
  draggable: false,
  opacity: 0.95,
  icon: IconoRestaurantes
}).bindPopup("<p>Cherry Pecas Bar</p>")
  .addTo(map);

var ovenComida = L.marker(oven, {
  title: "Oven Restaurante",
  draggable: false,
  opacity: 0.95,
  icon: IconoComida
}).bindPopup("<p>Oven Restaurante</p>")
  .addTo(map);

var steakBurgers = L.marker(steakBurger, {
  title: "Steak Burger Restaurante",
  draggable: false,
  opacity: 0.95,
  icon: IconoComida
}).bindPopup("<p>Steak Burger Restaurante</p>")
  .addTo(map);

var bandoDeEspaña = L.marker(bancoEspaña, {
  title: "Banco de España",
  draggable: false,
  opacity: 0.95,
  icon: IconoBancos
}).bindPopup("<p>Banco de España</p>")
  .addTo(map);

var hospital = L.marker(farmacia, {
  title: "Hospital Gregorio Marañon",
  draggable: false,
  opacity: 0.95,
  icon: IconoFarmacias
}).bindPopup("<p>Hospital Gregorio Marañon</p>")
  .addTo(map);

var superMercadoCarrefour = L.marker(supermercado, {
  title: "Carrefour",
  draggable: false,
  opacity: 0.95,
  icon: IconoSuper
}).bindPopup("<p>Carrefour</p>")
  .addTo(map);

