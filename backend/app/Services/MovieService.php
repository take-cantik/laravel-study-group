<?php

namespace App\Services;

use App\Repositories\MovieRepositoryInterface;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Database\Eloquent\Collection;

class MovieService implements MovieServiceInterface
{
    private $movie_repository;

    public function __construct(
        MovieRepositoryInterface $movie_repository
    ) {
        $this->movie_repository = $movie_repository;
    }


    public function getAllMovies(): Collection
    {
        return $this->movie_repository->getAllMovies();
    }

    public function createNewMovie(Array $createRequest): Void
    {
        $this->movie_repository->createNewMovie($createRequest);
    }

    public function getMovie(Int $id): Model
    {
        return $this->movie_repository->getMovie($id);
    }

    public function updateMovie(Array $updateRequest, Int $id): Void
    {
        $this->movie_repository->updateMovie($updateRequest);
    }

    public function deleteMovie(Int $id): Void
    {
        $this->movie_repository->deleteMovie($id);
    }
}

