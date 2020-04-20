<?php

namespace Adrien;


class AgentsMangager{

    private $pdo;

    const ADDRESS='mysql:host=localhost;dbname=criminel';
    const USER='adrien';
    const PASS='adrien';
    

        
    /**
     * __construct integre à l'attribut $pdo l'obet PDO pour la connexion 
     *
     * @return 
     */
    public function __construct(){

        $this->pdo = new \PDO(self::ADDRESS,self::USER,self::PASS);
    }
    
    /**
     * readAll lit tous les agents de la table
     *
     * @return void
     */

    public function readAll()
    {
        $pdoStatement = $this->pdo->query('SELECT * FROM agents');
        $contact = $pdoStatement->fetchAll();
        return $contact;
    }
    
    /**
     * lit un agent à partir d'un id
     *
     * @param  mixed $id
     * @return void
     */
    public function read($pseudo)
    {
        $pdoStatement = $this->pdo->prepare('SELECT * FROM agents WHERE pseudo_a = ?');
        $pdoStatement->execute([$pseudo]);
        $contact = $pdoStatement->fetch();
        return $contact;
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
        $pdoStatement = $this->pdo->prepare('INSERT INTO agents VALUES (NULL,?,?,?)');
        $pdoStatement->execute([$pseudo,$password,$accreditation]);

        $pdoStatement = $this->pdo->prepare('SELECT * FROM agents WHERE pseudo_a = ?');
        $pdoStatement->execute([$pseudo]);
        $newAgent = $pdoStatement->fetch();

        if(!$newAgent){
            return false;
        } else {
            return $newAgent;
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

            $pdoStatement = $this->pdo->prepare('UPDATE agents SET (NULL,?,?,?) WHERE pseudo_a =?');
            $pdoStatement->execute([$newPseudo,$newPassword,$newaccreditaion,$pseudo]);

            $pdoStatement = $this->pdo->prepare('SELECT * FROM agents WHERE pseudo_a = ?');
            $pdoStatement->execute([$pseudo]);
            $newAgent = $pdoStatement->fetch();

            return $newAgent;
        }
} 