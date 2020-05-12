<?php
function tpl($title, $content, $menu) {
  switch($menu) {
    case 'membros':
      $mn = '      <li><a href="?membros" ><b>Membros</b></a></li>
      <li><a href="?estatisticas">Estat&iacute;sticas</a></li>';
    break;
    case 'estatisticas':
      $mn = '      <li><a href="?membros" >Membros</a></li>
      <li><a href="?estatisticas"><b>Estat&iacute;sticas</b></a></li>';
    break;
    default:
      $mn = '      <li><a href="?membros" >Membros</a></li>
      <li><a href="?estatisticas">Estat&iacute;sticas</a></li>';
    break;
  }
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BookFace</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="masthead">
  <h1 id="siteName">BookFace - Painel de administra&ccedil;&atilde;o - '.$title.' </h1>
  </div>
<!-- end masthead -->
<div id="content">
  <h2 id="pageName">'.$title.'</h2>
  <div class="feature">
    <h3>'.$content.'</h3>
  </div>
</div>
<!--end content -->
<div id="navBar">
  <div id="search"><b>Menu</b> (<a href="?logout">Sair</a>)</div>
  <div id="sectionLinks">
    <ul>
'.$mn.'
    </ul>
  </div>
  <div id="headlines"></div>
</div>
<!--end navbar -->
<div id="siteInfo">
  <div align="center">&copy;BookFace</div>
</div>
<br />
</body>
</html>';
}
?>