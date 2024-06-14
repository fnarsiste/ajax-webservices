<?php
function getList()
{
   return [
      'teams' => teams(),
      'matches' => matches(),
      'seasons' => seasons(),
   ];
}

function matches()
{
   global $pdo;
   $stmt = $pdo->prepare("select m.*, s.season_name, v.team_name visitor, d.team_name home from matches m 
      left join seasons s on m.season_id  = s.season_id 
      left join teams d on d.team_id = m.home_team_id 
      left join teams v on v.team_id = m.away_team_id  ;");
   $stmt->execute();
   $items = [];
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $items[] = $row;
   }
   return $items;
}

function teams()
{
   global $pdo;
   $stmt = $pdo->prepare("SELECT * FROM teams");
   $stmt->execute();
   $items = [];
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $items[] = $row;
   }
   return $items;
}

function seasons()
{
   global $pdo;
   $stmt = $pdo->prepare("SELECT * FROM seasons");
   $stmt->execute();
   $items = [];
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $items[] = $row;
   }
   return $items;
}

function create($season_id, $match_date, $home_team_id, $away_team_id, $home_team_goals, $away_team_goals): int
{
   global $pdo;
   $sql = "INSERT INTO matches (season_id, match_date, home_team_id, away_team_id, home_team_goals, away_team_goals) VALUES (?,?,?,?,?,?)";
   $pdo->prepare($sql)->execute([$season_id, $match_date, $home_team_id, $away_team_id, $home_team_goals, $away_team_goals]);
   return 1;
}
