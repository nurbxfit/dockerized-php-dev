<?php

class HomeController {
    public function get(){
        $message = "Peace to the world!";
        require 'HomeView.php';
    }
}