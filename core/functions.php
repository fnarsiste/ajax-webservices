<?php
function getList()
{
   global $pdo;
   $result = $pdo->query("SELECT id,first_name, last_name, gender, email, phone, created_at FROM repertoire ORDER BY id desc;");
   $directory = [];
   foreach ($result as $row) {
      $row['created'] = (new \DateTime($row['created_at']))->format('d/m/Y H:i:s');
      $directory[] = $row;
   }
   return $directory;
}

function create($noms, $prenoms, $sexe, $email, $phone): int
{
   global $pdo;
   $sql = "INSERT INTO repertoire (first_name, last_name, gender, email, phone) VALUES (?,?,?,?,?)";
   $pdo->prepare($sql)->execute([$noms, $prenoms, $sexe, $email, $phone]);
   return 1;
}
