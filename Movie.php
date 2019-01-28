<?php

// Movie.php

class Movie {

    protected $id;
    protected $title;
    protected $releaseDate;


    public function __construct($title, $releaseDate) {
        $this->setTitle($title);
        $this->setReleaseDate($releaseDate);
    }

    public function title() {
        return $this->title;
    }

    public function releaseDate() {
        return date('d/m/Y', $this->releaseDate);
    }

    public function releaseYear() {
        return date('Y', $this->releaseDate);
    }

    public function setReleaseDate($date) {

        if (int_val($date) > 1800) {

            $this->releaseDate = $date;
        }

        return $this;

    }
}


$movie = new Movie("Rocky", 191673134);