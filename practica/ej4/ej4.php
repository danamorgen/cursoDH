<!doctype>
<html>
<body>
  <?php
  $miarray=[];
  $miarray=["perro","elefante","gato","leon","conejo"];
  var_dump($miarray);
  $miarray[]="vaca";
  $miarray[]="raton";
  var_dump($miarray);
  echo "Me gustan los animales: $miarray[0] $miarray[1] ";
  ?>
</body>
</html>
