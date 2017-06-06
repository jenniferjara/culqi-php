// function culqi() {
//    if (Culqi.token) {
//       // Imprimir Token
//       console.log(Culqi.token.id);
//     }

//     if(Culqi.error){
//        // Mostramos JSON de objeto error en consola
//        console.log(Culqi.error);

//        alert(Culqi.error.mensaje);
//     }
//     else{
//       $.post(

//         "./develop/examples/02-create-charge.php", 
//         // Ruta hacia donde enviaremos el token vía POST
//         {
//           token: Culqi.token.id,
//           email: Culqi.token.email
//         },
//         function(data, status){
//           console.log(status);
//           var dataParse = JSON.parse(data);
//           console.log(dataParse);
//           if (data == 'ok') {
//               alert('El Token se creo con exito');
//           } else {
//               alert('Error');
//           }
//         }
//       );
//     }
// };

// function culqi() {
//     if(Culqi.token) { 
//         var token = Culqi.token;
//         console.log('Se ha creado un token: ' + token.id);

//         $.ajax({
//           type: "POST",
//           url: "./develop/examples/02-create-charge.php",
//           data: { 'dataString': dataString },
//           success: function()
//               {
//                   alert("Order Submitted");
//               }
//           });

//     }else{
//         console.log(Culqi.error);
//         alert(Culqi.error.mensaje);
//     }
// };