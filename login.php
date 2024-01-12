<?php
session_start();
$errorEmail = $errorPassword = '';

class Database {
    private $host = "localhost";
    private $utilisateur = "root";
    private $mdp = "";
    private $nomBase = "PILI, ROBERT, KAMDEM, TEMMAR -ACF2L";
    private $connexion;

    public function getConnexion() {
        return $this->connexion;
    }    

    public function connecter()
    {
        $this->connexion = new mysqli($this->host, $this->utilisateur, $this->mdp, $this->nomBase);

        if ($this->connexion->connect_error) {
            die("Échec de la connexion à la base de données : " . $this->connexion->connect_error);
        }
    }

    public function deconnecter()
    {
        $this->connexion->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baseDeDonnees = new Database();
    $baseDeDonnees->connecter();

    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // Vérifier les informations de connexion
    $requete = $baseDeDonnees->getConnexion()->prepare("SELECT * FROM `pili,robert,kamdem,temmar - adhérent` WHERE Email = ?");
    $requete->bind_param("s", $email);
    $requete->execute();
    $resultat = $requete->get_result();

    if ($resultat->num_rows > 0) {
        $utilisateur = $resultat->fetch_assoc();

        if (password_verify($mdp, $utilisateur['mdp'])) {
            $_SESSION['utilisateur'] = $utilisateur;

            // Vérifier le rôle
            if ($utilisateur['role'] === 'client') {
                header("Location: reservationclient.php?email=$email");
                exit();
            } elseif ($utilisateur['role'] === 'admin') {
                header("Location: reservationadmin.php?email=$email");
                exit();
            }
        } else {
            $errorPassword = "Mot de passe incorrect";
            header("Location: connexion.php?errorPassword=$errorPassword");
            exit();
        }
    } else {
        $errorEmail = "Adresse email incorrecte";
        header("Location: connexion.php?errorEmail=$errorEmail");
        exit();
    }

    $baseDeDonnees->deconnecter();
}
?>
