namespace Practicals;

class Song {
    private $title;
    private $artist;

    // Constructor
    public function __construct($title, $artist) {
        $this->setTitle($title);
        $this->setArtist($artist);
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
}
