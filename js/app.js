function culqi() {
   if (Culqi.token) {
      // Imprimir Token
      console.log(Culqi.token.id);
    }

    if(Culqi.error){
       // Mostramos JSON de objeto error en consola
       console.log(Culqi.error);

       alert(Culqi.error.mensaje);
    }
    else{
       $.post("http://localhost/pruebaIntegracionV2/culqi-php-develop/examples/02-create-charge.php", 
       // Ruta hacia donde enviaremos el token vía POST
        {token: Culqi.token.id},
        function(data, status){
            console.log(data);
            if (data=='ok') {
                alert('El Token se creo con exito');
            } else {
                alert('Error');
            }
        });
       }
};