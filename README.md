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
└───Role-Playing-Game-MVC
    ├───app
    │   ├───controllers
    │   │   ├───creature
    │   │   └───user
    │   ├───models
    │   │   └───validations
    │   ├───private
    │   │   └───views
    │   │       └───creature
    │   └───public
    │       └───views
    │           └───user
    ├───assets
    │   └───img
    ├───lib
    ├───persistence
    │   ├───bd
    │   ├───conf
    │   └───DAO
    └───utils
# Estructura de Carpetas de la Aplicación

- **app:** Esta es la carpeta principal de la aplicación. Contiene todas las carpetas y archivos necesarios para el funcionamiento de la aplicación.

- **controllers:** Esta carpeta contiene los controladores para las entidades `creature` y `user`.

- **models:** Esta carpeta contiene los modelos que representan las entidades de la aplicación. La subcarpeta `validations` puede contener scripts de validación para los datos de las entidades.

- **private/views:** Esta carpeta contiene las vistas privadas que solo pueden ser accedidas por usuarios autenticados. La subcarpeta `creature` puede contener vistas específicas para las criaturas.

- **public/views:** Esta carpeta contiene las vistas públicas que pueden ser accedidas por cualquier usuario. La subcarpeta `user` puede contener vistas específicas para los usuarios.

- **assets:** Esta carpeta contiene los recursos estáticos utilizados en la aplicación, como imágenes, scripts y hojas de estilo. La subcarpeta `img` puede contener las imágenes utilizadas en la aplicación.

- **lib:** Esta carpeta puede contener bibliotecas y dependencias utilizadas en la aplicación.

- **persistence:** Esta carpeta contiene los scripts y configuraciones relacionados con la persistencia de datos.

- **bd:** Esta carpeta puede contener scripts de base de datos.

- **conf:** Esta carpeta puede contener archivos de configuración para la base de datos.

- **DAO:** Esta carpeta puede contener los Objetos de Acceso a Datos (DAO) para las entidades de la aplicación.

- **utils:** Esta carpeta puede contener scripts de utilidad que se utilizan en toda la aplicación.

