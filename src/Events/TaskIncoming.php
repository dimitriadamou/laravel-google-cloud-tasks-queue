<?php

declare(strict_types=1);

namespace dimitriadamouLaravelGoogleCloudTasksQueue\Events;

use dimitriadamouLaravelGoogleCloudTasksQueue\IncomingTask;

class TaskIncoming
{
    public function __construct(public IncomingTask $task)
    {
        //
    }
}
