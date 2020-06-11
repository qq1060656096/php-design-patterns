<?php


namespace Zwei\DesignPatterns\Examples\StatePattern\WorkWeChatSync;


use Zwei\DesignPatterns\StatePattern\ContextInterface;
use Zwei\DesignPatterns\StatePattern\StateAbstract;
use Zwei\DesignPatterns\StatePattern\StateInterface;

class MySystemUserSyncWorkWeChatState extends StateAbstract
{
    protected $name = 'MySystemUserSyncWorkWeChatState';
    
    public function doing(ContextInterface $context)
    {
        echo sprintf("[step.%d]state(%s): my system user sync work weChat success.\n", $context->getStep(), $this->getName());
        $this->isDone = true;
        if ($this->isDone()) {
            $state = new WorkWeChatUserIdSyncMySystemState();
            $context->setState($state);
            return $context->doing();
        }
    }
}
