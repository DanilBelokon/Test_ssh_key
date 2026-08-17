<?php
class Worker
{
    public function run(){
        echo "run";
    }
}

$worker = new Worker();
$worker->run();