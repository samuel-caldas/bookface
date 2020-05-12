<?php
if(basename($_SERVER['PHP_SELF'])=="membros.php") { die(); }

  $output = '<table>
<tr>
  <td><b>Login</b></td>
  <td><b>Senha</b></td>
  <td><b>Nome</b></td>
  <td><b>E-mail</b></td>
  <td><b>Ver mais</b></td>
</tr>
<tr>';
  $qry = mysql_query("SELECT * FROM members", $con);
  while($row = mysql_fetch_array($qry)) {
    $output .= '<td>'.$row['UserName'].'</td>
<td><a href="#" onClick="javascript:alert(\''.addslashes($row['Password']).'\');">Mostrar senha</a></td>
<td>'.$row['FirstName'].' '.$row['LastName'].'</td>
<td>'.$row['Url'].'</td>
<td><a href="../member-index.php?id='.$row['member_id'].'" title="Detalhes"><img src="img/user.png" alt="Detalhes"></a>';
  }
$output .= '</tr>
</table>';

tpl("Membros", $output, "membros");

?>