<?php


require 'vendor/autoload.php';

use controller\car_controller;



if (isset($_GET['action'])) {

    $action = $_GET['action'];

    switch ($action) {
        
        case 'show': car_controller::show_cars(); break;
        
        case 'add': car_controller::add_car(); break;

        case 'insert': car_controller::insert_car(); break;

        case 'edit': car_controller::edit_car(); break;

        case 'update': car_controller::update_car(); break;

        case 'delete': car_controller::delete_car(); break;

        case 'destroy': car_controller::destroy_car(); break;
        
        default: car_controller::go_home();}
        
} else { car_controller::go_home(); }



