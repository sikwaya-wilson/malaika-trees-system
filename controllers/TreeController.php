<?php
require_once __DIR__ . '/../models/Tree.php';

class TreeController {
    
    public function store() {
        $tree = new Tree();
        $tree->add($_POST, $_FILES);
    }
}
?>
