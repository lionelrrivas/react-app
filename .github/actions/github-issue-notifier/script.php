<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

var_dump($argv);
var_dump($_ENV);
$response = Requests::post(
    $_ENV('INPUT_SLACK_WEBHOOK'),
    array(
        'Content-type' => 'application/json'
    ),
    json_encode(array(
        'blocks' => 
            array(
                array(
                "type" => "section",
                "text" => array(
                    "type" => "mrkdwn",
                    "text" => $_ENV['INPUT_MESSAGE'],
                ),
            ),
            array(
                "type" => "section",
                "fields" => array(
                    array(
                        "type" => "mrkdwn",
                        "text" => "*Repository:*\n{$_ENV['GITHUB_REPOSITORY']}",
                    ),
                    array(
                        "type" => "mrkdwn",
                        "text" => "*Event:*\n{$_ENV['GITHUB_EVENT_NAME']}",
                    ),
                    array(
                        "type" => "mrkdwn",
                        "text" => "*Ref:*\n{$_ENV['GITHUB_REF']}"
                    ),
                    array(
                        "type" => "mrkdwn",
                        "text" => "*SHA:*\n{$_ENV['GITHUB_SHA']}",
                    ),
                ),
            ),
        ),
    ))
);

var_dump($response);

if(!$response->success) {
    echo $response->body;
}
