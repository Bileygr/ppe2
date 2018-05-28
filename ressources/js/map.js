function myMap() {
	var mapOptions = {
    	center: new google.maps.LatLng(48.86, 2.33),
    	zoom: 12,
    	mapTypeId: google.maps.MapTypeId.HYBRID
	}
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}