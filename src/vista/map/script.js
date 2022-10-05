function iniciarMap(){

  let ceu = {lat: 40.39805, lng: -3.83490};
  let museoDelPrado = {lat: 40.41395, lng: -3.69215};
  let museoThyssen = {lat: 40.41618, lng: -3.69490};
  let laCaixaForum = {lat: 40.41122, lng: -3.69358};
  let museoReinaSofia = {lat: 40.40805, lng: -3.69460}; 
  let teatroReal = {lat: 40.41847, lng: -3.71055};
  let jardinesSabatini = {lat: 40.42048, lng: -3.71405}; 
  let palacioReal = {lat: 40.41803, lng: -3.71438};
  let catedralAlmudena = {lat: 40.41596, lng: -3.71455}; 
  let madrid = {lat:40.4165,lng: -3.70256};
  let coordRetiro = {lat:40.41317 ,lng: -3.68307};
  let puertaDeAlcala = {lat: 40.42028, lng: -3.68880};
  let plazaMayor = {lat: 40.41583, lng: -3.70738};
  let museoSorolla = {lat: 40.43548, lng: -3.69247};
  let berna = {lat: 40.45316, lng: -3.68832};
  let torres = {lat: 40.47729, lng: -3.68798};
  let wanda = {lat: 40.43633, lng: -3.59948};
  let warner = {lat: 40.44566,lng: -3.65693};
  
  
  
  let map = new google.maps.Map(document.getElementById('map'),{
    zoom: 14,
    center: madrid
  });

  let parqueWarner = new google.maps.Marker({
    position: warner,
    map: map
  })

  let wandaMetro = new google.maps.Marker({
    position: wanda,
    map: map
  })

  let cuatroTorres = new google.maps.Marker({
    position: torres,
    map: map
  })

  let sorolla = new google.maps.Marker({
    position: museoSorolla,
    map: map
  })

  let bernabeu = new google.maps.Marker({
    position: berna,
    map: map
  })

  let ceuMonteprincipe = new google.maps.Marker({
    position: ceu,
    map: map
  })

  let puertaAlcala = new google.maps.Marker({
    position: puertaDeAlcala,
    map: map
  })

  let plazaMayo = new google.maps.Marker({
    position: plazaMayor,
    map: map
  })
  



  let museoPrado = new google.maps.Marker({
    position: museoDelPrado,
    map: map
  })
  
  let museoDeThyssen = new google.maps.Marker({
    position: museoThyssen,
    map: map
  })

  let caixaForum = new google.maps.Marker({
    position: laCaixaForum,
    map: map
  })

  let reinaSofia = new google.maps.Marker({
    position: museoReinaSofia,
    map: map
  })

  let teatroReales = new google.maps.Marker({
    position: teatroReal,
    map: map
  })

  let sabatini = new google.maps.Marker({
    position: jardinesSabatini,
    map: map
  })

  let palacioReales = new google.maps.Marker({
    position: palacioReal,
    map: map
  })

  let almudena = new google.maps.Marker({
    position: catedralAlmudena,
    map: map
  })

  let retiro = new google.maps.Marker({
    position: coordRetiro,
    map: map 
  });
}