
function uno(){
    var valores = [true, 5, false, "hola", "adios", 2];
	document.write( valores.reverse() + "<br>");
};


function dos(a,b,c){

	var dato = document.write(a + b + c + "<br>");
	return a+b+c;
};

function tres(){

	var semana = [ "lunes", "martes", "miercoles", "jueves", "viernes"];
	return semana;
};

uno();
dos(1,2,3);
document.write(tres() + "<br>");
		
