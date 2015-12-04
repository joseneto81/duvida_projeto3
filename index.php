<?php

//require_once ("src/JCN/PessoaContato.php");
//require_once ("src/JCN/Types/Pessoa.php");


//com este bloco NÃO funciona
define("CLASS_DIR","src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


/*
//com este bloco funciona!!
define('CLASS_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function($className) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = CLASS_DIR . $path . '.php';
    if (is_file($file)) {
        require_once($file);
    }
});
*/
$pessoa = new JCN\Pessoa\Types\Pessoa('Maria',"mariazinha@gmail.com","(22) 995959595");

print "<pre>";print_r($pessoa);print "</pre>";

?>