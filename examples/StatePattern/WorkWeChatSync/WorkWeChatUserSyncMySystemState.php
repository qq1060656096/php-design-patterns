<?php


namespace Zwei\DesignPatterns\Examples\StatePattern\WorkWeChatSync;


use Zwei\DesignPatterns\StatePattern\ContextInterface;
use Zwei\DesignPatterns\StatePattern\StateAbstract;

class WorkWeChatUserSyncMySystemState extends StateAbstract
{
    protected $name = 'WorkWeChatUserSyncMySystemState';
    
    public function doing(ContextInterface $context)
    {
        echo sprintf("[step.%d]state(%s): work weChat user sync my system.\n", $context->getStep(), $this->getName());
        $this->isDone = true;
        if ($this->isDone()) {
            $state = new MySystemUserSyncWorkWeChatState();
            $context->setState($state);
            return $context->doing();
        }
    }
}
