
# PHP - PHPUnit

En este repositorio se guarda una practica sencilla pero completa sobre el uso de PHPUnit a la par de composer.




## ¿Como funciona todo esto?

Recuerda que tenemos que tener instalado composer en nuestro sistema operativo. Utilizando composer creamos un nuevo proyecto con:

```bash
   > composer init
```

Posterior usamos una configuracion de autoload con psr-4, esto dentro de nuestro composer.json:

```JSON
"autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
```

La carpeta src se define dentro del namespace App, para poder incluir de forma automatica, dentro de la carga de clases que composer nos ayuda a parametrizar dentro de nuestro codigo.

## Carpetas importantes

Recuerda que debemos de tener en nuestro proyecto dos carpetas, SRC y TEST
Dentro de SRC tenemos nuestras clases las cuales tienen las funciones, estructuras, de nuestro programa principal, dentro de test tenemos la definicion para que PHPUnit pueda encontrar aquellas funciones que quiere validar cuando ejecutamos las pruebas.

Todas las funciones y clases que queremos usar para Test deben llevar el nombre de test_name


## Running the Tests!!

Para poder ejecutar las pruebas recuerda que en windows usamos:

```bash
  php vendor/phpunit/phpunit/phpunit
```


## Autor

- [@AztFireSpell](https://www.github.com/aztfirespell)

