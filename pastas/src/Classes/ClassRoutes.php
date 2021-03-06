<?php
namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes{

    use TraitUrlParser;

    private $Rota;

    public function getRota(){
        $Url=$this->parseUrl();
        $I=$Url[0];

        $this-> Rota =array(
            ""=>"ControllerHome",
            "Home"=>"ControllerHome",
            "Sitemap"=>"ControllerSitemap",
            "Carros"=>"ControllerCarros",
            "Contato"=>"ControllerContato"
        );
        if(array_key_exists($I,$this-> Rota)){
            if(file_exists(DIRREQ."app/controller/{$this-> Rota[$I]}.php")){
                return $this-> Rota[$I];
            }else{
                return "ControllerHome";
            }
        }else{
            return "ControllerHome";
        }
    }
}