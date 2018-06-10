function updateOffre() {
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("offreBody").innerHTML = this.responseText;
            }
        xmlhttp.open("GET", "http://127.0.0.1/ppe2/ressources/ajax/offre-index.php", true);
        xmlhttp.send();
    }
}