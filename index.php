<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('alondigu@gmail.com'));

if(!App\Validate::password('123456')){
    echo "<h1>La contraseña no es valida</h1>";
}else{
    echo "<h1>La contraseña es valida</h1>";
}

