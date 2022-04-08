<?php

    class Movie{
        public $title;
        public $author;
        public int $year;

        function __construct($title){
            $this->title = $title;
        }

        function get_title(){
            return $this->title;
        }
    }

?>