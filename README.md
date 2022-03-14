# docker-php

Ana Torrecilla Martín

This repository is the last essay of IWA's class.
----------------------------------------------------------------------------------------

PASOS REALIZADOS:

  - He creado el docker-compose con la configuración para levantar un LAMP con tres contenedores: Apache, mySQL y PhpMyAdmin.
  - En el contenedor de Apache encontraremos un volumen a la zona de producción /var/www/html y otro para los logs del servicio.
  - En el contenedor de mySQL encontraremos un volumen para añadir el fichero init.sql y otro para la copia de seguridad.
  - Los puertos usados son:
                    - Apache: 8001
                    - mySQL: 3306
                    - PhpMyAdmin: 8081
                    
  - Las tareas realizadas en el Jenkinsfile son:
                    - Descargar el repositorio de GitHub con git clone.
                    - Desplegar el contenedor con Docker Compose.
                    - Copiar los ficheros PHP al volumen web/ mapeado a la ruta de producción.
                    - Añadir las tablas de la base de datos con mysqldump y docker exec.
                    - Actualizar las librerías de PHP con Composer.


FIN :)
