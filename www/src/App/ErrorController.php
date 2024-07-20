<?php

class ErrorController {
    public function notFound(){
        $error_code = 404;
        $error_message = 'Page Not Found!'; 
        $error_sub_message = 'Sorry, but the page you were looking for could not be found.';

        header("HTTP/1.0 404 Not Found");
        require 'ErrorView.php';
    }
}