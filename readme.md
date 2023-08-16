# Talently Challenge

## Entregables

1. Refactorice el código en la clase VillaPeruana.php.
2. Agregue "Café" como nuevo tipo de elemento.
## Resultado

```           _     _
  /\ /\__ _| |__ | | __ _ _ __
 / //_/ _` | '_ \| |/ _` | '_ \
/ __ \ (_| | | | | | (_| | | | |
\/  \/\__,_|_| |_|_|\__,_|_| |_|

The Unit/BDD PHP Test Framework for Freedom, Truth, and Justice.

Working Directory: /project

..........................................................                       100%

Executed 58 of 58 PASS in 0.038 seconds
```
# Preguntas de conocimiento en Laravel

¿Qué paquete o estrategia utilizarías para levantar un sistema de administración rápidamente? (Autenticación y CRUDs)

Respuesta: Utilizaría Laravel Jetstream o Laravel Breeze para la autenticación y Laravel Backpack o Laravel Nova para un sistema de administración.

Una breve explicación de cómo Laravel utiliza la inyección de dependencias.

Respuesta: Laravel utiliza el Service Container para gestionar clases y resolver dependencias. Cuando un tipo de objeto es solicitado, el container crea una instancia de ese objeto e inyecta automáticamente cualquier dependencia que necesite. Esto simplifica la obtención de servicios y objetos y promueve una arquitectura de código desacoplado.

¿En qué casos utilizarías un Query Scope?

Respuesta: Los Query Scopes en Laravel son útiles para definir consultas reutilizables en un modelo. Los usaría cuando tenga consultas repetitivas o complejas que quiera encapsular bajo un método para hacer el código más legible y mantenible, como filtrar por estado activo o por una fecha específica.

¿Qué convenciones utilizas en la creación e implementación de migraciones?

Respuesta: Sigo las convenciones de Laravel:

Nombro las migraciones de manera descriptiva, como create_users_table o add_email_to_users.
Uso la estructura de comandos php artisan make:migration para crearlas.
Mantengo un orden secuencial para garantizar que se ejecuten en el orden correcto.
Siempre utilizo las funciones up() para definir cambios y down() para revertirlos, asegurando una migración reversible.
# test-talently
