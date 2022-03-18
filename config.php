<?php

/*function __autoload($nomeClasse){
    
    $filename = $nomeClasse.".php";
    require_once($filename);

}*/

spl_autoload_register(function($nomeClasse){

    $filename = $nomeClasse.".php";

    if(file_exists($filename)){
        require_once($filename);
    }
});

?>