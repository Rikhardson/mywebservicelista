<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
$data = array(
    array('firstname' => 'Jouni','lastname' => 'Juntunen', 'email' => 'jjuntunen@oamk.fi'),
    array('firstname' => 'Pekka','lastname' => 'Ojala', 'email' => 'pojala@oamk.fi'),
    array('firstname' => 'Teppo','lastname' => 'Räisänen', 'email' => 'teraisan@oamk.fi'),
    array('firstname' => 'Minna','lastname' => 'Kamula', 'email' => 'mkamula@oamk.fi'),
    array('firstname' => 'Matti','lastname' => 'Viitala', 'email' => 'mviitala@oamk.fi')
);
$json = json_encode($data,JSON_PRETTY_PRINT);
print $json;