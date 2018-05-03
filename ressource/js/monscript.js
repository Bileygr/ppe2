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