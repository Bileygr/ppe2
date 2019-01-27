function map() {
  var mapOptions = {
      center: new google.maps.LatLng(48.86, 2.33),
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.HYBRID
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}

function set_super_administrateur(){
	var x = document.getElementById("super_administrateur_status").checked; 
  
  if(x == true){
    document.getElementById('super_administrateur_status').value='1';
  }else if(x == false){
    	document.getElementById('super_administrateur_status').value='0';
  }
}