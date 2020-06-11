<?php
namespace Zwei\DesignPatterns\StatePattern;


interface ContextInterface
{
    /**
     * @return integer
     */
    public function getSteps();
    
    /**
     * @return integer
     */
    public function getStep();
    
    /**
     * @return float
     */
    public function getProgressPercent();
    
    /**
     * @return StateInterface
     */
    public function getState();
    
    /**
     * @param StateInterface $state
     * 
     */
    public function setState(StateInterface $state);
    
    /**
     * @return mixed
     * @see StateInterface::doing()
     */
    public function doing();
}
