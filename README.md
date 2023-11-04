# Proyecto RolePlayingGame

Este proyecto consiste en la creación de una base de datos y una aplicación web para un juego de rol. A continuación, se detallan los pasos para configurar y utilizar el proyecto.

## Creación de la base de datos
- Primero, debes crear una base de datos llamada rolegame. 

## Acciones

### Sin inicio de sesión
- Darse de Alta como usuario
- Ver Detalles de la criaturas

### Con inicio de sesión
- Crear una criatura
- Modificar criatura
- Eliminar criatura

## Estructura del proyecto 
![image](https://github.com/MohammedChoudna0/Role-Playing-Game-MVC/assets/117014262/a93a5ce1-4960-4bb4-93c9-16a9d635c5aa)

# Estructura de Carpetas de la Aplicación

- **app:** Esta es la carpeta principal de la aplicación. Contiene todas las carpetas y archivos necesarios para el funcionamiento de la aplicación.

- **controllers:** Esta carpeta contiene los controladores para las entidades `creature` y `user`.

- **models:** Esta carpeta contiene los modelos que representan las entidades de la aplicación. La subcarpeta `validations` contiene scripts de validación para los datos de las entidades.

- **private/views:** Esta carpeta contiene las vistas privadas que solo pueden ser accedidas por usuarios autenticados. La subcarpeta `creature` puede contiene las vistas específicas para las criaturas (Agregar , eliminar y actualizar).

- **public/views:** Esta carpeta contiene las vistas públicas que pueden ser accedidas por cualquier usuario. La subcarpeta `user` contiene vistas específicas para los usuarios (Login y Sign Up).

- **assets:** Esta carpeta contiene los recursos estáticos utilizados en la aplicación, como imágenes.

- **persistence:** Esta carpeta contiene los scripts y configuraciones relacionados con la persistencia de datos (conf , DAO y script SQL para crear la base de datos).

- **bd:** Esta carpeta contiene scripts de base de datos.

- **conf:** Esta carpeta contiene archivos de configuración para la base de datos.

- **DAO:** Esta carpeta contiene los Objetos de Acceso a Datos (DAO) para las entidades de la aplicación.

- **utils:** Esta carpeta puede contiene scripts de utilidad que se utilizan en toda la aplicación.

## Diagrama de secuencia

![SecDiagram drawio (1)](https://github.com/MohammedChoudna0/Role-Playing-Game-MVC/assets/117014262/737a5466-8133-4663-a921-be7ae7c35f7f)
