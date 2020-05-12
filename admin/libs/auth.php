<?php
@session_start();
if(!isset($_SESSION['SESS_ADMIN']) AND !isset($_GET['login'])) {
  die('<script> location.href="?login"; </script>');
}
if($_GET['login']==$admin_password AND $_GET['login']!=null) {
  $_SESSION['SESS_ADMIN'] = 1;
  die('<script> location.href="?"; </script>');
} 
if($_GET['login']!=$admin_password AND $_GET['login']!=null) {
  die('<script>
tent = confirm("Senha incorreta. \nTentar novamente?");
if(tent) {
  location.href="?login";
} else {
  location.href="../";
}
</script>');
}
if(isset($_GET['logout'])) {
  unset($_SESSION['SESS_ADMIN']);
  die('<script> location.href="../"; </script>');
}
if(!isset($_SESSION['SESS_ADMIN']) AND isset($_GET['login'])) {
  echo '<script>
senha = prompt("Digite sua senha de administrador.", "");
if (senha=="null") {
  location.href = "../";
} else {
  location.href = "?login="+senha;
}
</script>';
}
?>