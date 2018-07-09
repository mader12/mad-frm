<?php
namespace Mad;

class App {

    public $test = 0;
    
    public function __construct ($config) {
       $this->test = $config;
    }

    public function run() {
        echo 1;
    }
}

