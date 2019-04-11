<?php
class config{
    public $css;
    public $js;
    public $page;

public function root($data){
    $root_directory=$_SERVER['DOCUMENT_ROOT'];
    return $root_directory;
}
}