<?php
namespace Zwei\DesignPatterns\StatePattern;


interface StateInterface
{
    /**
     * @return bool
     */
    public function isDone();
    
    /**
     * @return string
     */
    public function getName();
    
    /**
     * @param ContextInterface $context
     * @return mixed
     */
    public function doing(ContextInterface $context);
}
