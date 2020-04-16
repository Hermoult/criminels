<?php 
function getDatabaseConnection()
{

    try {
        $DB_USER = "adrien";
        $DB_PASSWORD = "adrien";
        $db = new PDO('mysql:host=localhost;dbname=criminel', $DB_USER, $DB_PASSWORD);
        return $db;
    } catch (\Throwable $th) {
        die('error sql connection');
    }
}

function getAllUsers()
{
    $con = getDatabaseConnection();
    $requete = 'SELECT * FROM agents';
    $stmt = $con->query($requete);
    $rows = $stmt->fetch();
    return $rows;
}


// creer un user
function createUser($nom, $prenom, $age, $adresse)
{
    try {
        $con = getDatabaseConnection();
        $sql = "INSERT INTO agents (nom, prenom, age, adresse) 
					VALUES ('$nom', '$prenom', '$age' ,'$adresse')";
        $con->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

//recupere un user
function readUser($id)
{
    $con = getDatabaseConnexion();
    $requete = "SELECT * from agents where id = '$id' ";
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)) {
        return $row[0];
    }
}

//met à jour le user
function updateUser($id, $nom, $prenom, $age, $adresse)
{
    try {
        $con = getDatabaseConnexion();
        $requete = "UPDATE agents set 
						nom = '$nom',
						prenom = '$prenom',
						age = '$age',
						adresse = '$adresse' 
						where id = '$id' ";
        $stmt = $con->query($requete);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

// suprime un user
function deleteUser($id)
{
    try {
        $con = getDatabaseConnexion();
        $requete = "DELETE from agents where id = '$id' ";
        $stmt = $con->query($requete);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

function getNewUser()
{
    $user['id'] = "";
    $user['nom'] = "";
    $user['prenom'] = "";
    $user['age'] = "";
    $user['adresse'] = "";
}