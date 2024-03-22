<?php

class Database {
    public static function connect() {
        $db = new mysqli('localhost', 'user', 'password', 'table');
        $db->query("SET NAMES 'UTF8'");

        return $db;
    }
}
