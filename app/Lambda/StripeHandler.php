<?php

namespace App\Lambda;

use Hammerstone\Sidecar\LambdaFunction;

class StripeHandler extends LambdaFunction
{
    public function handler(): string
    {
        return 'lambda/stripe.handler';
    }

    public function package(): array
    {
        return [
            'lambda',
        ];
    }

    public function variables(): array
    {
        return [
            'SQS_REGION' => config('queue.connections.sqs.region'),
            'QUEUE_URL' => config('services.lambda.stripe.queue_url')
        ];
    }
}
