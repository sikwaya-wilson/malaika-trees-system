<?php
class Tree {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }
}
?>
