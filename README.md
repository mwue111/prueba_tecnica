# Proyecto de evaluación de habilidades de desarrollo web
### Sistema de gestión de programadores de riego

##### Stack tecnológico empleado
- Laravel 10 + Docker
- MySQL
- Blade
- CSS
- Tailwind

#### Estructura de la base de datos
El diagrama entidad-relación de la base de datos de la aplicación es la siguiente:

![Base de datos](/irrigation-management/public/assets/images/Irrigation.jpg)

##### Credenciales

La base de datos creada en MySQL tiene las siguientes credenciales: 
- Nombre de la base de datos: irrigation_management
- Usuario: sail
- Contraseña: password

##### Despliegue del proyecto
Para desplegar el proyecto en local, es necesario ejecutar el comando 

```sh
git clone <link del repositorio>
cd <directorio en el que se guarde el proyecto>
vendor/bin/sail up -d
```

Para migrar la base de datos, es necesario ejecutar el comando

```sh
vendor/bin/sail artisan migrate
```

En caso de ejecutar la aplicación con Docker, se puede acceder al contenedor y migrar la base de datos ejecutando:

```sh
vendor/bin/sail up -d
docker ps
docker exec -it <ID del contenedor, se puede obtener con el comando docker ps> bash
php artisan migrate
```

Tras esto, la aplicación puede verse en **localhost**.

La aplicación permite la creación de un usuario mediante correo electrónico y contraseña. En caso de no querer crear uno, al ejecutar las migraciones se almacenará en la tabla de clientes un usuario con las siguientes credenciales:

- email: admin@admin.com
- contraseña: 12345678
