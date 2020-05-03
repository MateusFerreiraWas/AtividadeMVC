<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{

    public function  __construct() {
        $this->setTitle("Página Incicial");
        $this->setDescription("Esse é o nosso site de MVC");
        $this->setKeywords("MVC completo, curso de MVC");
        $this->setDir("home/");
        $this->renderLayout();
      }
}