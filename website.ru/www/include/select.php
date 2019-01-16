<?
  $pdo = include 'connect.php';
  $sth = $pdo->prepare('SELECT id, name FROM country ORDER BY id desc');
  $sth->execute();
  return $sth;
?>
