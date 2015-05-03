<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'vra_admin');
    define('DB_PASSWORD', 'vra_admin');
    define('DB_DATABASE', 'vra_database');

    class DB_con {
        function __construct() {
            $connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die('Oops connection error -> ' . mysql_error());
            mysql_select_db(DB_DATABASE, $connection) or die('Database error -> ' . mysql_error());
        }
    }
?>