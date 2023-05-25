//Recibe el contenido de la caja y comprueba si es un campo vac�o
function esVacio(s){
	for (i = 0; i < s.length; i++){
		c = s.charAt(i);
		if ((c != ' ') && (c != '\n') && (c != '\t')) 
			return false;
	}
	return true;
}

//Recibe el contenido de la caja y comprueba si es un n�mero
function Es_Num(n){	
	for (i = 0; i < n.length; i++)	{
		var c = n.charAt(i);
		if (!(c >= "0" &&  c <= "9")) return false;
	}
	return true;
}