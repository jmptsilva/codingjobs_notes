<?php

require_once 'LivingBeing.php';

class Human extends LivingBeing
{
    // methods
    public function work()
    {
        echo 'Finally, the task is done!';
    }
    public function talk()
    {
        echo 'I am a hard worker, says everyone.';
    }
}
