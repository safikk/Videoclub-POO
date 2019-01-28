<?php

// Category.php

class Category {

    protected $id;
    protected $title;
    protected $description;


    public function __construct($title, $description) {
        $this->setTitle($title);
        $this->setDescription($description);
    }

    public function title() {
        return $this->title;
    }

    public function description() {
        return description($this->description);
    }

}


$movie = new Movie("Rocky", 191673134);