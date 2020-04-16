<?php

namespace Adrien;

use Entity\Agents;
use PDO;

class AgentsMangager{

    private $pdo;
    private $pdoStatement;
    private $contact;

    private $agents;
    private $condamnations;
    private $recherches;
    private $temoignages;

        
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
        $this->pdoStatement = $this->pdo->prepare('SELECT * FROM agents where pseudo_a = ?');
        $this->pdoStatement->execute([$pseudo]);
        $this->contact = $this->pdoStatement->fetch();
        return $this->contact;
        }
    


    public function update(Agents $agents){    }

    public function delete(Agents $agents){     }

    public function create (Agents $agents){
        $this->pdoStatement = $this->pdo->prepare('INSERT');
        }

} 