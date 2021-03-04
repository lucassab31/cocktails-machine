<?php
    class Cocktail {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAll() {
            $this->db->query('SELECT * FROM cocktails ORDER BY nom');
            $results = $this->db->resultSet();
            return $results;
        }

        public function get($id) {
            $this->db->query("SELECT * FROM cocktails WHERE idCocktail=$id");
            $results = $this->db->single();
            return $results;
        }
    }
?>