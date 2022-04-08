<?php

    class Movie{
        public $title;
        public $author;
        public int $year;

        function __construct($title, $author, $year){
            $this->title = $title;
            $this->author = $author;
            $this->year = $year;
        }

        function get_info(){
            return 
            'Il titolo è: '.$this->title.'<br>'.
            'Il regista è: '.$this->author.'<br>'.
            'La data di pubblicazione è: '.$this->year.'<br>';
        }
    }

?>