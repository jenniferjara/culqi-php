<?php
/**
 * Ejemplo 2
 * Como crear un charge a una tarjeta usando Culqi PHP.
 */

try {
  // Usando Composer (o puedes incluir las dependencias manualmente)
  require '../Requests-master/library/Requests.php';
  Requests::register_autoloader();
  require '../lib/culqi.php';


  // Configurar tu API Key y autenticación
  $SECRET_API_KEY = "sk_test_Pu63eYSmOW5uWcQO";
  $culqi = new Culqi\Culqi(array('api_key' => $SECRET_API_KEY));
  
  // Creando Cargo a una tarjeta
  $charge = $culqi->Charges->create(
      array(
        "amount" => 200,
        "currency_code" => "PEN",
        "email" => $_POST["email"],
        "source_id" => $_POST["token"] ,
        "antifraud_details" => array(
            "address" =>"Calle Narciso de la Colima",
            "address_city"=> "Lima",
            "country_code" => "PE",
            "first_name" => "Liz",
            "last_name" => "Ruelas",
            "phone_number" => 123456789
          )
      )
  );
  // Respuesta
  echo "ok";
  
} catch (Exception $e) {
  echo json_encode($e->getMessage());
}
