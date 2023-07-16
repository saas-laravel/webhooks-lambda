<?php

/**
 * List of plain SQS queues and their corresponding handling classes
 */
return [
    'handlers' => [
        config('services.lambda.stripe.queue_name') => \App\Jobs\StripeHandlerJob::class,
    ],

    'default-handler' => App\Jobs\BaseHandlerJob::class,

    'connection_names' => [
        'sqs-plain'
    ]
];
