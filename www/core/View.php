<?php
declare(strict_types = 1);

namespace core;


class View
{
    private $v;
    private $data = [];

    public function __construct($v){
        $this->setView($v);
    }

    public function setView($v){
        $viewPath = "views/".$v.".php";
        if( file_exists($viewPath)){
            $this->v=$viewPath;
        }else{
            die("Attention le fichier view n'existe pas ".$viewPath);
        }
    }

    public function assign($key, $value){
        $this->data[$key]=$value;
    }
}