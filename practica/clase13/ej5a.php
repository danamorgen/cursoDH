<!doctype>
<html>
<body>
  <?php
  $nombreDeUsuario="admin";
  $ClaveDeUsuario="1234";
  if ($nombreDeUsuario=="admin"&& $ClaveDeUsuario=="1234"){
    echo "¡Bienvenido a tu cuenta!";
  }else {
    echo "Lo sentimos, hay un error de credenciales.";
    if ($nombreDeUsuario!="admin"){
      echo " El usuario no es valido";
    }else{
      echo " La clave de usuario no es valida";
    }
  }
  ?>
</body>
</html>
