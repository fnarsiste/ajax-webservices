<?php

require_once '../connect.php';
require_once '../functions.php';

// Désactivation du cache WSDL
ini_set("soap.wsdl_cache_enabled", "0");
try {
   $server = new SoapServer('repertoire.wsdl');
   // On ajoute les méthodes que le serveur va gérer
   $server->addFunction(SOAP_FUNCTIONS_ALL);
} catch (Exception $e) {
   echo 'erreur' . $e;
}


// Si l'appel provient d'une requête POST (Web Service)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   // On lance le serveur SOAP
   $server->handle();
} else {
   // echo '<strong>Le serveur SOAP ne reconnaît pas cette requête : </strong>';
   // echo '<ul>';
   // foreach ($server->getFunctions() as $func) {
   //    echo '<li>', $func, '</li>';
   // }
   // echo '</ul>';
}
