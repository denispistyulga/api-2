<?php
namespace App\Models\mytest;



class PairTag extends Tag
{

//    public function render(){
//        return '<'.$this->tag.'>'.$this->value.'</'.$this->tag.'>';
//    }


    public function render($attr){
        return '<'.$this->tag.'> '.$attr.'</'.$this->tag.'>';
    }


    public static function setAttr($attr, $value){
        return $attr.'="'.$value.'" ';
    }






}







?>
