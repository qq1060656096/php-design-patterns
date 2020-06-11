<?php


namespace Zwei\DesignPatterns\StatePattern;


abstract class StateAbstract implements StateInterface
{
    protected $name = '';
    protected $isDone = false;
    
    /**
     * @inheritDoc
     */
    public function isDone()
    {
        return $this->isDone;
    }
    
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->name;
    }
}
