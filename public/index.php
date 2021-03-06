<?php
require __DIR__ . '/../vendor/autoload.php';

use Goutte\Client;

$client = new Client();

// Go to the https://truyenqq.com website
$crawler = $client->request('GET', 'https://truyenqq.com/');

// Keep the header of original website in order to use its css =))
print '<head>'.$crawler->filter('head')->html().'</head>';

// Get the latest post and display them
$crawler->filter('.col-md-2.col-xs-6.col-sm-3')->each(function ($node) {
    // Use preg_replace to change the url in a tags
    print '<div class="col-md-2 col-xs-6 col-sm-3">'.preg_replace("/<\s*a[^>]*>/", "<a href=#>", $node->html()).'</div>';
});

?>
