<?php

namespace Adrien;

/* use Entity\Agents; */
use PDO;

class AgentsMangager{

    private $pdo;
    private $pdoStatement;
    private $contact;
    private $newAgent;
    

        
    /**
     * __construct integre à l'attribut $pdo l'obet PDO pour la connexion 
     *
     * @return 
     */
    public function __construct(){

        $this->pdo = new PDO('mysql:host=localhost;dbname=criminel','adrien','adrien');
    }
    
    /**
     * readAll lit tous les agents de la table
     *
     * @return void
     */

    public function readAll()
    {
        $this->pdoStatement = $this->pdo->query('SELECT * FROM agents');
        $this->contact = $this->pdoStatement->fetch();
        return $this->contact;
    }
    
    /**
     * lit un agent à partir d'un id
     *
     * @param  mixed $id
     * @return void
     */
    public function read($pseudo)
    {
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM agents WHERE pseudo_a = ?');
        $this->pdoStatement->execute([$pseudo]);
        $this->contact = $this->pdoStatement->fetch();
        return $this->contact;
        }

            
    /**
     * Fonction créer un nouvel agent
     *
     * @param  mixed $pseudo
     * @param  mixed $password
     * @param  mixed $accreditation
     * @return newAgent 
     */
    public function create ($pseudo,$password,$accreditation)
    {
        $this->pdoStatement = $this->pdo->prepare('INSERT INTO agents VALUES (NULL,?,?,?)');
        $this->pdoStatement->execute([$pseudo,$password,$accreditation]);

        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM agents WHERE pseudo_a = ?');
        $this->pdoStatement->execute([$pseudo]);
        $this->newAgent = $this->pdoStatement->fetch();

        if(!$this->newAgent){
            return false;
        } else {
            return $this->newAgent;
        }
    }
                
        /**
         * Met a jour un agent et return ce nouvel Agent
         *
         * @param  mixed $pseudo -> pseudo de l'agent a modifier
         * @param  mixed $newPseudo 
         * @param  mixed $newPassword
         * @param  mixed $newaccreditaion
         * @return newAgent
         */
        public function update($pseudo,$newPseudo,$newPassword,$newaccreditaion){

            $this->pdoStatement = $this->pdo->prepare('UPDATE agents SET (NULL,?,?,?) WHERE pseudo_a =?');
            $this->pdoStatement->execute([$newPseudo,$newPassword,$newaccreditaion,$pseudo]);

            $this->pdoStatement = $this->pdo->prepare('SELECT * FROM agents WHERE pseudo_a = ?');
            $this->pdoStatement->execute([$pseudo]);
            $newAgent = $this->pdoStatement->fetch();

            return $newAgent;
        }
} 