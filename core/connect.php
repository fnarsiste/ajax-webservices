<?php

date_default_timezone_set("Africa/Porto-Novo");
extract(require_once('login.php'));
try {
   $pdo = new PDO("$dns;dbname=$dbname;charset=utf8", $user, $pwd);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
   $pdo->setAttribute(PDO::FETCH_ASSOC, true);
   echo "Connected successfully.";
} catch (PDOException $e) {
   echo "<pre>"; var_dump($e); echo "</pre>";
   echo $e->getMessage();
   $errorCode = $e->getCode();
   die("STOP!!!");
}
