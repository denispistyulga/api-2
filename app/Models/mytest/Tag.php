<?php
namespace App\Models\mytest;


class Tag
{

    protected $tag;
    protected $attr;
    protected $value;

    public function __construct($tag)
    {
        $this->tag=$tag;
    }


    public  function setAttr(){
        echo $this->attr.'="'.$this->value.'" ';
    }


//    public function setAttr($attr, $value){
//        return $this->attr.'="'.$this->value.'" ';
//    }
//    public function setAttr(){
//        return $this->attr.'="'.$this->value.'" ';
//    }

    public function getTag(){
        return $this->tag;
    }

//    public function getAttr(){
//        return $this->attr.'="'.$this->value.'" ';
//    }




}










?>
