<?php

namespace App\Jobs;

use Illuminate\Queue\Jobs\SqsJob;

class BaseHandlerJob
{
    protected $data;

    /**
     * @param SqsJob $job
     * @param array $data
     */
    public function handle(SqsJob $job, array $data)
    {
        var_dump($job->getRawBody());
    }
}
