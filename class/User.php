<?php
class User{

    private $id;
    private $pseudo_a;
    private $mot_de_passe_a;
    private $niveau_accreditation_a;
    

    // Getter and Setter
        /**
         * Get the value of id
         */ 
        public function getId()
        {
            return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
            $this->id = $id;

            return $this;
        }

        /**
         * Get the value of pseudo_a
         */ 
        public function getPseudo_a()
        {
            return $this->pseudo_a;
        }

        /**
         * Set the value of pseudo_a
         *
         * @return  self
         */ 
        public function setPseudo_a($pseudo_a)
        {
            $this->pseudo_a = $pseudo_a;

            return $this;
        }

        /**
         * Get the value of mot_de_passe_a
         */ 
        public function getMot_de_passe_a()
        {
            return $this->mot_de_passe_a;
        }

        /**
         * Set the value of mot_de_passe_a
         *
         * @return  self
         */ 
        public function setMot_de_passe_a($mot_de_passe_a)
        {
            $this->mot_de_passe_a = $mot_de_passe_a;

            return $this;
        }

        /**
         * Get the value of niveau_accreditation_a
         */ 
        public function getNiveau_accreditation_a()
        {
            return $this->niveau_accreditation_a;
        }

        /**
         * Set the value of niveau_accreditation_a
         *
         * @return  self
         */ 
        public function setNiveau_accreditation_a($niveau_accreditation_a)
        {
            $this->niveau_accreditation_a = $niveau_accreditation_a;

            return $this;
        }
}