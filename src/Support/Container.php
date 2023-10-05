<?php

namespace App\Support;

class Container{
    protected $recepies = [];
    protected $instances = [];

    public function add(string $key, \Closure $func){
        $this->recepies[$key] = $func;
    }

    public function get($what){
        if(!isset($this->instances[$what])){
            $this->instances[$what] = $this->recepies[$what]();
        }
        return $this->instances[$what];
    }
}