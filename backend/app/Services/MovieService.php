<?php

namespace App\Services;

use App\Repositories\MovieRepositoryInterface;
use App\Http\Dto\Movie\CreateDto;
use App\Http\Dto\Movie\FindByIdDto;
use App\Http\Dto\Movie\UpdateDto;
use App\Http\Entities\Movie\MovieList;
use App\Http\Entities\Movie\Movie;

class MovieService implements MovieServiceInterface
{
    private $movieRepository;

    public function __construct(
        MovieRepositoryInterface $movieRepository
    ) {
        $this->movieRepository = $movieRepository;
    }


    public function getAllMovies(): MovieList
    {
        return $this->movieRepository->getAllMovies();
    }

    public function createNewMovie(CreateDto $createDto): Void
    {
        $this->movieRepository->createNewMovie($createRequest);
    }

    public function getMovie(FindByIdDto $findByIdDto): Movie
    {
        return $this->movieRepository->getMovie($findByIdDto->id);
    }

    public function updateMovie(UpdateDto $updateDto): Void
    {
        $this->movieRepository->updateMovie($updateDto);
    }

    public function deleteMovie(FindByIdDto $findByIdDto): Void
    {
        $this->movieRepository->deleteMovie($findByIdDto->id);
    }
}
