<?php
namespace Src\Traits;

trait TraiUrlParser{
    public function parseUrl(){
        return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
    }
}