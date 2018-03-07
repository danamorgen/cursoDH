<!doctype>
<html>
<body>
  <?php
  $colorRemera="azul";
  switch ($colorRemera){
    case "amarillo":
    case "rojo":
    case "verde":
    echo "El color de la remera es un color primario";
    break;
    default:
    echo "La remera es de un color desconocido";
    break;
  }
  ?>
</body>
</html>
