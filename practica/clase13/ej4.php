<!doctype>
<html>
<body>
  <?php
  $nro=rand(1,100);
  if ($nro>50){
    echo "El número es mayor a 50";
  }else if ($nro<50){
    echo "El número es menor a 50";
  }else{
    echo "El número es  50";
  }
  ?>
</body>
</html>
