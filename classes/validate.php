<?php

class Validate{
    private $_passed = false,
    $_errors = array(),
    $_db = null;

    public function __contruct(){
        $this->_db = DB::getInstance();
    }

    public function check($sourse, $items = array()){
        foreach ($items as $item => $rules) {
           foreach($rules as $rule => $rule_value){
               echo "{$item} {$rule} must be  {$rule_value} <br>";
           }
        }
    }
}