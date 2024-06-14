<?php
class SoapBom extends \SoapClient
{

   public function __doRequest($req, $location, $action, $version = SOAP_1_1, $oneWay = false)
   {

      $xml = explode("\r\n", parent::__doRequest($req, $location, $action, $version, $oneWay));
      var_dump($xml);

      $response = preg_replace('/^(\x00\x00\xFE\xFF|\xFF\xFE\x00\x00|\xFE\xFF|\xFF\xFE|\xEF\xBB\xBF)/', "", $xml[0]);

      return $response;
   }
}
