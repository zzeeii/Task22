<?php
include 'FetchTrait.php';
require_once 'Database.php';

class Post {
    use FetchTrait;
    private $db;
    public $id;
    public $title;
    public $content;
    public $author;
    public $created_at;
    public $updated_at;

    public function __construct() {
        $this->db = new Database();
    }

    public function create() {
        $query = "INSERT INTO posts (title, content, author) VALUES (?, ?, ?)";
        $this->db->execute($query, [$this->title, $this->content, $this->author]);
    }

    public function read($id) {
        $query = "SELECT * FROM posts WHERE id = ?";
        $result = $this->db->fetch($query, [$id]);

        if ($result) {
            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->content = $result['content'];
            $this->author = $result['author'];
            $this->created_at = $result['created_at'];
            $this->updated_at = $result['updated_at'];
        }
        return $result;
    }

    public function update($id) {
        $query = "UPDATE posts SET title = ?, content = ?, author = ? WHERE id = ?";
        $this->db->execute($query, [$this->title, $this->content, $this->author, $id]);
    }

    public function delete($id) {
        $query = "DELETE FROM posts WHERE id = ?";
        $this->db->execute($query, [$id]);
    }

    public function listAll() {
        $query = "SELECT * FROM posts ORDER BY created_at DESC";
        return $this->db->fetchAll($query);
    }
}

?>
