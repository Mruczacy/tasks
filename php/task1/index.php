<?php

class Pipeline
{
    private $functions = array();

    public function make(...$functions)
    {
        $this->functions = $functions;
        return function ($arg) {
            foreach ($this->functions as $function) {
                $arg = $function($arg);
            }
            return $arg;
        };
    }
}

$pipeline = new Pipeline();
$returnedFunction = $pipeline->make(
    function ($var) {
        return $var * 3;
    },
    function ($var) {
        return $var + 1;
    },
    function ($var) {
        return $var / 2;
    }
);
echo $returnedFunction(3);
