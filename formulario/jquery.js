
$("#errores").hide();
$("#exito").hide();

$("#enviar").click(function(e){
    e.preventDefault();    
    
    var correo = $("#correo").val();
    var contrasena = $("#contrasena").val();
    var direccion = $("#direccion").val();
    var colonia = $("#colonia").val();
    var ciudad = $("#ciudad").val();
    var sexo = $("#sexo").val();
    var codigoPostal = $("#codigoPostal").val();
    
    //validar los campos vacios
    var errores = "";
    
    if(correo == ""){
        errores += "Correo requerido <br>";
       }
    if(contrasena == ""){
        errores += "Contraseña requerido <br>";
       }
    if(direccion == ""){
        errores += "dirección requerido <br>";
       }
    if(colonia == ""){
        errores += "Colonia requerido <br>";
       }
    if(ciudad == ""){
        errores += "Ciudad requerido <br>";
       }
    if(sexo == ""){
        errores += "Selecciones algun sexo <br>";
       }
    if(codigoPostal == ""){
        errores += "C.P requerido <br>";
       }
    
    if($("#terminosCondiciones").prop('checked') == false) {
        errores += "Acepta los terminos y condiciones";
        
       }
    
    
    if(errores != ""){
        $("#errores").show();
        $("#errores").html(errores);
       }
    else{
        $("#errores").hide();
           
        $("#exito").show();
           
       $.ajax({
            url:'/development/cotizador/getCteByID',
            type:'get',
            data:$("form").serialize(),
            success:function(response){						       					     			
            }
        });
        
       }
});