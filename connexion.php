<?php
$bdd = new PDO('mysql:host=localhost;dbname=membres;charset=utf8;', 'root', 'root');
if(isset($_POST['envoi'])){
    if(!empty($_POST['adress']) AND !empty($_POST['mdp'])){
        $adress = htmlspecialchars($_POST['adress']);
        $mdp = sha1($_POST['mdp']);

        $recupuser = $bdd->prepare('SELECT * FROM users WHERE adress = ? AND mdp = ?');
        $recupuser->execute(array($adress, $mdp));

        }else{
            echo "error";
    }
}

?>

<!DOCTYPE html>

<html data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://kit.fontawesome.com/66ce4227d4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="GoFinance.css">  
        <script src="sgcw.js" defer></script>
        <title>GoFinance</title>
    </head>
    <body class="p-3 mb-2 bg-body-tertiary text-white" style="--bs-bg-opacity: .8;">
        <header>
            <nav>
                <img src="Plan_de_travail_2.svg" class="rounded float-end" width="5%" height="5%">
                  <a href="Systeme de gestion comptable web.html"><button class="btn btn-outline-success me-2" type="button">GoFinance</button></a>
                  <a href="board.html"><button class="btn btn-sm btn-outline-secondary" type="button">Tableau de bord</button></a>
                  <a href="management.html"><button class="btn btn-sm btn-outline-secondary" type="button">Gestion</button></a>
                  <a href="review.html"><button class="btn btn-sm btn-outline-secondary" type="button">Bilan</button></a>
                  <a href="connexion.php"><button class="btn btn-sm btn-outline-secondary" type="button">Compte</button></a>
              </nav>
        </header>

     
        <main class="form-signin w-25 m-auto">
            <form>
                <p class="mb-3 fw-normal font_monospace fs-3">Connexion</p>
            
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"name="mail">
                    <label for="floatingInput">Adresse mail</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="mdp">
                    <label for="floatingPassword">Mot de passe</label>
                </div>
            
                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Se souvenir de moi
                    </label>
                </div>

                <button class="btn btn- w-100 bg-success" type="submit">connexion</button>

                <a href="inscription.php">
                    <button type="button" class="btn btn-danger mt-2 d-flex m-auto">je n'ai pas de compte</button>
                </a>

                <p class="mt-5 mb-3 text-body-secondary">© 2017-2023</p>

            </form>
        </main>

        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>

    </body>

</html>