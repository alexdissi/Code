<?php
include_once('model/usersModel.php');

class UsersController extends UsersModel
{
    protected $id_user;
    protected $nom;
    protected $prenom;
    protected $tel;
    protected $email;
    protected $mdp;

    public function formInsciption()
    {
        include('view/inscription.php');
    }
    public function formConnexion()
    {
        include('view/connection.php');
    }

    public function insciption()
    {

        $this->nom = trim($_POST['nom']);
        $this->prenom = trim($_POST['prenom']);
        $this->tel = trim($_POST['tel']);
        $this->email = trim($_POST['email']);
        $this->mdp = password_hash($_POST["mdp"], PASSWORD_DEFAULT);


        if ($this->nom != '' && $this->prenom != '' && $this->email != '') {
            if ($this->setUser()) {
                echo '<h2 class="title_connection">inscription OK</h2>';
            }
        } else {
            $this->formInsciption();
        }
    }


    public function connexion()
    {
// trim permet d'enelver les espaces avant et apres le mot pour eviter les erreurs
        $this->email = trim($_POST['email']);
        $this->mdp = $_POST["mdp"];


        if ($this->email != '' && $this->mdp != '') {

            $user = $this->getUserByEmail();
            if (password_verify($this->mdp, $user['mdp'])) {
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['tel'] = $user['tel'];
                $_SESSION['id_user'] = $user['id_user'];
                header('Location: index.php');
            }
        } else {
            echo "<h1>Merci de remplir le formulaire</h1>";
            $this->formConnexion();
        }
    }
public function deconnexion()
{
    $_SESSION = array();
    header('Location: index.php');
}

public function afficheModifUser()
{
    include('view/modifier.php');
}

public function UpdateInfoUser(){
    $this->nom = trim($_POST['nom']);
    $this->prenom = trim($_POST['prenom']);
    $this->tel = trim($_POST['tel']);
    $this->email = trim($_POST['email']);
    $this->id_user = @$_SESSION['id_user'];


    if ($this->nom != '' && $this->prenom != '' && $this->email != '' && $this->tel) {
        if ($this->updateUser()) {
            echo '<h2 class="title_connection">Modification OK</h2>';
        }
    } else {
        $this->afficheModifUser();
    
    }
}
}



