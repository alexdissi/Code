<?php
include_once('bdd.php');

class UsersModel
{
    private $db;
    public function __construct()
    {
        $this->db = Bdd::connexion();
    }

    public function setUser()
    {
        $query = $this->db->prepare("INSERT INTO users(nom,prenom,tel,email,mdp) VALUES(?,?,?,?,?)");
        return $query->execute([$this->nom, $this->prenom, $this->tel, $this->email, $this->mdp]);
    }

    public function getUsers()
    {
    }

    public function getUserByEmail()
    {
        return $this->db->query("SELECT * FROM users WHERE email='{$this->email}'")->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserById()
    {
    }

    public function updateUser()
    {
        return  $this->db->query("UPDATE users SET nom='{$this->nom}', prenom='{$this->prenom}', tel='{$this->tel}', email='{$this->email}' WHERE id_user='{$this->id_user}'");
    }

    public function deleteUser()
    {
    }
}
