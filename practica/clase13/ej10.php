<!doctype>
<html>
<body>
  <?php
  $nombre="Mariano";
  switch ($nombre){
    case "Pedro":
    case "Juan":
    case "Fran":
    case "Carlos":
    case "Diego":
    echo "Hola ".($nombre);
    break;
    default:
    echo "No hay a quien saludar";
    break;
  }
  ?>
</body>
</html>
