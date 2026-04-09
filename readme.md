Nombre del proyecte:

    CRUD

Descripcio breu:

    Hem fet una pagina web amb php y com a base de dades phpmyadmin, la funcionalitat es que es una pagina que guarda videojocs, edita o elimina.

Estructura de la base de dades (sentència CREATE TABLE):

    CREATE TABLE VIDEOJUEGOS (
        id          INT         NOT NULL AUTO_INCREMENT
        nombre      Varchar(150)    NOT NULL
        descripcion TEXT            NOT NULL    
        PRIMARY KEY (id)
    );