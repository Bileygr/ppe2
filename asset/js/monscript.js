function super_administrateur(){
	var x = document.getElementById("super_administrateur").checked;
    
    if(x == true)
    {
    	document.getElementById('super_administrateur').value='1';
    }else if(x == false)
    	{
    		document.getElementById('adresse').value='0';
    	}
}