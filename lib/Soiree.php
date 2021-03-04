<?php
    class Soiree {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAll() {
            $this->db->query('SELECT * FROM soirees ORDER BY dateSoiree DESC');
            $results = $this->db->resultSet();
            return $results;
        }

        public function get($id) {
            $this->db->query("SELECT * FROM soirees WHERE idSoiree=$id");
            $results = $this->db->single();
            return $results;
        }
    }
?>