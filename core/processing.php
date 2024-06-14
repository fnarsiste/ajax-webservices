<?php
// require_once('SoapBom.php');

ini_set('soap.wsdl_cache_enabled', "0");

extract(array_merge($_POST, $_GET));
$client = new SoapClient("../xml/repertoire.wsdl");

try {
   switch ($action ?? 'list') {
      case 'create':
         $result = $client->create($season_id, $match_date, $home_team_id, $away_team_id, $home_team_goals, $away_team_goals);
         echo json_encode([
            'success' => $result,
            'message' => $result ? "Entry added successfully." : "Error while operating."
         ]);
         break;
      case 'list':
         $result = $client->getList();
         ob_start();
         foreach ($result['matches'] as $item) :
            extract($item); ?>
            <tr>
               <th scope="row"><?= $match_id ?></th>
               <td><em><?= $season_name ?></em></td>
               <td><b><?= $home ?></b></td>
               <td><?= $visitor ?></td>
               <td><?= $match_date ?></td>
               <td><?= $home_team_goals ?></td>
               <td><?= $away_team_goals ?></td>
            </tr> <?php
            endforeach;
            if (count($result) === 0) : ?>
               <tr>
                  <td colspan="7">
                     <div class="text-center">
                        <h4>Pas de données</h4>
                     </div>
                  </td>
               </tr><?php
            endif;
            $html = ob_get_clean();
            echo json_encode([
               'success' => true,
               'message' => "Okay",
               'html' => $html,
               'data' => $result
            ]);
         break;
      }
} catch (SoapFault $e) {
   // echo "<pre>"; var_dump($e); echo "</pre>";
   echo $e;
}
