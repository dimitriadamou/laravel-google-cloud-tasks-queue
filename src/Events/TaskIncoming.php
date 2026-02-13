<?php

declare(strict_types=1);

namespace dimitriadamou\LaravelGoogleCloudTasksQueue\Events;

use dimitriadamou\LaravelGoogleCloudTasksQueue\IncomingTask;

class TaskIncoming
{
    public function __construct(public IncomingTask $task)
    {
        //
    }
}
