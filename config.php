<?php

/*function __autoload($nomeClasse){
    
    $filename = $nomeClasse.".php";
    require_once($filename);

}*/

spl_autoload_register(function($nomeClasse){

    $filename = "PDODAO".DIRECTORY_SEPARATOR."class".DIRECTORY_SEPARATOR.$nomeClasse.".php";

    if(file_exists($filename)){
        require_once($filename);
    }
});

?>