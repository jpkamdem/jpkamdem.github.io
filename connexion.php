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
    <title>Formulaire pour les adhérents</title>

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
                              <li><a class="dropdown-item" href="">Connexion</a></li>
                              <li><a class="dropdown-item" href="form.html">Inscription</a></li>
                          </li>
                        </ul>
                </div>
            </div>
        </nav>
    <section style="padding-bottom: 12em ">
    <div class="txt">
        <p id="title">Connexion</p>
        <p id="subtitle">Veuillez vous connectez pour toute réservation souhaitée :</p>
    </div>
    <div class="container mt-6" style="margin-top:7em;">
        <div class="col-md-6 mx-auto">
        <form method="post" action="login.php">
            <div class="form-group" style="padding-bottom: 2em ">
                <label class="labelimp" for="email">Email:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre adresse email">
                <p style="color:rgb(255, 165, 165);"><?php echo isset($_GET['errorEmail']) ? $_GET['errorEmail'] : ''; ?></p>
            </div>
            <div class="form-group"  style="padding-bottom: 2em ">
                <label class="labelimp" for="telephone">Mot de passe:</label>
                <div class="input-group">
                    <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Entrez votre mot de passe">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <p style="color: rgb(255, 165, 165);;"><?php echo isset($_GET['errorPassword']) ? $_GET['errorPassword'] : ''; ?></p>

            </div>
            <button type="submit" class="btn btn-primary" style="background-color:#C9D9F3;color: #567cbc;border-color: #C9D9F3;margin-top: 1em;">Connexion</button>
        </form>
    </div>
</div>
<div id="cookie-btn">
    <a href="#" id="open_preferences_center">
        <img src="assets/cookie.png" alt="">
    </a>
</div>
</section>
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
<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('mdp');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Change l'icône en conséquence (œil ou œil barré)
        this.innerHTML = type === 'password' ? '<i class="fa fa-eye" aria-hidden="true"></i>' : '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
    });
</script>
</html>