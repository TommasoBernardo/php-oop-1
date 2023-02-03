<?php
class Movie
{
    public $title;
    public $releaseyear;
    public $director;
    public $cast;
    public $duration;
    public $gender;

    function __construct($_title, $_releaseyear, $_director, $_cast, $_duration, $_gender)
    {
        $this->title = $_title;
        $this->releaseyear = $_releaseyear;
        $this->director = $_director;
        $this->cast = $_cast;
        $this->duration = $_duration;
        $this->gender = $_gender;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function getReleaseYear()
    {
        return $this->releaseyear;
    }
    public function getDirector()
    {
        return $this->director;
    }
    public function getCast()
    {
        return $this->cast;
    }
    public function getDuration()
    {
        return $this->duration;
    }
    public function getGender()
    {
        return $this->gender;
    }
}
