<?php
namespace Zwei\DesignPatterns\Examples\StatePattern\WorkWeChatSync;

use Zwei\DesignPatterns\StatePattern\ContextInterface;
use Zwei\DesignPatterns\StatePattern\StateAbstract;

class CreateWorkWeChatDepartmentState extends StateAbstract
{
    protected $name = 'CreateWorkWeChatDepartmentState';
    /**
     * @inheritDoc
     */
    public function doing(ContextInterface $context)
    {
        echo sprintf("[step.%d]state(%s): work weChat create department success\n", $context->getStep(), $this->getName());
        $this->isDone = true;
        if ($this->isDone()) {
            $state = new WorkWeChatUserSyncMySystemState();
            $context->setState($state);
            return $context->doing();
        }
    }
}
