<?php
if(basename($_SERVER['PHP_SELF'])=="estatisticas.php") { die(); }

$q_members = mysql_query("SELECT * FROM members");
$members = mysql_num_rows($q_members); // membros

$q_friends = mysql_query("SELECT * FROM friendlist");
$friends = mysql_num_rows($q_friends); // amizades

$q_messages = mysql_query("SELECT * FROM messages");
$messages = mysql_num_rows($q_messages); // mensagens
// média mensagens/membros
$max = max($members, $messages);
$min = min($members, $messages);
$msgmbr = $min/$max;
// end
// média mensagens/amizades
$max = max($friends, $messages);
$min = min($friends, $messages);
$msgamz = $min/$max;
// end

$q_photos = mysql_query("SELECT * FROM photos");
$photos = mysql_num_rows($q_photos); // fotos

$q_event = mysql_query("SELECT * FROM event");
$event = mysql_num_rows($q_event); // eventos

$q_ads = mysql_query("SELECT * FROM ads");
$ads = mysql_num_rows($q_ads); // anúncios

$q_comphotos = mysql_query("SELECT * FROM photoscomment");
$comphots = mysql_num_rows($comphotos);
// média comentários/fotos
$max = max($comphots, $photos);
$min = min($comphots, $photos);
$comphotos = $max/$min; // comentários em fotos
// end

$q_posts = mysql_query("SELECT * FROM message");
$posts = mysql_num_rows($q_posts); // posts

$q_gosts = mysql_query("SELECT * FROM bleh");
$gosts = mysql_num_rows($q_gosts); // curtidas


$output = nl2br("Esta rede social possui $members membros e $friends amizades.
$messages mensagens já foram transmitidas. Isto quer dizer que há uma média de $msgmbr mensagens por membros e $msgamz mensagens por amizade.
$event eventos foram compartilhados, sem esquecer também dos $ads anúncios publicados.
No tocante às fotos, $photos foram enviadas e $comphots comentários foram dados às fotos, numa média de $comphotos comentários por foto.
$posts mensagens foram compartilhadas nos perfis e as \"curtidas\" totalizaram $gosts.");

tpl("Estatísticas", $output, "estatisticas");
?>