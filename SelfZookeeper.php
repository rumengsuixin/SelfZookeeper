<?php

class SelfZookeeper extends Zookeeper
{
    public function test($data)
    {
        print_r($data);
    }
    public function two(){
        echo 2;
    }

} ?>
