<?php

date_default_timezone_set("Africa/Porto-Novo");


// $dns = "mysql:host=localhost";
$dsn = 'mysql:host=mysql';
$dbname = "webservices_db";
$user = 'equittance';
$pwd = '@dminT123';

try {
   $pdo = new PDO("$dsn;dbname=$dbname;charset=utf8", $user, $pwd);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
   $pdo->setAttribute(PDO::FETCH_ASSOC, true);
   //echo "Connected successfully.";

//    $pdo->query("
//     INSERT INTO matches (season_id, home_team_id, away_team_id, match_date, home_team_goals, away_team_goals)
// values              (1,         1,            2,            '2023-12-12', 2, 3);
//    ");

} catch (PDOException $e) {
   echo "<pre>"; var_dump($e); echo "</pre>";
   echo $e->getMessage();
   $errorCode = $e->getCode();
   die("STOP!!!");
}
