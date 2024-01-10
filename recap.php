<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
    <title>Récapitulatif des informations</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../assets/logo.png" alt="Logo" width="42" height="34"
                            class="d-inline-block align-text-top" />
                    </a>
                </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Qui sommes-nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nos activités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tarifs</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="txt">
    <p id="title">Merci de vous être inscrit en tant qu'adhérent !</p>
    <p id="subtitle">Nous sommes ravis de vous accueillir parmi nous. Voici un récapitulatif de vos informations :</p>
    </div>
<div class="container mt-6">
    <div class="col-md-6 mx-auto">
    <form>
    <?php
class Database
{
    private $host = "localhost";
    private $utilisateur = "root";
    private $mdp = "";
    private $nomBase = "PILI, ROBERT, KAMDEM, TEMMAR -ACF2L";
    private $connexion;
    
    public function connecter()
    {
        $this->connexion = new mysqli($this->host, $this->utilisateur, $this->mdp, $this->nomBase);

        if ($this->connexion->connect_error) {
            die("Échec de la connexion à la base de données : " . $this->connexion->connect_error);
        }
    }

    public function enregistrerAdherent($civilite, $nom, $prenom, $datenaissance, $adresse, $codePostal, $ville, $situfamiliale, $datesitufamiliale, $email, $tel, $enfantsmineurs, $enfantsmajeurs, $parentsCharge, $causeduhandicap, $activitesString)
    {
        $requete = $this->connexion->prepare("INSERT INTO `pili,robert,kamdem,temmar - adhérent` (Civilité, Nom, Prénom, Datenaissance, Adresse, Codepostale, Ville, Situationfamiliale, Datedébut, Email, Telephone, Nbchargesenfantsmin, Nbchargesenfantsmaj, Nbchargesparents, Causehandicap, Activitésdemandées) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($requete === false) {
            die("Erreur préparation de la requête : " . $this->connexion->error);
        }
        
        $requete->bind_param("ssssssssssssssss", $civilite, $nom, $prenom, $datenaissance, $adresse, $codePostal, $ville, $situfamiliale, $datesitufamiliale, $email, $tel, $enfantsmineurs, $enfantsmajeurs, $parentsCharge, $causeduhandicap, $activitesString);
        
        if (!$requete->execute()) {
            $erreur = $this->connexion->error;
            $erreurInfo = $requete->errorInfo(); // Ajout de cette ligne pour obtenir des informations détaillées
            die("Erreur lors de l'exécution de la requête : " . $erreur . " | " . implode(", ", $erreurInfo));
        }        
        
        $requete->close();
    }

    public function deconnecter()
    {
        $this->connexion->close();
    }
    public function afficherRecap() {
        $civilite = $_POST["civilite"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $datenaissance = $_POST['datenaissance'];
        $adresse = $_POST['adresse'];
        $codePostal = $_POST['codePostal'];
        $ville = $_POST['ville'];
        $situfamiliale = $_POST['situfamiliale'];
        $datesitufamiliale = $_POST['datesitufamiliale'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $enfantsmineurs = $_POST['enfantsMineurs'];
        $enfantsmajeurs = $_POST['enfantsMajeurs'];
        $parentsCharge = $_POST['parentsCharge'];
        $causeduhandicap = $_POST['causeduhandicap'];
        $activitesArray = $_POST['activites'];
        $activitesString = implode(", ", $activitesArray);

        echo "<form style='background-color:#567CBC; padding: 26px; margin: 12px; border-radius: 24px; color: white; width: 34em;'>";
        echo "<p style='color: white' class='labelimp'>Civilité : " . $civilite . "</p>";
        echo "<p style='color: white' class='labelimp'>Nom : " . $nom. "</p>";
        echo "<p style='color: white' class='labelimp'>Prénom : " . $prenom. "</p>";
        echo "<p style='color: white' class='labelimp'>Date de naissance : " . $datenaissance. "</p>";
        echo "<p style='color: white' class='labelimp'>Adresse : " . $adresse. "</p>";
        echo "<p style='color: white' class='labelimp'>Code Postal : " . $codePostal . "</p>";
        echo "<p style='color: white' class='labelimp'>Ville : " . $ville. "</p>";
        echo "<p style='color: white' class='labelimp'>Situation familiale : " . $situfamiliale . "</p>";
        echo "<p style='color: white' class='labelimp' >Date de début de situation familiale : " . $datesitufamiliale . "</p>";
        echo "<p style='color: white' class='labelimp'>Email : " . $email. "</p>";
        echo "<p style='color: white' class='labelimp'>Téléphone portable : " . $tel. "</p>";
        echo "<p style='color: white' class='labelimp'>Nombre d'enfants mineurs : " . $enfantsmineurs. "</p>";
        echo "<p  style='color: white'class='labelimp'>Nombre d'enfants majeurs : " . $enfantsmajeurs. "</p>";
        echo "<p style='color: white' class='labelimp'>Nombre de parents à charge : " . $parentsCharge. "</p>";
        echo "<p style='color: white'class='labelimp'>Cause du handicap : " . $causeduhandicap. "</p>";
        echo "<p style='color: white'class='labelimp'>Activités demandées: " . $activitesString. "</p>";
        echo "</form>";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Créer une instance du gestionnaire de formulaire avec les données postées
            $handler = new FormulaireHandler($_POST);
        
            // Afficher le récapitulatif
            $handler->afficherRecap();
        } else {
            // Rediriger vers le formulaire si le formulaire n'a pas été soumis
            header("Location: form.html");
            exit();
        }
    }
}

$civilite = $_POST["civilite"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$datenaissance = $_POST['datenaissance'];
$adresse = $_POST['adresse'];
$codePostal = $_POST['codePostal'];
$ville = $_POST['ville'];
$situfamiliale = $_POST['situfamiliale'];
$datesitufamiliale = $_POST['datesitufamiliale'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$enfantsmineurs = $_POST['enfantsMineurs'];
$enfantsmajeurs = $_POST['enfantsMajeurs'];
$parentsCharge = $_POST['parentsCharge'];
$causeduhandicap = $_POST['causeduhandicap'];
$activitesArray = $_POST['activites'];
$activitesString = implode(", ", $activitesArray);

$baseDeDonnees = new Database();
$baseDeDonnees->connecter();
$baseDeDonnees->enregistrerAdherent($civilite, $nom, $prenom, $datenaissance, $adresse, $codePostal, $ville, $situfamiliale, $datesitufamiliale, $email, $tel, $enfantsmineurs, $enfantsmajeurs, $parentsCharge, $causeduhandicap, $activitesString);
$baseDeDonnees->afficherRecap();
$baseDeDonnees->deconnecter();
?>

    </form>
</div>
</div>
</body>
</html>
