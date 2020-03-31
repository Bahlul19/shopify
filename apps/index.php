<?php

require_once("inc/function.php");

$requests = $_GET;
$hmace = $_GET['hmac'];
$serilizeArray = serialize($requests);
$requests = array_diff_key($requests, array('hmac' => ''));

ksort($requests);

$token = "";
$shop = "bahlultechstore.myshopify.com";

$collectionList = shopify_call($token, $shop, "/admin/api/31-3-2020/custom_collection.json", array(), 'GET');

$collectionList = json_decode($collectionList['response'], JSON_PRETTY_PRINT);

$collection_id = $collectionList['custom_collection'][0]['id'];


?>