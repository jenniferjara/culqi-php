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
        // "antifraud_details" => array(
        //     "address" =>"Calle Narciso de la Colima",
        //     "address_city"=> "Lima",
        //     "country_code" => "PE",
        //     "first_name" => "Liz",
        //     "last_name" => "Ruelas",
        //     "phone_number" => 123456789
        //   )
      )
  );
  // Respuesta
  // echo "ok";
  echo json_encode($charge);

  // Plan
  $plan = $culqi->Plans->create(
      array(
        "alias" => "plan_basic".uniqid(),
        "amount" => 200,
        "currency_code" => "PEN",
        "interval" => "months",
        "interval_count" => 1,
        "limit" => 12,
        "name" => "Basic Plan ".uniqid(),
        "trial_days" => 0
      )
  );

  // Cliente
  $customer = $culqi->Customers->create(
      array(
        "address" => "av lima 123",
        "address_city" => "lima",
        "country_code" => "PE",
        "email" => "www@".uniqid()."me.com",
        "first_name" => "Will",
        "last_name" => "Muro",
        "metadata" => array("test"=>"test"),
        "phone_number" => 899898999
      )
  );

  // tarjeta
  

  
} catch (Exception $e) {
  echo json_encode($e->getMessage());
}
