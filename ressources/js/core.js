function setSuperAdministrateur(){
	var x = document.getElementById("administrateur_super").checked; 
  if(x == true){
    document.getElementById('administrateur_super').value='1';
  }else if(x == false){
    	document.getElementById('administrateur_super').value='0';
  }
}

function filterTable() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("recherche_input");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableau");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++){
    td = tr[i].getElementsByTagName("td")[0];

    if (td){
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1){
        tr[i].style.display = "";
      }else{
        tr[i].style.display = "none";
      }
    }       
  }
}

function map() {
  var mapOptions = {
      center: new google.maps.LatLng(48.86, 2.33),
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.HYBRID
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}