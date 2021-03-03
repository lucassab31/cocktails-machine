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

        public function getTuyaux($id) {
            $tuyaux = array(1 => true, 2 => true, 3 => true, 4 => true, 5 => true, 6 => true, 7 => true, 8 => true);
            $this->db->query("SELECT tuyau FROM composea WHERE idSoiree=$id");
            $results = $this->db->resultSet();
            foreach ($results as $result) {
                $tuyaux[intval($result->tuyau)] = false;
            }
            $this->db->query("SELECT tuyau FROM composed WHERE idSoiree=$id");
            $results = $this->db->resultSet();
            foreach ($results as $result) {
                $tuyaux[intval($result->tuyau)] = false;
            }
            return $tuyaux;
        }

        public function getCocktails($id) {
            $this->db->query("SELECT DISTINCT cocktails.*
                                FROM
                                    cocktails,
                                    alcools,
                                    diluants,
                                    composea,
                                    composed,
                                    alcooliser,
                                    diluer
                                WHERE cocktails.idCocktail = alcooliser.idCocktail
                                    AND cocktails.idCocktail = diluer.idCocktail
                                    AND composea.idAlcool = alcooliser.idAlcool
                                    AND composed.idDiluant = diluer.idDiluant
                                    AND composed.idSoiree = $id
                                    AND composea.idSoiree = $id");
            $results = $this->db->resultSet();
            return $results;
        }
        public function getAlcools($id) {
            $this->db->query("SELECT alcools.* FROM alcools, composea WHERE composea.idSoiree=$id AND composea.idAlcool = alcools.idAlcool");
            $results = $this->db->resultSet();
            return $results;
        }
        public function getDiluants($id) {
            $this->db->query("SELECT diluants.* FROM diluants, composed WHERE composed.idSoiree=$id AND composed.idDiluant = diluants.idDiluant");
            $results = $this->db->resultSet();
            return $results;
        }

        public function insertA($data) {
            $this->db->query("INSERT INTO composea (idAlcool, idSoiree, tuyau, volume) VALUES (:idA, :idS, :tuyau, :volume)");
            $this->db->bind(':idA', $data['idA']);
            $this->db->bind(':idS', $data['idS']);
            $this->db->bind(':tuyau', $data['tuyau']);
            $this->db->bind(':volume', $data['volume']);
            return $this->db->execute();
        }
        public function insertD($data) {
            $this->db->query("INSERT INTO composed (idDiluant, idSoiree, tuyau, volume) VALUES (:idD, :idS, :tuyau, :volume)");
            $this->db->bind(':idD', $data['idD']);
            $this->db->bind(':idS', $data['idS']);
            $this->db->bind(':tuyau', $data['tuyau']);
            $this->db->bind(':volume', $data['volume']);
            return $this->db->execute();
        }
    }
?>