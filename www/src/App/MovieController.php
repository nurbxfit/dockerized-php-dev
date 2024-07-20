<?php

class MovieController {
    public function get(){
        require "MovieModel.php";
        $model = new MoviesModel;
        $movies = $model->getData();

        header('Content-type: application/json');
        // echo "Peace to the world!";
        echo json_encode($movies);
    }
}