<?php

return [
    'tcp_url' => env('EVENTSTORE_TCP_URL', 'tcp://admin:changeit@localhost:1113'),
    'http_url' => env('EVENTSTORE_HTTP_URL', 'http://admin:changeit@localhost:2113'),
    'streams' => ['example-quotes'],
    'group' => 'laravel-eventstore-example',
    'namespace' => 'App\Events',
    'replay' => true,
];
