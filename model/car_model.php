<?php


namespace model;
use PDO, controller;

class car_model {

    protected static $_host = 'localhost';
    protected static $_dbname = 'php_dao_little_project';
    protected static $_user = 'root';
    protected static $_password = '';
    protected static $_pdo = null;


    public static function get_cars($order = 'asc') {
        
        $query = 'SELECT * FROM cars';

        if (strtolower($order) == 'desc') { $query = "{$query} ORDER BY id DESC"; }
        
        return static::database_connect()
        ->query($query)
        ->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "controller\car_controller");
    }

    public static function model_insert_car($car, $price, $model) {
        $query = 'INSERT INTO cars (car, price, model) VALUES (?, ?, ?)';
        return static::database_connect()->prepare($query)
        ->execute([$car, $price, $model]);
    } 
    
    public static function model_get_car($id) {
        $stmt = static::database_connect()->prepare('SELECT * FROM cars WHERE id = ?');
        $stmt->execute([ $id ]);
        return current($stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'controller\car_controller'));
    } 
    
    public static function model_update_car($car, $price, $model, $id) {
        $query = 'UPDATE cars SET car = ?, price = ?, model = ? WHERE id = ?';
        return static::database_connect()->prepare($query)
        ->execute([$car, $price, $model, $id]);
    } 

    public static function database_connect() {
        if (is_null(static::$_pdo)) {
            $connect = new PDO('mysql:host='.static::$_host.';dbname='.static::$_dbname, static::$_user, static::$_password);
        }
        return $connect;
    }

    public static function model_destroy_car($id) {
        $stmt = static::database_connect()->prepare('DELETE FROM cars WHERE id = ?');
        if ($stmt->execute([ $id ])) return true;
    }


}