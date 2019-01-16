<?
  $pdo;
  try
  {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=countries', 'root', '');
  }
  catch (PDOException $exception)
  {
    echo $exception->getMessage();
    die;
  }
  return $pdo;
?>
