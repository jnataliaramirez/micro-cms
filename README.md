# Micro CMS

Este es un micro CMS que fue desarrollado durante el curso de Programación Web con Software Libre de Proyecta Empleo. En este proyecto se utilizaron los siguientes lenguajes de programación: PHP, SQL, servidores web (MAMP), HTML y CSS.

En este CMS podrás encontrar un blog con un listado de publicaciones, ver detalles de cada publicación y subir nuevas publicaciones. 

## Instalación 
Para instalar el micro CMS, necesitarás seguir los siguientes pasos:

1. Descarga el proyecto: Descarga el proyecto desde el repositorio o clonándolo en tu computadora.

2. Instalar MAMP: MAMP es un paquete de software que incluye Apache, MySQL y PHP. Descarga e instala MAMP en tu computadora.
   
3. Configura el servidor: Después de instalar MAMP, debes configurar el servidor. Abre la aplicación MAMP, y en la pestaña "Start/Stop", haz clic en "Start Servers" para iniciar el servidor. Luego, en la pestaña "Preferences", establece el puerto de Apache y MySQL, y selecciona la versión de PHP que deseas utilizar.
   
4. Configura la base de datos: En el navegador, visita la URL "localhost/phpMyAdmin" para acceder a la interfaz de administración de la base de datos. Desde aquí, crea una nueva base de datos y un usuario con permisos para acceder a la base de datos.
   
5. Configura la conexión a la base de datos: En el archivo "config.php" dentro de la carpeta "inc", modifica la configuración de conexión a la base de datos con los valores que estableciste anteriormente.
   
6. Carga la base de datos: En la misma interfaz de administración de la base de datos, selecciona la base de datos que creaste y carga el archivo SQL proporcionado en la carpeta "database".
   
7. Accede al sitio web: Abre tu navegador y visita la URL "localhost/nombre-de-la-carpeta-del-proyecto" para acceder al sitio web. Aquí podrás ver el listado de publicaciones y la opción para subir nuevas publicaciones.

## Razones de uso 
- Este proyecto fue diseñado para ser una herramienta de aprendizaje para aquellos que están empezando a programar en PHP y SQL, y puede ser utilizado como base para proyectos más grandes y complejos.
- El CMS incluye un sistema básico de autenticación de usuarios para permitir a los administradores crear, editar y eliminar publicaciones.
- El código fuente del proyecto está disponible públicamente en un repositorio de GitHub, lo que permite a los desarrolladores explorar, contribuir y mejorar el proyecto.
- El micro CMS incluye un sistema de plantillas que permite a los desarrolladores personalizar la apariencia del sitio web fácilmente.
- Este proyecto es una muestra de cómo es posible crear soluciones web dinámicas con tecnologías de software libre y de código abierto, y cómo éstas pueden ser utilizadas para crear herramientas poderosas y escalables para empresas y organizaciones de todos los tamaños.