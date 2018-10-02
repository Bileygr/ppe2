function TableauOffre(){
	$.ajax({
		type:"GET",
		url:"/web/ajax/php/tableauoffre.php",
		success:function(data){
			var lesOffres = $.parseJSON(data);
	
			for(var offre in lesOffres){
				var table = $('#offres').append(
					"<tr>"
                        +"<td>"+lesOffres[offre].formation_nom+"</td>"
                        +"<td>"+lesOffres[offre].offre_nom+"</td>"
                        +"<td>"+lesOffres[offre].partenaire_nom+"</td>"
                        +"<td>"+lesOffres[offre].offre_debut+"</td>"
                        +"<td>"+lesOffres[offre].offre_fin+"</td>"
                        +"<td>"+lesOffres[offre].offre_creation+"</td>"
                        +"<form method='POST'>" 
                          +"<input type='hidden' name='offre_id' value="+lesOffres[offre].offre_id+">"
                          +"<input type='hidden' name='formation_id' value="+lesOffres[offre].formation_id+">"
                          +"<input type='hidden' name='offre_nom' value="+lesOffres[offre].offre_nom+">"
                          +"<input type='hidden' name='partenaire_nom' value="+lesOffres[offre].partenaire_nom+">"
                          +"<input type='hidden' name='offre_description' value="+lesOffres[offre].offre_description+">"
                          +"<input type='hidden' name='offre_debut' value="+lesOffres[offre].offre_debut+">"
                          +"<input type='hidden' name='offre_fin' value="+lesOffres[offre].offre_fin+">"
                          +"<input type='hidden' name='offre_creation' value="+lesOffres[offre].offre_creation+">"
                          +"<td><input class='btn btn-secondary my-2 my-sm-0' type='submit' name='modifier' value='Description'></td>"
                        +"</form>"
                    +"</tr>"
				);
			}
		},
		error : function()
		{
			alert('Erreur du script PHP');
		}
	});	
}
