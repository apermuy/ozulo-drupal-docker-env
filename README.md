# Entorno desarrollo Drupal & Docker para www.comunidadeozulo.org

Pasos para configurar y ejecutar entorno.

* Descargar una copia de la base de datos MySQL en /data/sql , por ejemplo en el fichero init.sql .

* Descargar una copia de los ficheros del código fuente de Drupal en /volumes/ozulo-drupal10. 

* Configurar variables de entorno en el fichero .env

**Iniciar entorno:**

```docker compose up -d```

Despues de la ejecución de este comando la copia del sitio está disponible en

```http://127.0.0.1:8011```

**Detener entorno:**

```docker compose stop; docker compose rm -f```

