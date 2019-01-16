<?
  $pdo = include 'connect.php';
  $name_country = $_POST['name_country'];
  $sth = $pdo->prepare("INSERT into country VALUES (NULL, '$name_country')");
  $sth->execute();
  $sth = null;
  $pdo = null;
?>
