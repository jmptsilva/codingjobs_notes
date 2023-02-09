<?php

require_once 'LivingBeing.php';
require_once 'IAction.php';

class Human extends LivingBeing implements IAction
{
    // methods
    public function work()
    {
        echo 'Finally, the task is done!';
    }

    public function communicate()
    {
        echo 'I am a hard worker, he says.';
    }
}
