function guardarDatos(){
    localStorage.nombre = document.getElementById("nombre").value;
    localStorage.numero1 = document.getElementById("numero1").value;
    localStorage.numero2 = document.getElementById("numero2").value;
    localStorage.numero3 = document.getElementById("numero3").value;
   }
   
   function recuperarDatos(){
    if ((localStorage.nombre != undefined) && (localStorage.numero1 != undefined) && (localStorage.numero2 != undefined) && (localStorage.numero3 != undefined)) {
     document.getElementById("datos").innerHTML = "Usuario: " + localStorage.nombre + "<br/> Operand1: " + localStorage.numero1 + "<br/> Operand2: " + localStorage.numero2 + "<br/> Operand3: " + localStorage.numero3;
    }
    else{
     document.getElementById("datos").innerHTML = "Error";
    }
   }