<?php
$PastaInterna="";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'], -1)=='/'){
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}

define('DIRIMG',DIRPAGE."public/img/");

define('HOST', "localhost");
define('DB', "sistema");
define('USER', "root");
define('PASS', "");