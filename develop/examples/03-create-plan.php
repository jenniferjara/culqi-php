<?php
/**
 * Ejemplo 3
 * Como crear un plan usando Culqi PHP.
 */

try {
  // Usando Composer (o puedes incluir las dependencias manualmente)
  // require '../vendor/autoload.php';

  require '../Requests-master/library/Requests.php';
  Requests::register_autoloader();
  require '../lib/culqi.php';

  // Configurar tu API Key y autenticación
  $SECRET_API_KEY = "sk_test_Pu63eYSmOW5uWcQO";
  $culqi = new Culqi\Culqi(array('api_key' => $SECRET_API_KEY));

  // Creando Cargo a una tarjeta
  $plan = $culqi->Plans->create(
      array(
        "amount" => 200,
        "currency_code" => "PEN",
        "interval" => "months",
        "interval_count" => 1,
        "limit" => 12,
        "name" => "Plan de Prueba ".uniqid(),
        "trial_days" => 0
      )
  );
  // Respuesta
  echo json_encode($plan);

} catch (Exception $e) {
  echo json_encode($e->getMessage());
}
