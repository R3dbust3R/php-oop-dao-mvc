<?php


namespace controller;


use model\car_model;

require 'vendor/autoload.php';


class car_controller extends car_model {

    private $id;
    private $car;
    private $price;
    private $model;

    public function __construct($car = null, $price = null, $model = null) {
        $this->car = $car;
        $this->price = $price;
        $this->model = $model;
    }

    public function get_id() { return $this->id; }
    public function get_car() { return $this->car; }
    public function get_price() { return $this->price; }
    public function get_model() { return $this->model; }

    public function _print_data() {
        echo 'Car #ID: ' . $this->id . '<br>';
        echo 'Car name: ' . $this->car . '<br>';
        echo 'Price: ' . $this->price . '<br>';
        echo 'Model: ' . $this->model . '<br>';
    }

    public function set_car($car) { $this->car = $car; }
    public function set_price($price) { $this->price = $price; }
    public function set_model($model) { $this->model = $model; }

    public static function go_home() {
        header('Location: index.php?action=show');
    } 

    public static function show_cars() {
        $page_title = 'cars list';
        $cars = static::get_cars('DESC');
        require 'view/show-cars.php';
    }
    
    public static function add_car() {
        $page_title = 'add a new car';
        require 'view/add-car.php';
    }

    public static function insert_car() {
        if (! empty($_POST) && isset ($_POST['car'])) {
            $car = $_POST['car'];
            $price = $_POST['price'];
            $model = $_POST['model'];
            if (static::model_insert_car($car, $price, $model)) {
                header('Location: index.php?action=show&inserted');
            } else {
                header('Location: index.php?action=show&not-inserted');
            }
        } else {
            static::go_home();
        }
    }
    
    public static function edit_car() {
        if (isset ($_GET['id'])) {
            $page_title = 'edit car';
            $car = static::model_get_car($_GET['id']);
            require 'view/edit-car.php';
        } else {
            static::go_home();
        }
    }

    public static function update_car() {
        if (! empty($_POST) && isset ($_POST['car'])) {
            $car = $_POST['car'];
            $price = $_POST['price'];
            $model = $_POST['model'];
            $id = $_POST['id'];

            if (static::model_update_car($car, $price, $model, $id)) {
                header('Location: index.php?action=show&update');
            } else {
                header('Location: index.php?action=show&not-update');
            }
        } else {
            static::go_home();
        }
    }

    public static function delete_car() {
        if (isset ($_GET['id'])) {
            $page_title = 'delete car';
            $car = static::model_get_car($_GET['id']);
            require 'view/delete-car.php';
        } else {
            static::go_home();
        }
    }

    public static function destroy_car() {
        if (isset ($_GET['id'])) {
            if (static::model_destroy_car($_GET['id'])) {
                header('Location: index.php?action=show&deleted');
            } else {
                header('Location: index.php?action=show&not-deleted');
            }
        } else {
            static::go_home();
        }
    }

}