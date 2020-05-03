<?php
namespace Src\Classes;

class CLassBreadcrumb{
    use \Src\Traits\TraiUrlParser;

    // Cria os breadcrumbs do site
    public function addBreadcrumb(){
        $Contador=count($this->parseUrl());

        $ArryLink[0]='';
        echo "<a href=".DIRPARGE.">home</a> ";
        for($I=0; $I<$Contador; $I++){
            $ArryLink[0] .=$this->parseUrl()[$I].'/';
            echo "<a href=".DIRPARGE.$ArryLink[0].">".$this->parseUrl()[$I].'/';
            if($I < $Contador - 1){
                echo ">";
            }
        }
    }
}
?>