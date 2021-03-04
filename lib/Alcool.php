<?php
    class Alcool {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAll() {
            $this->db->query('SELECT * FROM alcools ORDER BY nom');
            $results = $this->db->resultSet();
            return $results;
        }

        public function get($id) {
            $this->db->query('SELECT * FROM alcools WHERE idAlcool=:id');
            $this->db->bind(":id", $id);
            $results = $this->db->single();
            return $results;
        }
    }
?>