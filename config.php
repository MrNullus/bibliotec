<?php   
define("DB_SERVIDOR", "localhost");
define("DB_USUARIO", "root");
define("DB_SENHA", "");
define("DB_NOME", "bdbiblioteca");

function url_base() {
    return 'http://localhost/bibliotec';
}

require 'db/db.php';