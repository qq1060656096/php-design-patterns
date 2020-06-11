<?php


namespace Zwei\DesignPatterns\StatePattern;


class Context implements ContextInterface
{
    protected $steps = 0;
    protected $step = 0;
    /**
     * @var StateInterface
     */
    protected $state;
    
    /**
     * Context constructor.
     * @param integer $steps
     */
    public function __construct($steps)
    {
        $this->steps = $steps;
    }
    
    /**
     * @inheritDoc
     */
    public function getSteps()
    {
        return $this->steps;
    }
    
    /**
     * @inheritDoc
     */
    public function getStep()
    {
        return $this->step;
    }
    
    /**
     * @return float
     */
    public function getProgressPercent()
    {
        if ($this->getStep() == 0 || $this->getSteps() == 0) {
            return 0;
        }
        $percent = floor($this->getStep()/$this->getSteps()*10000)/100;
        return number_format($percent, 2);
    }
    
    /**
     * @inheritDoc
     */
    protected function increaseStep()
    {
        $this->step ++;
    }
    
    /**
     * @inheritDoc
     */
    public function getState()
    {
        return $this->state;
    }
    
    public function setState(StateInterface $state)
    {
        $this->state = $state;
    }
    
    /**
     * @inheritDoc
     */
    public function doing()
    {
        $this->increaseStep();
        return $this->getState()->doing($this);
    }
}
