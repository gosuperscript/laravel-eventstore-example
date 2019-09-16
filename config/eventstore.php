<?php

return [
    'tcp_url' => env('EVENTSTORE_TCP_URL', 'tcp://admin:changeit@localhost:1113'),
    'http_url' => env('EVENTSTORE_HTTP_URL', 'http://admin:changeit@localhost:2113'),
    'volatile_streams' => ['volatile-quotes'],
    'subscription_streams' => ['example-quotes'],
    'group' => 'laravel-eventstore-example',
    'type_to_class' => function ($event) {
        return 'App\Events' . $event->getType();
    }
];
