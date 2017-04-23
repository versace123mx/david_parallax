<?php
  require_once 'hotelrunner_api.php';
  $obj = new HotelRunner();
  $call = $obj->getHotelRunner();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <title></title>
    <meta name="description" content=""/>
    <link rel="icon" href=""/>
    <link rel="stylesheet" href=""/>
  </head>
  <body>
    <?php //var_dump($call);?>
    <?php echo $call->reservations[0]->guest;?>
  </body>
</html>