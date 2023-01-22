<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

var_dump($argv);
var_dump($_ENV);
// $response = Requests::post(
//     "",
//     array(
//         'Content-type' => 'application/json'
//     ),
//     json_encode(array(
//         'blocks' => 
//             array(
//                 array(
//                 "type" => "section",
//                 "text" => array(
//                     "type" => "mrkdwn",
//                     "text" => "You have a new request: *<fakelink.toemployeeprofile.com|Fred Enriquez - New device request>*",
//                 ),
//             ),
//             array(
//                 "type" => "section",
//                 "fields" => array(
//                     array(
//                         "type" => "mrkdwn",
//                         "text" => "*When:*\nComputer (laptop)",
//                     ),
//                     array(
//                         "type" => "mrkdwn",
//                         "text" => "*When:*\nSubmitted Aug 10",
//                     ),
//                 ),
//             ),
//         ),
//     ))
// );

// var_dump($response);

if(!$response->success) {
    echo $response->body;
}
