<?php
require __DIR__ . '/../vendor/autoload.php';

use Goutte\Client;

$client = new Client();

// Go to the symfony.com website
$crawler = $client->request('GET', 'https://truyenqq.com/');

print '<head>'.$crawler->filter('head')->html().'</head>';

// // Get the latest post in this category and display the titles
$crawler->filter('.col-md-2.col-xs-6.col-sm-3')->each(function ($node) {
    print '<div class="col-md-2 col-xs-6 col-sm-3">'.preg_replace("/<\s*a[^>]*>/", "<a href=#>", $node->html()).'</div>';
});

?>
