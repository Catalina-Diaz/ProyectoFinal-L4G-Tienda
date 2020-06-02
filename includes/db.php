<?php

include('config.php');
class DB
{

    //Datos de conexión - CV
    static $host = HOST;
    static $user = USER;
    static $password = PASSWORD;
    static $db = DB;

    //CV
    public static function getConnection()
    {

        return new mysqli(self::$host, self::$user, self::$password, self::$db);
    }
    //CV

    public static function query($sql)
    {
        $con = new mysqli(self::$host, self::$user, self::$password, self::$db);

        $result = $con->query($sql);
        $con->close();
        return $result;
    }
}
