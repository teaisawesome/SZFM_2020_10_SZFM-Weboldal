<?php 
/**
 * Singleton osztály az adatbázis kapcsolatnak.
 */
class Database
{
    protected $ini = "db.ini";

    protected static $con = null;

    final private function __construct(){}

    final private function __clone(){}

    final public static function con()
    {
        if( static::$con == null)
        {
            $settings = parse_ini_file(ROOT."db.ini", TRUE);

            static::$con = new PDO($settings['database']['driver'] . ':host=' . $settings['database']['host'] . ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') . ';dbname=' . $settings['database']['schema'], $settings['database']['username'], $settings['database']['password']);
        }

        return static::$con;
    }
}
?>