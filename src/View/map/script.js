
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
var map = L.map('map').setView([40.43078, -3.69516], 14);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 18
}).addTo(map);


L.geolet({
  position: 'topleft'
}).addTo(map);



 L.control.Legend({
  collapsed: true,
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
  sel.find("div.popup-small").on('click', () => visibilityChange(sel.find("div.popup")));
  //sel.find("div.popup").on('click', () => visibilityChange(sel.find(".popup-big")));
  sel.find('#name').text(data.Nombre);
  sel.find('#description').text(data.Description);
  sel.find('#link').attr("href", data.Link);
  sel.find('#set-start').on('click', () => setPlace('start', data.Nombre));
  sel.find('#set-end').on('click', () => setPlace('end', data.Nombre));
  return sel[0];
}

function visibilityChange(sel){
  /*if (sel.css("display") == "none")
    sel.css("display","block");
  else if (sel.css("display") == "block")
    sel.css("display","none");*/
  if (sel.hasClass("expanded"))
    sel.removeClass("expanded");
  else
    sel.addClass("expanded");
}

function setPlace(dir, name){
  if(dir == "start") {
    $("#nom1").val(name);
  }
  if(dir == "end") {
    $("#nom2").val(name);
  }

  if($("#ocultarMostrar").css("display") == "none")
    mostrar({id: "formRuta"});


}

//draw map markers

for(var i = 0; i < locationData.Locations.length; i++){
  const location = locationData.Locations[i];

  drawMarker({
    Coordenadas: [location.latitude, location.longitude],
    ID: location.id_place,
    Nombre: location.name_place, //hay que cambiar esta linea luego --------------------------------------------------------------------
    Description: location.description_place,
    Link: location.link_place,
    Icono: Icons[location.id_icon - 1] //por array indexing
  });
}



const rutas = [];
let locationOrigen;
let locationDestino;
let buslat = null;
let buslon = null;

  function mostrar(e){
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
          //rutas.push(location);
          locationOrigen = location;
        }else if(destino.toUpperCase() == location.name_place.toUpperCase()){
          //rutas.push(location);
          locationDestino = location;
        }else{
         // console.log("No existe ningún destino con ese nombre");
        }
      }

      var control = L.Routing.control({
        waypoints: [
           L.latLng([locationOrigen.latitude, locationOrigen.longitude]),
           L.latLng([locationDestino.latitude, locationDestino.longitude])],
           //L.latLng([rutas[0].latitude, rutas[0].longitude]),
           //L.latLng([rutas[1].latitude, rutas[1].longitude])],
           createMarker: function()  {return null},
           router: new L.Routing.osrmv1({
            language: 'en',
           }),
           collapsible: true,

        }).addTo(map);

        //rutas.pop();
        //rutas.pop();

    }
  }


//});

//////////////////////////////////////// search + autocomplete ////////////////////////////////
function getCoords(placeName){
  for(let i = 0; i < locationData.Locations.length; i++){
    const location = locationData.Locations[i];
    if(placeName.toUpperCase() == location.name_place.toUpperCase()){
      buslat = (location.latitude);
      buslon = (location.longitude);
      break;
    }
  }
  return [buslat, buslon]
}

const searchWrappers = document.querySelectorAll(".search-input");
let elementList = [];
for (let i = 0; i < searchWrappers.length; i++) {
  let searchWrapper = searchWrappers[i];
  let inputBox = searchWrapper.querySelector("input");
  let suggBox = searchWrapper.querySelector(".autocom-box");
  let icon = searchWrapper.querySelector(".icon");
  elementList[i] = {
    searchWrapper: searchWrapper,
    inputBox: inputBox,
    suggBox: suggBox,
    icon: icon
  }
  if(icon){
    icon.onclick = ()=>{
      const coords = getCoords(inputBox.value);
      if(coords){
        map.flyTo(coords, 18);
      }
    }
  }
  // any key pressed on the input search
  inputBox.onkeyup = (e)=>{
      let userData = e.target.value; //input data
      let emptyArray = [];
      if(userData){

        emptyArray = locationData.Locations.filter((data)=>{
            return data.name_place.toUpperCase().indexOf(userData.toUpperCase()) > -1;
        });

        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = `<li>${data.name_place}</li>`;
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);

        let allList = suggBox.querySelectorAll("li");
        for (let j = 0; j < allList.length; j++) {
            //adding onclick attribute in all li tag
            allList[j].setAttribute("onclick", `select(this, ${i})`);
        }
      }else{
          searchWrapper.classList.remove("active"); //hide autocomplete box
      }
  }


  function select(element, index){
      let selectData = element.textContent;
      elementList[index].inputBox.value = selectData;
      elementList[index].searchWrapper.classList.remove("active");
  }
  function showSuggestions(list){
      let listData;
      if(!list.length){
          userValue = inputBox.value;
          listData = `<li>${userValue}</li>`;
      }else{
        listData = list.join('');
      }
      suggBox.innerHTML = listData;
  }
}

////////////////////////////////////////////////////////
