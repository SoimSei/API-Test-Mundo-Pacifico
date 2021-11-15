# BackEnd test Mundo Pacifico

### Requisitos para montar la API:

-   Laragon

#### Primero se debe clonar el repositorio a la carpeta (C:/laragon/wwww)

#### Se debe abrir Laragon y iniciarlo

#### Se debe presionar en base de datos y crear una conexión

#### Luego se abre la conexión y se crea una base de datos con un nombre a elegir

#### Luego se debe abrir la terminal de Laragon y escribir:

```
    cp .env.example .env
```

```
    php artisan key:generate
```

#### Esto creará un archivo .env que debemos editar con las credenciales de la base de datos:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombreBaseDeDatos
DB_USERNAME=root
DB_PASSWORD=
```

## Montar sin Laragon

### Requisitos para levantar API sin Laragon

-   PHP 7.3
-   Composer 2.1
-   Base de datos MySQLI
-   WAMP
