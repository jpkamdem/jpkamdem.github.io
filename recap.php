<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=B612&display=swap" rel="stylesheet">
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/form.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/presentation.css">
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
</link>
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <title>Récapitulaif des données</title>

</head>
<body>
    <style>
        body{
            cursor:auto;
            }
    </style>
        <script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.1.0/cookie-consent.js"
            charset="UTF-8"></script>
        <script type="text/javascript" charset="UTF-8">
            document.addEventListener('DOMContentLoaded', function () {
                cookieconsent.run({ "notice_banner_type": "standalone", "consent_type": "express", "palette": "light", "language": "fr", "page_load_consent_levels": ["strictly-necessary"], "notice_banner_reject_button_hide": false, "preferences_center_close_button_hide": false, "page_refresh_confirmation_buttons": false, "website_name": "AC2FL" });
            });
        </script>
    
        <noscript>Free cookie consent management tool by <a href="https://www.termsfeed.com/">TermsFeed</a></noscript>
        <!-- End Cookie Consent by TermsFeed https://www.TermsFeed.com -->
    
    
    
    
    
        <!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->
    
    
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="site.html">
                            <img src="assets/logo.png" alt="Logo" width="42" height="34"
                                class="d-inline-block align-text-top" />
                        </a>
                    </div>
                </nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: space-between;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Qui sommes-nous</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nos-activites">Nos activités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gros-titre">Tarifs</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Identification
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="connexion.php">Connexion</a></li>
                              <li><a class="dropdown-item" href="form.html">Inscription</a></li>
                          </li>
                        </ul>
                </div>
            </div>
        </nav>
        <div id="cookie-btn">
    <a href="#" id="open_preferences_center">
        <img src="assets/cookie.png" alt="">
    </a>
</div>
<div class="container mt-6">
    <div class="col-md-6 mx-auto">
    <?php

class Database
{
    private $host = "localhost";
    private $utilisateur = "root";
    private $mdp = "";
    private $nomBase = "PILI, ROBERT, KAMDEM, TEMMAR -ACF2L";
    private $connexion;

    public function getConnexion()
    {
        return $this->connexion;
    }

    public function connecter()
    {
        $this->connexion = new mysqli($this->host, $this->utilisateur, $this->mdp, $this->nomBase);

        if ($this->connexion->connect_error) {
            die("Échec de la connexion à la base de données : " . $this->connexion->connect_error);
        }
    }

    public function enregistrerAdherent($civilite, $nom, $prenom, $datenaissance, $adresse, $codePostal, $ville, $situfamiliale, $datesitufamiliale, $email, $tel, $enfantsmineurs, $enfantsmajeurs, $parentsCharge, $causeduhandicap, $mdp, $activitesString)
{
    // Utilisez password_hash pour hacher le mot de passe avant de l'insérer dans la base de données
    $mdpHache = password_hash($mdp, PASSWORD_BCRYPT);

    $requete = $this->connexion->prepare("INSERT INTO `pili,robert,kamdem,temmar - adhérent` (Civilité, Nom, Prénom, Datenaissance, Adresse, Codepostale, Ville, Situationfamiliale, Datedébut, Email, Telephone, Nbchargesenfantsmin, Nbchargesenfantsmaj, Nbchargesparents, Causehandicap, mdp, Activitésdemandées) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($requete === false) {
        die("Erreur préparation de la requête : " . $this->connexion->error);
    }

    $requete->bind_param("sssssssssssssssss", $civilite, $nom, $prenom, $datenaissance, $adresse, $codePostal, $ville, $situfamiliale, $datesitufamiliale, $email, $tel, $enfantsmineurs, $enfantsmajeurs, $parentsCharge, $causeduhandicap, $mdpHache, $activitesString);

    if (!$requete->execute()) {
        $erreur = $this->connexion->error;
        $erreurInfo = $requete->errorInfo(); // Ajout de cette ligne pour obtenir des informations détaillées
        die("Erreur lors de l'exécution de la requête : " . $erreur . " | " . implode(", ", $erreurInfo));
    }
    
    $requete->close();
    
    // Récupérer le dernier ID inséré
    $numAdherent = $this->connexion->insert_id;

    return $numAdherent;
}

    public function deconnecter()
    {
        $this->connexion->close();
    }

    public function afficherRecap()
    {
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
        $mdp = $_POST['mdp'];

        echo "<form id='recap'>";
        echo "<p id='title' style='color: #c9d9f3;'>Merci " . $prenom . ", de vous être inscrit en tant qu'adhérent !</p>";
        echo "<p id='subtitle' style='color: #c9d9f3;'>Nous sommes ravis de vous accueillir parmi nous.<br>Voici un récapitulatif de vos informations :</p>";
        echo "<p style='color: white' class='labelimp'>Civilité : " . $civilite . "</p>";
        echo "<p style='color: white' class='labelimp'>Nom : " . $nom . "</p>";
        echo "<p style='color: white' class='labelimp'>Prénom : " . $prenom . "</p>";
        echo "<p style='color: white' class='labelimp'>Date de naissance : " . $datenaissance . "</p>";
        echo "<p style='color: white' class='labelimp'>Adresse : " . $adresse . "</p>";
        echo "<p style='color: white' class='labelimp'>Code Postal : " . $codePostal . "</p>";
        echo "<p style='color: white' class='labelimp'>Ville : " . $ville . "</p>";
        echo "<p style='color: white' class='labelimp'>Situation familiale : " . $situfamiliale . "</p>";
        echo "<p style='color: white' class='labelimp' >Date de début de situation familiale : " . $datesitufamiliale . "</p>";
        echo "<p style='color: white' class='labelimp'>Email : " . $email . "</p>";
        echo "<p style='color: white' class='labelimp'>Téléphone portable : " . $tel . "</p>";
        echo "<p style='color: white' class='labelimp'>Nombre d'enfants mineurs : " . $enfantsmineurs . "</p>";
        echo "<p  style='color: white'class='labelimp'>Nombre d'enfants majeurs : " . $enfantsmajeurs . "</p>";
        echo "<p style='color: white' class='labelimp'>Nombre de parents à charge : " . $parentsCharge . "</p>";
        echo "<p style='color: white'class='labelimp'>Cause du handicap : " . $causeduhandicap . "</p>";
        echo "<p style='color: white'class='labelimp'>Activités demandées: " . $activitesString . "</p>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baseDeDonnees = new Database();
    $baseDeDonnees->connecter();

    $email = $_POST['email'];
    $checkDoublons = $baseDeDonnees->getConnexion()->query("SELECT COUNT(*) FROM `pili,robert,kamdem,temmar - adhérent` WHERE Email = '$email'");
    if ($checkDoublons && $checkDoublons->fetch_row()[0] == 0) {
        // L'adhérent n'existe pas, on peut l'enregistrer
        $numAdherent = $baseDeDonnees->enregistrerAdherent(
            $_POST["civilite"], $_POST["nom"], $_POST["prenom"],
            $_POST['datenaissance'], $_POST['adresse'], $_POST['codePostal'],
            $_POST['ville'], $_POST['situfamiliale'], $_POST['datesitufamiliale'],
            $_POST['email'], $_POST['tel'], $_POST['enfantsMineurs'], $_POST['enfantsMajeurs'],
            $_POST['parentsCharge'], $_POST['causeduhandicap'], $_POST['mdp'], implode(", ", $_POST['activites'])
        );

        $baseDeDonnees->afficherRecap();
        echo "<p style='color: white' class='labelimp'>Numéro d'adhérent :" . $numAdherent . "</p>";
        echo "</form>";
    } else {
        // L'adhérent existe déjà, afficher un message d'erreur par exemple
        echo "Cet adhérent existe déjà.";
    }

    $baseDeDonnees->deconnecter();
} else {
    // Rediriger vers le formulaire si le formulaire n'a pas été soumis
    header("Location: form.html");
    exit();
}

?>

</div>
</div>
<footer>
    <div class="foot-item">
        <div class="info-list">
            <h1>Information</h1>
        </div>
        <div class="info-list" style="padding-bottom: 0;
        padding-top: 0;">
            <img src="assets/email.png" alt="">
            <p>acf2l@gmail.com</p>
        </div>
        <div class="info-list" style="padding-bottom: 0;
        padding-top: 0;">
            <img src="assets/phone-call.png" alt="">
            <p>+33 01 60 56 60 60</p>
        </div>
        <div class="info-list" style="padding-bottom: 0;
        padding-top: 0;">
            <img src="assets/maps-and-flags.png" alt="">
            <p>62, Avenue de la République, 70200 Lure</p>
        </div>
        <div class="info-list">
            <img src="assets/instagram.png" alt="">
            <img src="assets/twitter.png" alt="">
            <img src="assets/youtube.png" alt="">
        </div>

    </div>
    <div class="foot-item">
        <div class="info-list" style="padding-left: 0;">
            <h1>Contactez-nous</h1>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" width="98%"><br>
            <input class="form-control" type="text" placeholder="Sujet" aria-label="default input example" width="98%"><br>
            <input class="form-control" type="text" placeholder="Description"
                aria-label="default input example" width="98%">
                <br>
                <div class="cards-price">
                    <button type="button " class="btn btn-outline-light">Soumettre</button>
                </div>
        </div>
    </div>
</footer>
</body>
</html>
