<?php
class VueModel extends CI_Model{
    public function beautify($value){
        return "<pre>".print_r($value)."</pre>";
    }
}