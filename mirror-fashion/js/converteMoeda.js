function numberParaReal(numero){
	var formatado = "R$ " + numero.toFixed(2).replace(".",",");
	return formatado;
}


function realParaNumber(numero){
	var valor = parseFloat(numero.replace("R$ ","").replace(",","."));
	return valor;
}


