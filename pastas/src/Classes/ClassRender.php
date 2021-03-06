<?php
namespace Src\Classes;

class ClassRender{

    //Propriedades
    private $Dir;
    private $Title;
    private $Description;
    private $Keywords;
    
    public function getDir(){ return $this->$Dir;}
    public function setDir($Dir){ $this->Dir=$Dir;}
    public function getTitle(){ return $this->$Title;}
    public function setTitle($Title){ $this->Title=$Title;}
    public function getDescription(){ return $this->$Description;}
    public function setDescription($Description){ $this->Description=$Description;}
    public function getKeywords(){ return $this->$Keywords;}
    public function setKeywords($Keywords){ $this->Keywords=$Keywords;}

    // Método reponsável por renderizar todos o Layout
    public function renderLayout(){
        include_once (DIRREQ."app/view/Layout.php");
    }

    public function addHead(){
        if(file_exists(DIRREQ. "app/view/{$this->getDir()}/Head.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Head.php");
        }
    }

    // Adicionar caracteristica específicas no header
    public function addHeader(){
        if(file_exists(DIRREQ. "app/view/{$this->getDir()}/header.php")){
            include(DIRREQ."app/view/{$this->getDir()}/header.php");
        }
    }
    // Adiciona características específicas no main
    public function addMain(){
        if(file_exists(DIRREQ. "app/view/{$this->getDir()}/Main.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Main.php");
        }
    }

    public function addFooter(){
        if(file_exists(DIRREQ. "app/view/{$this->getDir()}/Footer.php")){
            include(DIRREQ."app/view/{$this->getDir()}/Footer.php");
        }
    }

}