function validar(){
    var nombre, apellido, correo, telefono, mensajes, expresion;
    nombre= document.getElementById("nombre").value;
    apellido= document.getElementById("apellido").value;
    correo= document.getElementById("correo").value;
    telefono= document.getElementById("telefono").value;
    mensajes= document.getElementById("mensajes").value; 

    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre==="" || apellido==="" || correo==="" || telefono==="" || mensajes===""){
        alert("Los campos son obligatorios");
        return false;
    }
    else if(nombre.length>30){
        alert("El nombre es muy largo");
        return false;
    } 
    else if(apellido.length>30){
        alert("El apellido es muy largo");
        return false;
    }
    else if(correo.length>100){
        alert("El correo es muy largo");
        return false;
    }
    else if(!expresion.test(correo)){
        alert ("El correo no es valido");
        return false;
    }
    else if(telefono.length>20){
        alert("El teléfono es muy largo");
        return false;
    }
    else if(isNaN(telefono)){
        alert("El teléfono ingresado no es un número");
        return false;
    }
}