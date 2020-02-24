<?php

declare(strict_types=1);

namespace HttpConnect\Standard\Plugin\Traits;

use HttpConnect\Standard\ActionInterface;

trait DoesNotProcessAction
{
    /**
     * @param ActionInterface $action
     * @return ActionInterface
     */
    public function processAction(ActionInterface $action): ActionInterface
    {
        return $action;
    }
}
