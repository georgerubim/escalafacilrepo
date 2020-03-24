<?php
require "guzzle/vendor/autoload.php";
use \GuzzleHttp\Client;
$client = new Client();

$request = $client->request('GET','https://d8b041a9a8e555222a3320a1f86d4496:2ae1a58861a52629c7101ca0592c57d3@escalafacil.myshopify.com/admin/api/2020-01/products.json');

echo $request->getBody();

?>