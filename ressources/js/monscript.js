function administrateur_super(){
	var x = document.getElementById("administrateur_super").checked;
    
    if(x == true)
    {
    	document.getElementById('administrateur_super').value='1';
    }else if(x == false)
    	{
    		document.getElementById('administrateur_super').value='0';
    	}
}

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("recherche_input");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableau");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

/*
function myMap() {
	var mapCanvas = document.getElementById("map");
  	var mapOptions = {
  		center: new google.maps.LatLng(48.86, 2.33), zoom: 10
 	};
  	var map = new google.maps.Map(mapCanvas, mapOptions);
}

function codeAddress() {
    // Define address to center map to
    var address = 'Paris, France';

    geocoder.geocode({
    	'address': address
   	}, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            // Center map on location
            map.setCenter(results[0].geometry.location);

            // Add marker on location
            var marker = new google.maps.Marker({
            	map: map, position: results[0].geometry.location});
		} else {
			alert("Geocode was not successful for the following reason: " + status);
          }
      });
}
*/
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}