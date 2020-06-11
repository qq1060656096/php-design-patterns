<?php


namespace Zwei\DesignPatterns\Examples\StatePattern\WorkWeChatSync;


use Zwei\DesignPatterns\StatePattern\ContextInterface;
use Zwei\DesignPatterns\StatePattern\StateAbstract;

class WorkWeChatUserIdSyncMySystemState extends StateAbstract
{
    protected $name = 'WorkWeChatUserIdSyncMySystemState';
    
    public function doing(ContextInterface $context)
    {
        echo sprintf("[step.%d]state(%s): work weChat userId sync my system.\n", $context->getStep(), $this->getName());
        $this->isDone = true;
    }
}
