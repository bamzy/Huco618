<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/1/2016
 * Time: 2:25 PM
 */
class DBConn
{
    const HOST = 'localhost';
    const USER = 'root';
//    const PASSWORD = 'patting6solecisms&growths,';
    const PASSWORD = 'salam';
    const DATABASE = 'aghilidedb';
    //access like this
    // self::PASSWORD
    private static $con;

    public static function getConnection() {
        if ( !empty(self::$con) ) {
            return self::$con;
        }
        else {
            self::$con = new MySQLi(self::HOST, self::USER, self::PASSWORD, self::DATABASE);
            self::$con->set_charset('utf8');
            if (self::$con->connect_errno) {
                printf("Connection failed: %s\n", self::$con->connect_error);
                exit();
            }
            return self::$con;
        }
    }



}
?>