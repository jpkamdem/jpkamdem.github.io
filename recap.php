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
    <p id="title">Récapitulatif</p>
    <p id="subtitle">Voici les informations que vous venez de renseignez :</p>
    </div>
<div class="container mt-6">
    <div class="col-md-6 mx-auto">
    <form>
    <?php

class FormulaireHandler {
    private $data;

    public function __construct($postData) {
        $this->data = $postData;
    }

    public function afficherRecap() {
        echo "<form style='background-color:#567CBC; padding: 26px; margin: 12px; border-radius: 24px; color: white; width: 34em;'>";
        echo "<p style='color: white' class='labelimp'>Civilité : " . $_POST['civilite'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Nom : " . $_POST['nom'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Prénom : " . $_POST['prenom'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Date de naissance : " . $_POST['datenaissance'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Adresse : " . $_POST['adresse'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Code Postal : " . $_POST['codePostal'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Ville : " . $_POST['ville'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Situation familiale : " . $_POST['situfamiliale'] . "</p>";
        echo "<p style='color: white' class='labelimp' >Date de début de situation familiale : " . $_POST['datesitufamiliale'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Email : " . $_POST['email'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Téléphone portable : " . $_POST['tel'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Nombre d'enfants mineurs : " . $_POST['enfantsMineurs'] . "</p>";
        echo "<p  style='color: white'class='labelimp'>Nombre d'enfants majeurs : " . $_POST['enfantsMajeurs'] . "</p>";
        echo "<p style='color: white' class='labelimp'>Nombre de parents à charge : " . $_POST['parentsCharge'] . "</p>";
        echo "<p style='color: white'class='labelimp'>Cause du handicap : " . $_POST['causeduhandicap'] . "</p>";

        if (isset($_POST['activites'])) {
            $activitesChoisies = $_POST['activites'];
            echo "<p style='color: white'class='labelimp'>Activités choisies : " . implode(', ', $activitesChoisies) . "</p>";
        } else {
            echo "<p style='color: white' >Aucune activité choisie.</p>";
        }
        echo "</form>";
    }
}

// Vérifier si le formulaire a été soumis
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
?>


    </form>
</div>
</div>
</body>
</html>