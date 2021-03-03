<?php
    class Diluant {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAll() {
            $this->db->query('SELECT * FROM diluants ORDER BY nom');
            $results = $this->db->resultSet();
            return $results;
        }

        public function get($id) {
            $this->db->query('SELECT * FROM diluants WHERE idDiluant=:id');
            $this->db->bind(":id", $id);
            $results = $this->db->single();
            return $results;
        }
    }
?>