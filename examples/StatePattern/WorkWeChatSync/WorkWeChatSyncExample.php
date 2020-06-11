<?php
namespace Zwei\DesignPatterns\Examples\StatePattern\WorkWeChatSync;

include dirname(__DIR__)."/../../vendor/autoload.php";

use Zwei\DesignPatterns\StatePattern\Context;

class WorkWeChatSyncExample
{
    
    public function demo()
    {
        $state = new CreateWorkWeChatDepartmentState();
        $context = new Context(4);
        $context->setState($state);
        $context->doing();
        echo sprintf("progress: %s\n", $context->getProgressPercent());
    }
}

$obj = new WorkWeChatSyncExample();
$obj->demo();
