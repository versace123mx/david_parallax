<?php
  require_once 'hotelrunner_api.php';
  $obj = new HotelRunner();
  //$call = $obj->getHotelRunner();
  //print_r($call);
  //var_dump($call);
  //var_dump($obj->getHotelRunner());
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <title>Prueba coneccion API HotelRunner</title>
    <meta name="description" content=""/>
    <link rel="icon" href=""/>
    <link rel="stylesheet" href=""/>
  </head>
  <body>
    <?php //var_dump($call);?>
    <?php //echo $call->reservations[0]->guest;?>
    <?php echo $obj->gethr_number()."<br/>";?>
    <?php echo $obj->getguest()."<br/>";?>
    <?php echo $obj->getfirstname()."<br/>";?>
    <?php echo $obj->getlastname()."<br/>";?>
    <?php echo $obj->getcheckin_date()."<br/>";?>
    <?php echo $obj->getcheckout_date()."<br/>";?>
    <?php echo $obj->getnote()."<br/>";?>
  </body>
</html>