<?php
require_once 'url.php';

$url = new weburl;
$header = $url->readFromDb();
header("Location: $header");
