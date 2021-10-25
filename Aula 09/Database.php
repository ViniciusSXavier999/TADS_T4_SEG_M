<?php /** @noinspection PhpMissingFieldTypeInspection */

/**
 * Classe de Conexão com Bancos de Dados MySQL
 * PHP Doc: https://www.php.net/manual/pt_BR/pdo.setattribute.php
 * @author Edson Melo de Souza
 * @since 2018
 *
 */
class Database
{
    private static $db;
    private static $db_type = 'mysql';
    private static $db_hostname = 'localhost'; # ou endereço fornecido pelo provedor
    private static $db_name = '';
    private static $db_user = '';
    private static $db_password = '';

    function __construct()
    {
        self::$db = new PDO(
            self::$db_type . ":host=" .
            self::$db_hostname . ";dbname=" .
            self::$db_name,
            self::$db_user,
            self::$db_password
        );
        # Configurações do PDO (Vide documentação)
        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db->setAttribute(PDO::ATTR_PERSISTENT, FALSE);
        self::$db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf-8");
        self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        self::$db->exec("SET NAMES utf8");
    }


    /**
     * Método que realiza a conexão com o banco de dados
     * Design Pattern: Singleton
     * @return PDO
     */
    public static function connection(): PDO
    {
        # Se a conexão não existir, cria e retorna a conexão.
        # Senão, retorna uma conexão existente
        if (!self::$db) {
            new database();
        }
        return self::$db;
    }
}