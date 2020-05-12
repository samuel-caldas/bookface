<?php
error_reporting(0);
include("../config.php");
include("libs/auth.php");
include("tpl.php");

if(isset($_GET['membros'])) {
    include("libs/membros.php");
}
if(isset($_GET['estatisticas'])) {
    include("libs/estatisticas.php");
}
if($_SERVER['QUERY_STRING']==null) {
    include("libs/default.php");
}

exit;
?>