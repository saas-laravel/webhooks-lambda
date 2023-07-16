<?php

namespace App\Jobs;

use Illuminate\Queue\Jobs\SqsJob;

class StripeHandlerJob
{
    protected $data;

    /**
     * @param SqsJob $job
     * @param array $data
     */
    public function handle(SqsJob $job, array $data)
    {
        var_dump($data);
    }
}
