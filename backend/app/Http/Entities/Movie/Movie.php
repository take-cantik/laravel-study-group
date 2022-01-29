<?php

namespace App\Http\Entities\Movie;

class Movie
{
    protected int $id;
    protected string $title;
    protected string $imageUrl;

    public function __construct($movie)
    {
        if(isset($movie->id)) $this->id = $movie->id;
        if(isset($movie->title)) $this->title = $movie->title;
        if(isset($movie->image_url)) $this->imageUrl = $movie->image_url;
    }
}