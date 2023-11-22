<?php
namespace Practicals;

class Song {
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor
    public function __construct($title, $artist, $genre, $tempo) {
        $this->setTitle($title);
        $this->setArtist($artist);
        $this->setGenre($genre);
        $this->setTempo($tempo);
    }

    // Getter and Setter for Title
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter and Setter for Artist
    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter and Setter for Genre
    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter and Setter for Tempo
    public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}
?>
